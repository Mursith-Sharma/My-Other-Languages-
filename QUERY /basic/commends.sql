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

------------------------------------------------------------------------------------------------------

CREATE USER 'user'@'%' IDENTIFIED WITH sha256_password BY '***';GRANT ALL PRIVILEGES ON *.* TO 'user'@'%' WITH GRANT OPTION;ALTER USER 'user'@'%' REQUIRE NONE WITH                     
MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `user`;GRANT ALL PRIVILEGES ON `user`.* TO 
'user'@'%';GRANT ALL PRIVILEGES ON `user\_%`.* TO 'user'@'%';
                                                                            --add user account koduththal. ithai code panna vendiya avasiyamillai  gui il create pannal athuve code inai tharum
------------------------------------------------------------------------------------------------------

DROP USER 'user'@'%';                                  --remove user

------------------------------------------------------------------------------------------------------

USE mursith;
CREATE TABLE employee(
    epm_id int PRIMARY,                             -- ivvaru primary key koduththal not null kodukka thevaiyillai bcz it's primary key 
    emp_name VARCHAR(30) not null,
    emp_address varchar(50) NOT null,
    salary decimal(5,2) not null
    );

------------------------------------------------------------------------------------------------------

CREATE TABLE student_course (
    student_id INT,
    course_id INT,              
    enrollment_date DATE,
    PRIMARY KEY (student_id, course_id)             --compositive primary key ( 2um primary key aga payanpaduththalam )
);

------------------------------------------------------------------------------------------------------

CREATE TABLE employee3(                        -- forign key enter 2 table inai connect pannum key. athavathu A table in primary key inai B table il connect pannal. antha B table il ulla key inai forign key enpom.
    emp_id int NOT null,     
    emp_name VARCHAR(30) not null,
    emp_address varchar(50) NOT null,
    salary decimal(5,2) not null,
    deb_id int NOT null,                                        -- deb_id enpathu veroru table in primary key 
    PRIMARY KEY (emp_id),                                       -- emp_id inai employee3 table il primary key aaha set pannal
    FOREIGN KEY(deb_id) REFERENCES department(deb_id)           -- now employee3 table in primary key aanathu intha table il forign key aagum.
    );                                                          -- athanai  REFERENCES department(deb_id) enpathu department enum table il ulla deb_id inai reference pannuthal
                                                                -- ivvaru kodukka kaaranam veru table kalilum deb_id entru irukkalam athanalthan department enum table inai referens pannuhirom.

