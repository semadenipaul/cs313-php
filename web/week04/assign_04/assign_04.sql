/*DROP TABLE person;
DROP TABLE keywords;
DROP TABLE national_parks;
DROP TABLE previous_parks_visited;
DROP TABLE person_reviews;*/

DROP TABLE national_parks_selected;

/*CREATE TABLE person
(
    id SERIAL NOT NULL PRIMARY KEY,
    USER_NAME VARCHAR(80) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    person_email VARCHAR(100),
    new_person BOOLEAN,
    city VARCHAR(100),
    state VARCHAR(100)
);

CREATE TABLE national_parks
(
    id SERIAL NOT NULL PRIMARY KEY,
    national_park VARCHAR(200),
    image   VARCHAR(500) NOT NULL,
    US_state VARCHAR(200) NOT NULL,
    nature1 VARCHAR(200) NOT NULL,
    nature2 VARCHAR(200) NOT NULL,
    activities1 VARCHAR(200) NOT NULL,
    activities2 VARCHAR(200) NOT NULL,
    activities3 VARCHAR(200) NOT NULL,
    vacation_time VARCHAR(100) NOT NULL
);*/

CREATE TABLE national_parks_selected
(
    id SERIAL NOT NULL PRIMARY KEY,
    person INT NOT NULL REFERENCES person(id),
    national_parks INT NOT NULL REFERENCES national_parks(id),
    us_state VARCHAR(200) NOT NULL,
    nature1 VARCHAR(200) NOT NULL,
    nature2 VARCHAR(200) NOT NULL,
    activities1 VARCHAR(200) NOT NULL,
    activities2 VARCHAR(200) NOT NULL,
    activities3 VARCHAR(200) NOT NULL,
    vacation_time VARCHAR(100) NOT NULL
)


/*CREATE TABLE previous_parks_visited
(
    id SERIAL NOT NULL PRIMARY KEY,
    person INT NOT NULL REFERENCES person(id),
    national_parks INT NOT NULL REFERENCES national_parks(id),
    UNIQUE (person, national_parks)
);

CREATE TABLE person_reviews
(
    id SERIAL NOT NULL PRIMARY KEY,
    previous_parks_visited INT NOT NULL REFERENCES previous_parks_visited(id),
    reviews_content TEXT
);*/

/*INSERT INTO person
        (USER_NAME, password, person_email, new_person, city, state)
VALUES
        ('MikeMizouski', 'd@tswrite88', 'mike@monsters.inc', True, 'Munster', 'Wisconsin');
INSERT INTO person
        (USER_NAME, password, person_email, new_person, city, state)
VALUES
        ('TomBrady', 'superbowls6', 'patriots@nfl.com', False, 'Boston', 'Massachusetts');
INSERT INTO person
        (USER_NAME, password, person_email, new_person, city, state)
VALUES
        ('DonovanMitchell', 'allstar#1', 'teamplayer@utahJazz.org', True, 'Salt Lake City', 'Utah');
INSERT INTO person
        (USER_NAME, password, person_email, new_person, city, state)
VALUES
        ('semadenipaulo', 'brazilsdastuff44', 'soccor4life@gmail.com', False, 'Sao Antonio', 'Texas');
INSERT INTO person
        (USER_NAME, password, person_email, new_person, city, state)
VALUES
        ('SatynaraynaNakkapalli', 'indiatechlife5', 'cricketisdabest@yahoo.com', True, 'Des Moines', 'Iowa');

INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Grand Teton National Park',
                'teton.gif',
                'Wyoming',
                'Mountains',
                'Forest',
                'Hiking',
                'Camping',
                'Fishing',
                '2 - 4 Days'
        );
INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Glacier National Park',
                'glacier.jpg',
                'Montana',
                'Lakes',
                'Forest',
                'Camping',
                'Photography',
                'Hiking',
                '4 - 7 days'
        );
INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Haleakalā National Park',
                'hawaii.jpg',
                'Hawaii',
                'Waterfalls',
                'Beach',
                'Hiking',
                'Swimming',
                'Snorkeling',
                '7 - 14 days');
INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Arches National Park',
                'arches.jpg',
                'Utah',
                'Canyons',
                'Rivers',
                'ATV',
                'Camping',
                'Hiking',
                '7 - 9 days');
INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Acadia National Park',
                'arcadia.jpg',
                'Maine',
                'Coastline',
                'Mountains',
                'Hiking',
                'Photography',
                'Camping',
                '2 - 4 days');

INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Canyonlands National Park',
                'canyonlands.jpg',
                'Utah',
                'Canyons',
                'Desert',
                'ATV',
                'Camping',
                'Hiking',
                '7 - 9 days');

INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Denali National Park',
                'alaska.jpg',
                'Alaska',
                'Tundra',
                'Mountains',
                'Fishing',
                'Photography',
                'Wildlife',
                '8 - 15 days');

INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Everglades National Park',
                'everglades.jpg',
                'Florida',
                'Swamps',
                'Lakes',
                'Fishing',
                'Boating',
                'Camping',
                '6 - 8 days');

INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Great Smoky Mountain National Park',
                'smokymtn.jpg',
                'Tennessee',
                'Forest',
                'Mountains',
                'Hiking',
                'Photography',
                'Running',
                '2 - 3 days');

INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Yellowstone National Park',
                'yellowstone.jpg',
                'Wyoming',
                'Geysers',
                'Mountains',
                'Wildlife',
                'Photography',
                'Camping',
                '7 - 9 days');

INSERT INTO national_parks
        (national_park, image, US_state, nature1, nature2, activities1, activities2, activities3, vacation_time)
VALUES
        ('Yosemite National Park',
                'yosemite.jpg',
                'California',
                'Forest',
                'Mountains',
                'Hiking',
                'Rock Climbing',
                'Camping',
                '5 - 8 days');


INSERT INTO previous_parks_visited
        (person, national_parks)
VALUES
        (2, 4);
INSERT INTO previous_parks_visited
        (person, national_parks)
VALUES
        (4, 1);

INSERT INTO person_reviews
        (previous_parks_visited, reviews_content)
VALUES
        (2, 'I loved visiting Arches National Park! My kids loved playing in the red sand. I would recommend setting aside 4-5 weeks to see all of the amazing sights. 5/5 STARS');
INSERT INTO person_reviews
        (previous_parks_visited, reviews_content)
VALUES
        (1, 'Grand Teton National Park was spectacular! It was a little dangerous with all of the bears wandering around, but as long as you do not feed the bears, you will be safe. 4/5 STARS');
*/