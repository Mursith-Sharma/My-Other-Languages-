CREATE DATABASE mrsith;                           -- create and delete database
DROP DATABASE mursith;
DROP TABLE mursith;

------------------------------------------------------------------------------------------------------

USE database_name;
CREATE TABLE students_info                         -- create table for database_name
(
    st_id integer NOT Null,
    st_name VARCHAR (20) NOT null,
    st_email varchar (40) NOT null,
    PRIMARY KEY (st_id)
);
