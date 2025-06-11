
-----------------------------------------------#################### DDL ( Data Definition Language ) #####################-------------------------------------------------------

CREATE DATABASE mrsith;                           -- create and delete database
DROP DATABASE mursith;
DROP TABLE mursith;

------------------------------------------------------------------------------------------------------

SHOW TABLE STATUS LIKE 'employee';                 -- table inai view panna

------------------------------------------------------------------------------------------------------

USE database_name;                               -- antha database il irunthal mantion panna thvaiyillai
CREATE TABLE students_info                         -- create table for database_name
(
    st_id integer NOT Null,                       -- keywords capital & small does'nt matter ( varchar, integer ,null ,..etc)
    st_name VARCHAR (20) NOT null,
    st_email varchar (40) NOT null,
    PRIMARY KEY (st_id)
);

------------------------------------------------------------------------------------------------------

DROP TABLE table_name;                                -- table delete

------------------------------------------------------------------------------------------------------
ALTER TABLE employee2
add COLUMN mna int;                                -- create column and delete column

ALTER TABLE employee2
drop COLUMN mna;

------------------------------------------------------------------------------------------------------

ALTER TABLE students_info                          
MODIFY COLUMN st_name varchar(40);                   -- antha table ilulla column inai ivvaru edit panna mudium (data length )

------------------------------------------------------------------------------------------------------

ALTER TABLE students_info 
CHANGE COLUMN st_name emp_name VARCHAR(40);           -- column rename method

------------------------------------------------------------------------------------------------------

RENAME TABLE students_info TO std_info;                 -- table rename method

------------------------------------------------------------------------------------------------------

ALTER TABLE students_info 
MODIFY COLUMN emp_name INT;                         -- change  data type ( already varchar il irunthathu)

------------------------------------------------------------------------------------------------------

ALTER TABLE students_info                         -- ivvaru marupadium column add panna mudium
ADD st_mobile integer ;

------------------------------------------------------------------------------------------------------

ALTER TABLE students_info                         -- ivvaru delete panna mudium

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

ALTER TABLE department                               -- oru table kku puthithaga key add pannal
ADD PRIMARY KEY (deb_id)
    
------------------------------------------------------------------------------------------------------

CREATE TABLE student_course (
    student_id INT,
    course_id INT,              
    enrollment_date DATE,
    PRIMARY KEY (student_id, course_id)             --compositive primary key ( 2um primary key aga payanpaduththalam )
);

------------------------------------------------------------------------------------------------------

CREATE TABLE employee3(                        -- forign key entraal 2 table inai connect pannum key. athavathu A enum table in primary key inai employee3 table il connect pannal. antha A table il ulla primary key inai inge forign key enpom.
    emp_id int NOT null,     
    emp_name VARCHAR(30) not null,
    emp_address varchar(50) NOT null,
    salary decimal(5,2) not null,
    deb_id int NOT null,                                        -- deb_id enpathu department table in primary key 
    PRIMARY KEY (emp_id),                                       -- emp_id inai employee3 table il primary key aaha set pannal
    FOREIGN KEY(deb_id) REFERENCES department(deb_id)           -- now department table in primary key aanathu intha table il forign key aagum.
    );                                                          -- athanai  REFERENCES department(deb_id) enpathu department enum table il ulla deb_id inai reference pannuthal
                                                                -- ivvaru kodukka kaaranam veru table kalilum deb_id entru irukkalam athanalthan department enum table inai referens pannuhirom.

--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

|  deb_id | DNAME   |
| ------- | ------- |                          
| 1       |   HR    |
| 2       |   IT    |                           -- department
| 3       | Finance  

| emp_id |emp_nme| dep_id | salary |                   -- employee
| ------ | ----- | ------ | ------ |
|  001   | Ravi  |   1    | 20000  |
|  002   | raja  |   2    |30000.50|
|  003   | pavi  |   2    | 40000  |
|  004   | afra  |   3    | 40000  |

-- Step 1: Department table
CREATE TABLE department (
    dep_id INT PRIMARY KEY,
    dep_name VARCHAR(50)
) ENGINE=InnoDB;

-- Step 2: Employee table
CREATE TABLE employee (
    emp_id INT PRIMARY KEY,
    emp_name VARCHAR(30),
    salary DECIMAL(7,2),
    dep_id INT,  -- NOT NULL இல்ல
    FOREIGN KEY (dep_id) REFERENCES department(dep_id)
    ON DELETE SET NULL
    ON UPDATE CASCADE
) ENGINE=InnoDB;

-- Step 3: Insert department data
INSERT INTO department (dep_id, dep_name) VALUES
(1, 'HR'),
(2, 'IT'),
(3, 'Finance');

-- Step 4: Insert employee data
INSERT INTO employee (emp_id, emp_name, salary, dep_id) VALUES
(001, 'Ravi', 50000.00, 1),
(002, 'raja', 52000.50, 2),
(003, 'pavi', 48000.75, 2),
(004, 'afra', 51000.00, 3);

-- Step 5: Delete department row
DELETE FROM department WHERE dep_id = 2;

-- Step 6: Check employee table
SELECT * FROM employee;
--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

department table il deb_id kkuriya ethavathu data delete aaginal employee table ilulla emp_id kkuriya data null aagum; athepola updata aahinal employee table il update aagum .

CREATE TABLE EMPLOYEE1
( EMPNO CHAR(9),
ENAME VARCHAR(30) NOT NULL,
BDATE DATE,
DNO INTEGER DEFAULT 1,                                                -- ivvaru ongalukku pidiththa default valu kodukkalam
PRIMARY KEY (EMPNO),
FOREIGN KEY (DNO) REFERENCES DEPARTMENT (DNUMBER)
 ON DELETE SET DAFAULT ON UPDATE CASCADE);


department table il deb_id kkuriya ethavathu data delete aaginal employee table ilulla emp_id kkuriya data il default aaha value 1 aaga varum ; athepola updata aahinal employee table il update aagum .


EMPLOYEE இல் deb_id = 2 இருந்தது → அதை 1 (default value) ஆக மாற்றிவிடும்.
FOREIGN KEY (deb_id) REFERENCES DEPARTMENT (deb_id)   ithil
முதல் dept_id → இது தற்போதைய அட்டவணையின் (அதாவது Employee அட்டவணையின்) foreign key ஆகும் column.
இரண்டாம் dept_id → இது reference ஆகும். Department அட்டவணையின் primary key column.



----------------------------------------------########################   DML (data manipulation language) #######################--------------------------------------------------------

INSERT INTO students_info VALUES (110, 'althaf', 'madurai ,120', 30000);                 -- students_info table il 4 volumn irunthal ivvaru  4 value kodukka mudium

------------------------------------------------------------------------------------------------------

INSERT INTO employee (emp_id , emp_name, emp_address, salary)                          -- ivvaru column inai mantion pannium value kodukkalam
VALUES(11,'add','mdkfod:ads','231231');

------------------------------------------------------------------------------------------------------

DELETE FROM employee2
WHERE emp_name = 'akkshan';                                                          -- இந்த query இயங்கிய பிறகு, emp_id = 113 உடைய பணி வரி நீக்கப்படும்.

------------------------------------------------------------------------------------------------------

UPDATE employee2
SET emp_name = ''
WHERE emp_name = 'akkshan';                                                           -- ivvaru particular name or id or etc delete panna mudium

------------------------------------------------------------------------------------------------------

INSERT INTO table_name (column1, column2, column3,...)                                -- ivvaru ore neraththil pala values kodukkalam
VALUES
 (value11, value12, value13,...),
 (value21, value22, value23,...)
 ...
 (valuen1, valuen2, valuen3,...);

------------------------------------------------------------------------------------------------------

UPDATE employee2
SET salary = 45000.00                                                                -- akshan enpavarin salary inai update pannal
WHERE emp_name = 'akshan';                                                           -- emp_name kku pathilaga emp_id use panlam

UPDATE employee2
SET salary = 950.00, emp_name ='akshan' ,emp_address ='mathurai , 112,ak road'          -- ivvaru pala data inai update panna mudium
WHERE emp_id = 113;
 
------------------------------------------------------------------------------------------------------
Table Marge pannum murai                                                           -- Table Marge
    
INSERT IGNORE INTO employee1
SELECT * FROM employee;
    
இரண்டு அட்டவணைகளிலும் ஒரே மாதிரியான பெயர்/ID பத்தி இருக்க வேண்டும்.
உதாரணமாக: emp_id, student_id, product_id போன்றவை.
emp_id இரண்டு tables-லுமே INT ஆக இருக்க வேண்டும் (same lik varchar ). but ivvaru irunthal proble illai table 1 il varchar(30)  : table 2 il varchar(50)
------------------------------------------------------------------------------------------------------
