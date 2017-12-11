-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `faqId` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `homepage` bit(1) NOT NULL,
  PRIMARY KEY (`faqId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `faq` (`faqId`, `question`, `answer`, `homepage`) VALUES
(1,	'test question',	'test answer',	CONV('1', 2, 10) + 0),
(2,	'test question 2',	'test answer 2',	CONV('0', 2, 10) + 0),
(3,	'test question 3',	'test answer 3',	CONV('1', 2, 10) + 0),
(4,	'test question 4',	'test answer 4',	CONV('1', 2, 10) + 0);

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `login` (`username`, `password`) VALUES
('arihant',	'arihant');

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `newsId` int(11) NOT NULL AUTO_INCREMENT,
  `newsTitle` varchar(50) NOT NULL,
  `newsImage` varchar(50) NOT NULL,
  `newsText` text NOT NULL,
  `newsStart` date NOT NULL,
  `newsEnd` date NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `news` (`newsId`, `newsTitle`, `newsImage`, `newsText`, `newsStart`, `newsEnd`) VALUES
(1,	'news title 1',	'images/n1.jpg',	'news description 1',	'2016-12-01',	'2016-12-31'),
(2,	'news title 2',	'images/n2.jpg',	'news description 2',	'2016-12-01',	'2016-12-31'),
(3,	'news title 3',	'images/n3.jpg',	'news description 3',	'2016-12-01',	'2016-12-31');

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `sku` varchar(30) NOT NULL,
  `productName` text NOT NULL,
  `productAltName` text NOT NULL,
  `productQuality` text NOT NULL,
  `productMaterial` text NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productImage1` text NOT NULL,
  `productImage2` text,
  `productImage3` text,
  `productImage4` text,
  `a1` text,
  `a2` text,
  `a3` text,
  `a4` text,
  `a5` text,
  `a6` text,
  `a7` text,
  `a8` text,
  `a9` text,
  `a10` text,
  `a11` text,
  `a12` text,
  `templateId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sku`),
  KEY `templateId` (`templateId`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`templateId`) REFERENCES `template` (`templateId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `product` (`sku`, `productName`, `productAltName`, `productQuality`, `productMaterial`, `productPrice`, `productImage1`, `productImage2`, `productImage3`, `productImage4`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `templateId`) VALUES
('1234',	'my product',	'alt',	'qbc',	'abc',	1234,	'images/a.jpg',	'images/b.jpg',	'images/c.jpg',	'images/d.jpg',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	1),
('123456',	'my prod',	'alter',	'qbc',	'abc',	1234,	'images/1.jpg',	'images/2.jpg',	'images/3.jpg',	'images/4.jpg',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	'temp~abc',	1),
('12345678',	'image prod',	'image',	'image',	'image',	1234,	'images/s1.jpg',	'images/s2.jpg',	'images/s3.jpg',	'images/s4.jpg',	'temp~image',	'temp~image',	'temp~image',	'temp~image',	'temp~image',	'temp~image',	'temp~image',	'temp~image',	'temp~image',	'temp~image',	'temp~image',	'temp~image',	1),
('dfgvd',	'dfgvd',	'abcd',	'dfgvd',	'dfgvd',	1234,	'images/cm3.jpg',	NULL,	NULL,	NULL,	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	'temp~dfgvd',	1),
('null_sku',	'null_prod',	'null_alt',	'null_quality',	'null_material',	1234,	'images/null1.jpg',	'images/null2.jpg',	'images/null3.jpg',	'images/null4.jpg',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	10),
('pqrs',	'pqrs prod',	'pqr',	'pqr',	'pqr',	1234,	'images/5.jpg',	'images/6.jpg',	'images/7.jpg',	'images/8.jpg',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	'xyz~pqr',	6),
('test2_sku',	'test_prod2',	'test2_at',	'test2_at',	'test2_at',	1234,	'images/i.jpg',	'images/j.jpg',	'images/k.jpg',	'images/l.jpg',	'test~test2_at',	'test~test2_at',	'test~test2_at',	'test~test2_at',	'test~test2_at',	'test~test2_at',	'test~test2_at',	'test~test2_at',	'test~test2_at',	'test~test2_at',	'test~test2_at',	'test~test2_at',	8),
('test_null',	'test_null',	'test_null',	'test_null',	'test_null',	1234,	'images/null5.jpg',	'images/null6.jpg',	'images/null7.jpg',	'images/null8.jpg',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	10),
('test_sku',	'test_prod',	'test_at',	'test_at',	'test_at',	1234,	'images/e.jpg',	'images/f.jpg',	'images/g.jpg',	'images/h.jpg',	'test~test_at',	'test~test_at',	'test~test_at',	'test~test_at',	'test~test_at',	'test~test_at',	'test~test_at',	'test~test_at',	'test~test_at',	'test~test_at',	'test~test_at',	'test~test_at',	8),
('vnfvfk',	'dldsdl',	'ssdamsdd',	'sddsdd',	'sdsdsd',	1234,	'images/cm2.jpg',	NULL,	NULL,	NULL,	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	10),
('wwqueouv',	'fdjdkfjd',	'sdsjdksd',	'sdsff',	'gkfgkfkfg',	1234,	'images/cm1.jpg',	NULL,	NULL,	NULL,	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	' ',	10);

DROP TABLE IF EXISTS `product_old`;
CREATE TABLE `product_old` (
  `productImg` varchar(500) NOT NULL,
  `productName` varchar(30) NOT NULL,
  `sku` int(11) NOT NULL,
  `productAltName` varchar(30) NOT NULL,
  `productType` varchar(30) NOT NULL,
  `productSubType` varchar(30) NOT NULL,
  `productQuality` varchar(30) NOT NULL,
  `productMaterial` varchar(30) NOT NULL,
  `productSize` int(11) NOT NULL,
  `productLength` int(11) NOT NULL,
  `productHeight` int(11) NOT NULL,
  `productWidth` int(11) NOT NULL,
  `productThickness` int(11) NOT NULL,
  `productDiameter` int(11) NOT NULL,
  `productInsideDia` int(11) NOT NULL,
  `productOutsideDia` int(11) NOT NULL,
  `productStanderdPkt` int(11) NOT NULL,
  `pricePerPack` int(11) NOT NULL,
  `modelNumber` int(11) NOT NULL,
  `Thread` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `stdLift` int(11) NOT NULL,
  `liftHeightMin` int(11) NOT NULL,
  `liftHeightMax` int(11) NOT NULL,
  `noOfHoles` int(11) NOT NULL,
  `Slider` varchar(10) NOT NULL,
  `Warrenty` varchar(30) NOT NULL,
  `remark1` varchar(30) NOT NULL,
  `remark2` varchar(30) NOT NULL,
  `remark3` varchar(30) NOT NULL,
  `Features` varchar(700) NOT NULL,
  `Application` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `product_old` (`productImg`, `productName`, `sku`, `productAltName`, `productType`, `productSubType`, `productQuality`, `productMaterial`, `productSize`, `productLength`, `productHeight`, `productWidth`, `productThickness`, `productDiameter`, `productInsideDia`, `productOutsideDia`, `productStanderdPkt`, `pricePerPack`, `modelNumber`, `Thread`, `Capacity`, `stdLift`, `liftHeightMin`, `liftHeightMax`, `noOfHoles`, `Slider`, `Warrenty`, `remark1`, `remark2`, `remark3`, `Features`, `Application`) VALUES
('images/1.png',	'product 1',	1,	'alternative 1',	'type 1',	'sub type 1',	'quality 1',	'material 1',	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	'slider 1',	'warranty 1',	'remark 1',	'remark 2',	'remark 3',	'feature 1',	'application 1'),
('images/1.png',	'product 2',	2,	'alternative 2',	'type 2',	'sub type 2',	'quality 2',	'material 2',	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	'slider 2',	'warranty 2',	'remark 1',	'remark 2',	'remark 3',	'feature 2',	'application 2'),
('images/1.png',	'product 3',	3,	'alternative 3',	'type 3',	'sub type 3',	'quality 3',	'material 3',	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	2,	'slider 3',	'warranty 3',	'remark 1',	'remark 2',	'remark 3',	'feature 3',	'application 3');

DROP TABLE IF EXISTS `query`;
CREATE TABLE `query` (
  `queryId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `queryText` text NOT NULL,
  PRIMARY KEY (`queryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `query` (`queryId`, `name`, `email`, `mobile`, `queryText`) VALUES
(1,	'abc',	'abc@gmail.com',	'1234567890',	'abc query'),
(3,	'abc',	'abc@gmail.com',	'1234567890',	'abc query'),
(6,	'demo',	'demo@gmail.com',	'1234567890',	'demo query'),
(7,	'abc',	'abcd@gmail.com',	'1234567890',	'sddsd');

DROP TABLE IF EXISTS `template`;
CREATE TABLE `template` (
  `templateId` int(11) NOT NULL AUTO_INCREMENT,
  `templateName` text NOT NULL,
  `t1` text,
  `t2` text,
  `t3` text,
  `t4` text,
  `t5` text,
  `t6` text,
  `t7` text,
  `t8` text,
  `t9` text,
  `t10` text,
  `t11` text,
  `t12` text,
  PRIMARY KEY (`templateId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `template` (`templateId`, `templateName`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`, `t11`, `t12`) VALUES
(1,	'temp',	'temp',	'temp',	'temp',	'temp',	'temp',	'temp',	'temp',	'temp',	'temp',	'temp',	'temp',	'temp'),
(6,	'xyz',	'xyz',	'xyz',	'xyz',	'xyz',	'xyz',	'xyz',	'xyz',	'xyz',	'xyz',	'xyz',	'xyz',	'xyz'),
(8,	'test',	'test',	'test',	'test',	'test',	'test',	'test',	'test',	'test',	'test',	'test',	'test',	'test'),
(10,	'null attribute template',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'');

DROP TABLE IF EXISTS `websiteinfo`;
CREATE TABLE `websiteinfo` (
  `websiteName` varchar(30) NOT NULL,
  `mobileNumber1` varchar(15) NOT NULL,
  `emailId` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `aboutUsText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `websiteinfo` (`websiteName`, `mobileNumber1`, `emailId`, `address`, `aboutUsText`) VALUES
('arihant.com',	'7482309691',	'arihant@gmail.com',	'pune',	'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>');

-- 2016-12-16 16:53:54
