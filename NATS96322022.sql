drop schema if exists NATS96322022;
create schema NATS96322022;
use NATS96322022;

create table cases(
 id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
case_id varchar (20) UNIQUE,
case_verdict varchar(15),
court_procedures varchar(30)


);



create table individuals(
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
individ_id varchar (20) UNIQUE,
fname varchar(15),
lname varchar(15),
gender enum('Male','Female', 'Other'),
dob date, 
crimecommitted tinytext,
case_id varchar (20) ,
foreign key(case_id) references cases(case_id) 

);

create table judges(
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
judge_id varchar (20) UNIQUE,
fname varchar(15),
lname varchar(15),
case_id varchar (20),
contactnum1 varchar(20),
gender enum('Male','Female', 'Other'),
foreign key(case_id) references cases(case_id) 


);

create table lawyer(
id  int NOT NULL AUTO_INCREMENT PRIMARY KEY,
lawyer_id varchar (20) UNIQUE,
fname varchar(15),
lname varchar(15),
case_id varchar (20),
gender enum('Male','Female', 'Other'),
contactnum1 varchar(20),
foreign key(case_id) references cases(case_id) 

);

CREATE TABLE admin(
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL
);

CREATE TABLE lawworker(
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL
);
insert into admin(username,email,password) values ('root','mysterylaw@gmail.com', MD5('mysterylawadmin'));