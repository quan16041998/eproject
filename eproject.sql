
USE `1808g`;

CREATE TABLE if NOT EXISTS `collection`(
	`CollectionID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(255) NOT null,
	`urlimg` VARCHAR(255) NOT NULL,
	`introduce` text NOT null
);

CREATE TABLE if NOT EXISTS  `stylist`(
`SID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
`dob` DATE NOT NULL,
`contact` VARCHAR(20) NOT NULL,
`email` VARCHAR(50) NOT NULL,
`history` TEXT NOT NULL,
`urlimg` varchar(255) NOT null
);

CREATE TABLE if NOT EXISTS `product`(
	`CID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`product_code` VARCHAR(255) NOT NULL,
	`fabric` VARCHAR(255) NOT NULL,
	`price` FLOAT NOT NULL,
	`size` FLOAT NOT NULL,
	`urlimg` VARCHAR(255) NOT NULL,
	`CollectionID` INT  NOT NULL,
	`SID` INT NOT NULL,
	foreign KEY (`CollectionID`) REFERENCES `Collection`(`CollectionID`),
	FOREIGN KEY (`SID`) REFERENCES `stylist`(`SID`)
);
CREATE TABLE if NOT EXISTS `customer` (
`CusID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
`dob` DATE NOT NULL,
`contact` VARCHAR(20) NOT NULL,
`email` VARCHAR(50) NOT NULL,
`address` VARCHAR(60)
);
CREATE TABLE if NOT EXISTS `admin`(
`username` VARCHAR(255) PRIMARY KEY  NOT NULL,
`password` VARCHAR(255) NOT NULL,
`name` VARCHAR(255) NOT NULL,
`dob` DATE NOT NULL,
`contact` VARCHAR(20) NOT NULL,
`email` VARCHAR(50) NOT NULL
);
