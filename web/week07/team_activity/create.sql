IF EXISTS DROP TABLE w7_usr;

CREATE TABLE w7_usr (
  id       SERIAL       NOT NULL PRIMARY KEY,
  username VARCHAR(100) UNIQUE NOT NULL,
  hashPass VARCHAR(100) NOT NULL
);