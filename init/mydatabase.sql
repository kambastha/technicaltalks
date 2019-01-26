Create database student;
connect student;
CREATE TABLE studentinfo
(
stud_id int,
firstname varchar(255),
lastname varchar(255),
address varchar(255),
city varchar(255)
);
show tables;
Insert into studentinfo Values(10,'Anand','Bhagwat','Viman Nagar','Pune');
