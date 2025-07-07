CREATE DATABASE eskwela;

USE eskwela;



CREATE TABLE users(
    userId INT PRIMARY KEY AUTO_INCREMENT,
    userRole enum("Admin", "Staff"),
    firstName VARCHAR 200 NOT NULL,
    middleName VARCHAR 200 NOT NULL,
    lastName VARCHAR 200 NOT NULL,
    extensionName VARCHAR 200 ,

);


