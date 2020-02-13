<?php
require("dbConnect.php");
$db = get_db();
?>

<body>
   <div class="container">
      <?php
      // retrieve url parameter
      $scriptureId = $_GET['scriptureId'];

      // execute query to pull up data from that id
      $statement = $db->prepare(
          'SELECT p.book AS book, p.chapter AS chapter, p.verse AS verse, p.content AS content, t.topic AS topic
            FROM Scriptures p 
            INNER JOIN scripture_topic st  ON p.id = st.scripture_id 
            INNER JOIN topic t ON st.topic_id = t.id
            WHERE t.name = \'Faith\''
            );

      $statement->bindValue(':scriptureId', $scriptureId);
      $statement->execute();

      while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
         $id = $row['id'];
         $book = $row['book'];
         $chapter = $row['chapter'];
         $verse = $row['verse'];
         $content = $row['content'];
         $topic_id = $row['topic'];

         $topic = $db->prepare("SELECT * FROM topic WHERE Id = $topic_id");
               $topic->execute();
               while ($frow = $topic->fetch(PDO::FETCH_ASSOC)){
                  $topic = $frow['topic'];
               }
         echo "<h1>$book $chapter :$verse</h1>
         <br> <p>$content</p> <br> <p>Topics: $topic</p>";
      }
      // execute another query to get food data
      // display name and favorite food
      ?>

   </div>
</body>

</html>