CREATE TABLE person
(
    id INT NOT NULL,
    USER_NAME VARCHAR(80) NOT NULL,
    person_email VARCHAR(100),
    new_person BOOLEAN,
    person_location VARCHAR(256),
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE keywords
(
    key_words_id INT, --primary key
    --person INT REFERENCES person(id),
    --location_person VARCHAR REFERENCES person(person_location),
    --is_new_person BOOLEAN REFERENCES person(new_person),
    keywords TEXT,
    PRIMARY KEY (key_words_id)
);

CREATE TABLE previous_parks_visited
(
    id INT NOT NULL,
    --person INT REFERENCES person(id),
    --is_new_person BOOLEAN REFERENCES person(new_person),
    --national_park INT REFERENCES national_parks(id),
    PRIMARY KEY (id)
);

CREATE TABLE previous_parks_visited_average_cost
(
    previous_parks_visited INT REFERENCES previous_parks_visited(id),
    average_cost INT REFERENCES average_cost_previous_trip(average_cost_id)
    --location_person VARCHAR REFERENCES person(person_location)
);

CREATE TABLE average_cost_previous_trip
(
    average_cost_id INT,
    previous_parks_visited INT REFERENCES previous_parks_visited(id),
    --person INT REFERENCES person(id),
    PRIMARY KEY (average_cost_id)
);

CREATE TABLE national_parks
(
    id INT NOT NULL,
    key_words INT REFERENCES keywords(key_words_id),
    --person INT REFERENCES person(id),
    keywords_to_describe_national_parks TEXT,
    previous_parks_visited INT REFERENCES previous_parks_visited(id),
    PRIMARY KEY (id)
);


CREATE TABLE person_reviews
(
    reviews_id INT,
    reviews_content TEXT,
    --person INT REFERENCES person(id), --foreign key
    previous_parks_visited INT REFERENCES previous_parks_visited(id),
    average_cost INT REFERENCES average_cost_previous_trip(average_cost_id),
    PRIMARY KEY (reviews_id)
);