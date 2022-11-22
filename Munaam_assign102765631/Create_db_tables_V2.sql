
CREATE DATABASE `grape_db`;



	CREATE TABLE enquiry(
		en_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		en_firstname VARCHAR(25) NOT NULL,
		en_middleName VARCHAR(25) NOT NULL,
		en_lastname VARCHAR(25) NOT NULL,
		en_dob DATETIME NOT NULL,
		en_email VARCHAR(100) NOT NULL,
		en_phone VARCHAR(10) NOT NULL,	
		en_streetaddress VARCHAR(60) NOT NULL,	
		en_city VARCHAR(20) NOT NULL,	
		en_state VARCHAR(20) NOT NULL,	
		en_postalcode INT(5) UNSIGNED NOT NULL,	
		en_service VARCHAR(100) NOT NULL,	
		en_subject VARCHAR(100) NOT NULL,	
		en_startdate DATETIME NOT NULL,	
		en_enddate DATETIME NOT NULL,	
		en_otherInfo VARCHAR(500) NULL
	);
	
		CREATE TABLE users(
		ur_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		ur_username VARCHAR(25) NOT NULL,
		ur_password VARCHAR(25) NOT NULL,
		ur_role VARCHAR(25) NOT NULL	
	);
	
	insert into users (ur_username, ur_password, ur_role)
	values
	('admin', '123', 'admin'),
	('operator', '123', 'operator'),
	('owner', '123', 'owner')



