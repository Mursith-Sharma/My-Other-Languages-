CREATE DATABASE mrsith;                           -- create and delete database
DROP DATABASE mursith;
DROP TABLE mursith;

------------------------------------------------------------------------------------------------------

USE database_name;
CREATE TABLE students_info                         -- create table for database_name
(
    st_id integer NOT Null,                       -- keywords capital & small does'nt matter ( varchar, integer ,null ,..etc)
    st_name VARCHAR (20) NOT null,
    st_email varchar (40) NOT null,
    PRIMARY KEY (st_id)
);

------------------------------------------------------------------------------------------------------

ALTER TABLE students_info                         -- ivvaru marupadium column add panna mudium
ADD st_mobile integer ;

------------------------------------------------------------------------------------------------------

ALTER TABLE students_info MODIFY COLUMN st_mobile          -- students_info ilulla st_mobile inai modify pannal
CHARACTER (20) ;

------------------------------------------------------------------------------------------------------

RENAME TABLE students_info to students_information;        --rename
