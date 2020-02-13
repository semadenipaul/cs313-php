/*DROP TABLE person;
DROP TABLE keywords;
DROP TABLE national_parks;
DROP TABLE previous_parks_visited;
DROP TABLE person_reviews;*/

/*CREATE TABLE person
(
    id SERIAL NOT NULL,
    USER_NAME VARCHAR(80) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    person_email VARCHAR(100),
    new_person BOOLEAN,
    person_location VARCHAR(256),
    PRIMARY KEY (id)
);

CREATE TABLE keywords
(
    key_words_id SERIAL NOT NULL,
    person INT NOT NULL REFERENCES person(id),
    keywords TEXT,
    PRIMARY KEY (key_words_id)
);

CREATE TABLE national_parks
(
    national_parks_id SERIAL NOT NULL,
    national_park TEXT,
    key_words INT REFERENCES keywords(key_words_id),
    --person INT NOT NULL REFERENCES person(id),
    keywords_to_describe_national_parks TEXT,
    --previous_parks_visited INT NOT NULL REFERENCES previous_parks_visited(previous_parks_id),
    PRIMARY KEY (national_parks_id)
);

CREATE TABLE previous_parks_visited
(
    previous_parks_id SERIAL NOT NULL,
    person INT NOT NULL REFERENCES person(id),
    national_parks INT NOT NULL REFERENCES national_parks(national_parks_id),
    UNIQUE (person, national_parks),
    PRIMARY KEY (previous_parks_id)
);

CREATE TABLE person_reviews
(
    reviews_id SERIAL NOT NULL,
    previous_parks_visited INT NOT NULL REFERENCES previous_parks_visited(previous_parks_id),
    reviews_content TEXT,
    --person INT NOT NULL REFERENCES person(id),
    PRIMARY KEY (reviews_id)
);*/

INSERT INTO person (USER_NAME, password, person_email, new_person, person_location)
VALUES ('MikeMizouski','d@tswrite88','mike@monsters.inc', True, 'Munster, Wisconsin');
INSERT INTO person (USER_NAME, password, person_email, new_person, person_location)
VALUES ('TomBrady','superbowls6','patriots@nfl.com', False, 'Boston, MA');
INSERT INTO person (USER_NAME, password, person_email, new_person, person_location)
VALUES ('DonovanMitchell','allstar#1','teamplayer@utahJazz.org', True, 'Salt Lake City, Utah');
INSERT INTO person (USER_NAME, password, person_email, new_person, person_location)
VALUES ('semadenipaulo','brazilsdastuff44','soccor4life@gmail.com', False, 'Sao Paolo, Brazil');
INSERT INTO person (USER_NAME, password, person_email, new_person, person_location)
VALUES ('SatynaraynaNakkapalli','indiatechlife5','cricketisdabest@yahoo.com', True, 'Indranagar, Bengaluru, India');

INSERT INTO keywords (person, keywords)
VALUES (1, 'red, canyon, rocks, jeep, sunny, Utah');
INSERT INTO keywords (person, keywords)
VALUES (2, 'snow, mountains, ski, cold, white, Wyoming');
INSERT INTO keywords (person, keywords)
VALUES (3, 'humid, tropical, sunny, palm trees, Hawaii');
INSERT INTO keywords (person, keywords)
VALUES (4, 'geysers, animals, fishing, forest, mountains, Montana');
INSERT INTO keywords (person, keywords)
VALUES (5, 'waterfalls, rivers, bridges, swimming, New York');

INSERT INTO national_parks (national_park, key_words, keywords_to_describe_national_parks)
VALUES ('Grand Teton National Park', 2, 'snow, Colorado, Utah, Wyoming, cold, ski, snowboard, sledding, ice fishing');
INSERT INTO national_parks (national_park, key_words, keywords_to_describe_national_parks)
VALUES ('Glacier National Park', 4, 'buffalo, deer, elk, Montana, Bamff, geysers. mountains, fishing, forest');
INSERT INTO national_parks (national_park, key_words, keywords_to_describe_national_parks)
VALUES ('Haleakalā National Park', 3, 'volcanoes, waterfalls, beach, palm trees, sunny, humid, tropical, pineapple, Hawaii, Florida, Georgia');
INSERT INTO national_parks (national_park, key_words, keywords_to_describe_national_parks)
VALUES ('Arches National Park', 1, 'arches, jeep, red, canyon, sunny, Utah, rattlesnakes');
INSERT INTO national_parks (national_park, key_words, keywords_to_describe_national_parks)
VALUES ('Niagra Falls National Park', 5, 'waterfalls, rivers, ferry, bridges, New York, Toronto, Canada');

INSERT INTO previous_parks_visited (person, national_parks)
VALUES (2, 4);
INSERT INTO previous_parks_visited (person, national_parks)
VALUES (4, 1);

INSERT INTO person_reviews (previous_parks_visited, reviews_content)
VALUES (2, 'I loved visiting Arches National Park! My kids loked playing in the red sand. I would recommend setting aside 4-5 weeks to see all of the amazing sights. 5/5 STARS');
INSERT INTO person_reviews (previous_parks_visited, reviews_content)
VALUES (1, 'Grand Teton National Park was spectacular! It was a little dangerous with all of the bears wandering around, but as long as you do not feed the bears, you will be safe. 4/5 STARS');
