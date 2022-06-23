
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
(1, 'MT_QA01', 'velvet', 1500, 'S', 'images/product/00001-burberry-fall-2022-menswear-credit-brand', 1,2),
(2, 'MT_QA02', 'kaki', 2000, 'M', 'images/product/00002-burberry-fall-2022-menswear-credit-brand', 3,1),
(3, 'MT_QA03', 'jean', 1500, 'M', 'images/product/00003-burberry-fall-2022-menswear-credit-brand', 2,2),
(4, 'MT_QA04', 'kaki', 2000, 'S', 'images/product/00004-burberry-fall-2022-menswear-credit-brand', 1,3),
(5, 'MT_QA05', 'cashmere', 2000, 'L', 'images/product/00005-burberry-fall-2022-menswear-credit-brand', 2,1),
(6, 'MT_QA06', 'kaki', 2200, 'M', 'images/product/00006-burberry-fall-2022-menswear-credit-brand', 2,1),
(7, 'MT_QA07', 'kaki', 1900, 'L', 'images/product/00007-burberry-fall-2022-menswear-credit-brand', 2,2),
(8, 'MT_QA08', 'jean', 2100, 'L', 'images/product/00008-burberry-fall-2022-menswear-credit-brand', 3,1),
(9, 'MT_QA09', 'cashmere', 1800, 'L', 'images/product/00009-burberry-fall-2022-menswear-credit-brand', 2,3),
(10, 'MT_QA10', 'kaki', 2000, 'S', 'images/product/00010-burberry-fall-2022-menswear-credit-brand', 3,2),
(11, 'MT_QA11', 'velvet', 1800, 'L', 'images/product/00011-burberry-fall-2022-menswear-credit-brand', 2,1),
(12, 'MT_QA12', 'silk', 2000, 'L', 'images/product/00012-burberry-fall-2022-menswear-credit-brand', 2,1),
(13, 'MT_QA13', 'cellulosic fibres', 2000, 'M', 'images/product/00013-burberry-fall-2022-menswear-credit-brand', 1,3),
(14, 'MT_QA14', 'wool', 2200, 'L', 'images/product/00014-burberry-fall-2022-menswear-credit-brand', 1,3),
(15, 'MT_QA15', 'cashmere', 2000, 'S', 'images/product/00015-burberry-fall-2022-menswear-credit-brand', 2,3),
(16, 'MT_QA16', 'cashmere', 2000, 'L', 'images/product/00016-burberry-fall-2022-menswear-credit-brand', 2,2),
(17, 'MT_QA17', 'kaki', 2100, 'L', 'images/product/00017-burberry-fall-2022-menswear-credit-brand', 2,1),
(18, 'MT_QA18', 'cotton', 1850, 'L', 'images/product/00018-burberry-fall-2022-menswear-credit-brand', 3,1),
(19, 'MT_QA19', 'cashmere', 2000, 'L', 'images/product/00019-burberry-fall-2022-menswear-credit-brand', 1,1),
(20, 'MT_QA20', 'cashmere', 1720, 'M', 'images/product/00020-burberry-fall-2022-menswear-credit-brand', 3,3),
(21, 'MT_QA21', 'wool', 2000, 'S', 'images/product/00021-burberry-fall-2022-menswear-credit-brand', 1,3),
(22, 'MT_QA22', 'cashmere', 1600, 'L', 'images/product/00022-burberry-fall-2022-menswear-credit-brand', 2,1),
(23, 'MT_QA23', 'kaki', 1800, 'L', 'images/product/00023-burberry-fall-2022-menswear-credit-brand', 2,3),
(24, 'MT_QA24', 'cashmere', 2200, 'L', 'images/product/00024-burberry-fall-2022-menswear-credit-brand', 2,1),
(25, 'MT_QA25', 'jean', 2300, 'L', 'images/product/00025-burberry-fall-2022-menswear-credit-brand', 2,1),
(26, 'MT_QA26', 'cashmere', 2000, 'L', 'images/product/00026-burberry-fall-2022-menswear-credit-brand', 2,1),
(27, 'MT_QA27', 'cotton', 1900, 'M' 'images/product/00027-burberry-fall-2022-menswear-credit-brand', 2,3),
(28, 'MT_QA28', 'kaki', 2000, 'L', 'images/product/00028-burberry-fall-2022-menswear-credit-brand', 2,2),
(29, 'MT_QA29', 'cashmere', 2300, 'L', 'images/product/00029-burberry-fall-2022-menswear-credit-brand', 3,1),
(30, 'MT_QA30', 'cashmere', 2000, 'S', 'images/product/00030-burberry-fall-2022-menswear-credit-brand', 2,2),
(31, 'MT_QA31', 'kaki', 2200, 'L', 'images/product/00031-burberry-fall-2022-menswear-credit-brand', 2,1),
(32, 'MT_QA32', 'kaki', 2000, 'S', 'images/product/00032-burberry-fall-2022-menswear-credit-brand', 2,3),
(33, 'MT_QA33', 'cashmere', 1900, 'M', 'images/product/00033-burberry-fall-2022-menswear-credit-brand', 2,1),
(34, 'MT_QA34', 'cellulosic fibres', 1800, 'L', 'images/product/00034-burberry-fall-2022-menswear-credit-brand', 2,1),
(35, 'MT_QA35', 'cotton', 2200, 'L', 'images/product/00035-burberry-fall-2022-menswear-credit-brand', 3,3),
(36, 'MT_QA36', 'cashmere', 2150, 'M', 'images/product/00036-burberry-fall-2022-menswear-credit-brand', 2,3),
(37, 'MT_QA37', 'silk', 1950, 'L', 'images/product/00037-burberry-fall-2022-menswear-credit-brand', 1,3),
(38, 'MT_QA38', 'wool', 2222, 'S', 'images/product/00038-burberry-fall-2022-menswear-credit-brand', 2,2),
(39, 'MT_QA39', 'leather', 1900, 'S', 'images/product/00039-burberry-fall-2022-menswear-credit-brand', 3,1),
(40, 'MT_QA40', 'leather', 2000, 'L', 'images/product/00040-burberry-fall-2022-menswear-credit-brand', 2,3);
