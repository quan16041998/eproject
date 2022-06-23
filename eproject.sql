
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
	`price` varchar(30) NOT NULL,
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

INSERT INTO product(CID, product_code, fabric, price, size, urlimg, CollectionID, SID)
VALUES 
('MD_QA01', 'velvet', 1500, 28, 'images/product/00001-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA02', 'kaki', 2000, 29, 'images/product/00002-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA03', 'jean', 1500, 29, 'images/product/00003-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA04', 'kaki', 2000, 29, 'images/product/00004-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA05', 'cashmere', 2000, 30, 'images/product/00005-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA06', 'kaki', 2200, 30, 'images/product/00006-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA07', 'kaki', 1900, 31, 'images/product/00007-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA08', 'jean', 2100, 30, 'images/product/00008-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA09', 'cashmere', 1800, 29, 'images/product/00009-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA10', 'kaki', 2000, 27, 'images/product/00010-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA11', 'velvet', 1800, 26, 'images/product/00011-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA12', 'silk', 2000, 28, 'images/product/00012-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA13', 'cellulosic fibres', 2000, 29, 'images/product/00013-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA14', 'wool', 2200, 29, 'images/product/00014-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA15', 'cashmere', 2000, 30, 'images/product/00015-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA16', 'cashmere', 2000, 30, 'images/product/00016-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA17', 'kaki', 2100, 29, 'images/product/00017-burberry-fall-2022-menswear-credit-brand', 1,1)
('MD_QA18', 'cotton', 1850, 27, 'images/product/00018-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA19', 'cashmere', 2000, 27, 'images/product/00019-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA20', 'cashmere', 1720, 28, 'images/product/00020-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA21', 'wool', 2000, 30, 'images/product/00021-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA22', 'cashmere', 1600, 28, 'images/product/00022-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA23', 'kaki', 1800, 28, 'images/product/00023-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA24', 'cashmere', 2200, 27, 'images/product/00024-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA25', 'jean', 2300, 29, 'images/product/00025-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA26', 'cashmere', 2000, 30, 'images/product/00026-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA27', 'cotton', 1900, 29, 'images/product/00027-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA28', 'kaki', 2000, 28, 'images/product/00028-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA29', 'cashmere', 2300, 28, 'images/product/00029-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA30', 'cashmere', 2000, 29, 'images/product/00030-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA31', 'kaki', 2200, 30, 'images/product/00031-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA32', 'kaki', 2000, 29, 'images/product/00032-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA33', 'cashmere', 1900, 27, 'images/product/00033-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA34', 'cellulosic fibres', 1800, 29, 'images/product/00034-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA35', 'cotton', 2200, 28, 'images/product/00035-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA36', 'cashmere', 2150, 29, 'images/product/00036-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA37', 'silk', 1950, 30, 'images/product/00037-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA38', 'wool', 2222, 27, 'images/product/00038-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA39', 'leather', 1900, 28, 'images/product/00039-burberry-fall-2022-menswear-credit-brand', 1,1),
('MD_QA40', 'leather', 2000, 29, 'images/product/00040-burberry-fall-2022-menswear-credit-brand', 1,1);
