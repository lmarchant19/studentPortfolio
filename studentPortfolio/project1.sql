<<<<<<< HEAD
#*********************************************************************************
#Script to create lmdesign database
#Name       Date          Description
#Logan      8/28/2020     Initial Deployment
#Logan      9/03/2020     Added user
#Logan      9/11/2020     Added delete statement
#*********************************************************************************

DROP DATABASE IF EXISTS lmportfolio;
CREATE DATABASE lmportfolio;
USE lmportfolio;

CREATE TABLE IF NOT EXISTS employee
(
    employeeID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name  VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS visitor
(
	visitor_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    visitor_name VARCHAR(255) NOT NULL, 
    visitor_email VARCHAR(255) NOT NULL,
    visitor_msg VARCHAR(255) NOT NULL,
    visit_date DATETIME NOT NULL,
    employeeID INT NOT NULL,
    FOREIGN KEY (employeeID) REFERENCES employee (employeeID)
);

# Insert test data
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Buster', 'Bronco');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Joe', 'Vandal');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Aubie', 'Tiger');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Ralphie', 'Buffalo');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Bucky', 'Badger');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Cocky', 'Gamecock');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Sparty', 'Spartan');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('CWI', 'Otter');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Gus', 'Gorilla');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Brutus', 'Buckeye');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Pistol', 'Pete');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Archibald', 'Eagle');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Baby', 'Jay');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Boss', 'Hog');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Benny', 'Bengal');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Fighting', 'Pickle');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Captain', 'Cane');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Duke', 'Dog');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('TVCS', 'Chukars');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Sebastian', 'Ibis');

#Insert test data into visitor
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Mickey', 'mickey@mouse.com', 'Hello', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Minnie', 'minnie@mouse.com', 'Hi', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Daisy', 'Daisy@me.com', 'test', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Donald', 'donald@me.com', 'Duck', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Huey', 'huey@me.com', 'Test Duck', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Dewey', 'dewey@me.com', 'Another test', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Louie', 'louie@me.com', 'Site looks great', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Elmer', 'elmer@me.com', 'Fudd', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Goofy', 'goofy@me.com', 'Dog', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Winnie', 'winnie@me.com', 'The pooh', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Pluto', 'pluto@me.com', 'A dog', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Chip', 'chip@me.com', 'Hello', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Dale', 'dale@me.com', 'Disney', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Clarabelle', 'clarabelle@me.com', 'Cow', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Scrooge', 'scrooge@me.com', 'McDuck', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Ludwig', 'ludwig@me.com', 'Von Drake', NOW(), 1);   
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Max', 'max@me.com', 'Goof', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Mortimer', 'mortimer@me.com', 'Mouse', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Figaro', 'figaro@me.com', 'Nice Site', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Horace', 'horace@me.com', 'Question for you!', NOW(), 1);

//PROJECT 2:

use lmportfolio;
GRANT SELECT, INSERT, UPDATE, DELETE
ON lmportfolio.*
TO lm_user
IDENTIFIED by 'Pa$$w0rd';
=======
#*********************************************************************************
#Script to create lmdesign database
#Name       Date          Description
#Logan      8/28/2020     Initial Deployment
#
#
#*********************************************************************************

DROP DATABASE IF EXISTS lmportfolio;
CREATE DATABASE lmportfolio;
USE lmportfolio;

CREATE TABLE IF NOT EXISTS employee
(
    employeeID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name  VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS visitor
(
	visitor_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    visitor_name VARCHAR(255) NOT NULL, 
    visitor_email VARCHAR(255) NOT NULL,
    visitor_msg VARCHAR(255) NOT NULL,
    visit_date DATETIME NOT NULL,
    employeeID INT NOT NULL,
    FOREIGN KEY (employeeID) REFERENCES employee (employeeID)
);

# Insert test data
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Buster', 'Bronco');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Joe', 'Vandal');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Aubie', 'Tiger');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Ralphie', 'Buffalo');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Bucky', 'Badger');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Cocky', 'Gamecock');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Sparty', 'Spartan');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('CWI', 'Otter');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Gus', 'Gorilla');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Brutus', 'Buckeye');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Pistol', 'Pete');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Archibald', 'Eagle');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Baby', 'Jay');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Boss', 'Hog');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Benny', 'Bengal');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Fighting', 'Pickle');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Captain', 'Cane');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Duke', 'Dog');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('TVCS', 'Chukars');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Sebastian', 'Ibis');

#Insert test data into visitor
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Mickey', 'mickey@mouse.com', 'Hello', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Minnie', 'minnie@mouse.com', 'Hi', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Daisy', 'Daisy@me.com', 'test', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Donald', 'donald@me.com', 'Duck', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Huey', 'huey@me.com', 'Test Duck', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Dewey', 'dewey@me.com', 'Another test', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Louie', 'louie@me.com', 'Site looks great', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Elmer', 'elmer@me.com', 'Fudd', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Goofy', 'goofy@me.com', 'Dog', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Winnie', 'winnie@me.com', 'The pooh', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Pluto', 'pluto@me.com', 'A dog', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Chip', 'chip@me.com', 'Hello', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Dale', 'dale@me.com', 'Disney', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Clarabelle', 'clarabelle@me.com', 'Cow', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Scrooge', 'scrooge@me.com', 'McDuck', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Ludwig', 'ludwig@me.com', 'Von Drake', NOW(), 1);   
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Max', 'max@me.com', 'Goof', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Mortimer', 'mortimer@me.com', 'Mouse', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Figaro', 'figaro@me.com', 'Nice Site', NOW(), 1);
INSERT INTO visitor
	(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Horace', 'horace@me.com', 'Question for you!', NOW(), 1);
>>>>>>> ce9c1daf896a5d9f7da076950fed6b7fb36c4273
