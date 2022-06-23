
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





INSERT INTO product(product_code, fabric, price, size, urlimg, CollectionID, SID)
VALUES 
('MH_QA01', 'cotton', 2500, 28, 'images/products/00001-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA02', 'cotton', 2500, 29, 'images/products/00002-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA03', 'cotton', 2300, 28, 'images/products/00003-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA04', 'cotton', 2200, 29, 'images/products/00004-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA05', 'cotton', 2000, 30, 'images/products/00005-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA06', 'cotton', 2100, 28, 'images/products/00006-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA07', 'cotton', 1900, 27, 'images/products/00007-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA08', 'cotton', 2500, 30, 'images/products/00008-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA09', 'cotton', 1800, 28, 'images/products/00009-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA10', 'cotton', 2500, 30, 'images/products/00010-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA11', 'cotton', 2300, 29, 'images/products/00011-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA12', 'cotton', 2500, 28, 'images/products/00012-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA13', 'cotton', 1800, 28, 'images/products/00013-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA14', 'cotton', 2500, 30, 'images/products/00014-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA15', 'cotton', 1900, 29, 'images/products/00015-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA16', 'cotton', 2500, 28, 'images/products/00016-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA17', 'cotton', 2100, 27, 'images/products/00017-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA18', 'cotton', 2200, 28, 'images/products/00018-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA19', 'cotton', 2500, 30, 'images/products/00019-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA20', 'cotton', 2700, 28, 'images/products/00020-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA21', 'cotton', 2500, 29, 'images/products/00021-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA22', 'cotton', 2300, 28, 'images/products/00022-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA23', 'cotton', 2200, 27, 'images/products/00023-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA24', 'cotton', 2400, 28, 'images/products/00024-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA25', 'cotton', 2500, 28, 'images/products/00025-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA26', 'cotton', 2400, 29, 'images/products/00026-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA27', 'cotton', 2300, 28, 'images/products/00027-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA28', 'cotton', 2100, 28, 'images/products/00028-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA29', 'cotton', 2500, 30, 'images/products/00029-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA30', 'cotton', 2100, 28, 'images/products/00030-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA31', 'cotton', 2500, 28, 'images/products/00031-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA32', 'cotton', 2700, 29, 'images/products/00032-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA33', 'cotton', 2500, 28, 'images/products/00033-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA34', 'cotton', 1900, 27, 'images/products/00034-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA35', 'cotton', 2000, 29, 'images/products/00035-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA36', 'cotton', 2300, 28, 'images/products/00036-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA37', 'cotton', 2500, 26, 'images/products/00037-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA38', 'silk', 1900, 30, 'images/products/00038-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA39', 'cotton', 2300, 28, 'images/products/00039-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2),
('MH_QA40', 'cotton', 2100, 27, 'images/products/00040-DOLCE-GABBANA-MENSWEAR-SPRING-21', 2,2);



//ĐỒNG HỒ

INSERT INTO product(product_code, fabric, price, size, urlimg, CollectionID, SID)
VALUES 
('PK_DH01', 'Rose gold. Sapphire crystal case back.', 15000, 34, 'images/products/6002R_001_1', 3,1),
('PK_DH02', 'Rose gold. Sapphire crystal case back.', 15000, 34, 'images/products/5304R_001_1', 3,1),
('PK_DH03', 'White gold, the Cyclops lens and the five-piece link Jubilee bracelet.', 20000, 34, 'images/products/Datejust 31 278289RBR', 3,1),
('PK_DH04', 'White Gold Set With Diamonds', 490000, 34, 'image/products/GMT-Master II Ice 116769TBR', 3,1),
('PK_DH05', 'Sapphire and gold',  990000, 34, 'images/product/Richard Mille RM 57-03 Tourbillon Sapphire Dragon', 3,1),
('PK_DH06', 'White Gold', 774228, 34, 'images/product/ Richard Mille RM 51-01 Tourbillon Tiger And Dragon', 3,1),
('PK_DH07', 'Platinum', 258076, 34, 'images/product/patek-6102p-001', 3,1),
('PK_DH08', 'Titanim and rose gold', 51000, 34, 'images/product/Pilot Type 20 Tourbillon', 3,1),
('PK_DH09', 'Sapphire', 104133, 34, 'images/product/TAKASHI MURAKAMI SAPPHIRE RAINBOW', 3,1);
