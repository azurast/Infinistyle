CREATE TABLE `Product` (
	`productID` int NOT NULL AUTO_INCREMENT,
	`productName` varchar(100) NOT NULL,
	`productDescription` varchar(300) NOT NULL,
	`productPrice` int(50) NOT NULL,
	`productStock` int(50) NOT NULL,
	`productCategory` varchar(100) NOT NULL,
	PRIMARY KEY (`productID`)
);

CREATE TABLE `Customer` (
	`customerID` int NOT NULL AUTO_INCREMENT,
	`fullName` varchar(200) NOT NULL,
	`email` varchar(50) NOT NULL UNIQUE,
	`username` varchar(50) NOT NULL UNIQUE,
	`password` varchar(256) NOT NULL,
	`address` varchar(500) NOT NULL,
	`phone` varchar(20) NOT NULL,
	PRIMARY KEY (`customerID`)
);

CREATE TABLE `Admin` (
	`adminID` int NOT NULL AUTO_INCREMENT,
	`fullName` varchar(200) NOT NULL,
	`username` varchar(50) NOT NULL UNIQUE,
	`password` varchar(50) NOT NULL,
	PRIMARY KEY (`adminID`)
);

CREATE TABLE `Order` (
	`orderID` int NOT NULL AUTO_INCREMENT,
	`orderDate` DATE NOT NULL,
	`orderStatus` varchar(50) NOT NULL,
	`customerID` varchar(50) NOT NULL,
	PRIMARY KEY (`orderID`)
);

CREATE TABLE `OrderDetails` (
	`orderID` int NOT NULL,
	`productID` int NOT NULL,
	`qty` int NOT NULL
);

CREATE TABLE `ShoppingCart` (
	`cartID` int NOT NULL AUTO_INCREMENT,
	`customerID` int NOT NULL,
	PRIMARY KEY (`cartID`)
);

CREATE TABLE `ShoppingCartDetails` (
	`cartID` int NOT NULL,
	`productID` int NOT NULL,
	`qty` int(30) NOT NULL
);

ALTER TABLE `Order` ADD CONSTRAINT `Order_fk0` FOREIGN KEY (`customerID`) REFERENCES `Customer`(`customerID`);

ALTER TABLE `OrderDetails` ADD CONSTRAINT `OrderDetails_fk0` FOREIGN KEY (`orderID`) REFERENCES `Order`(`orderID`);

ALTER TABLE `OrderDetails` ADD CONSTRAINT `OrderDetails_fk1` FOREIGN KEY (`productID`) REFERENCES `Product`(`productID`);

ALTER TABLE `ShoppingCart` ADD CONSTRAINT `ShoppingCart_fk0` FOREIGN KEY (`customerID`) REFERENCES `Customer`(`customerID`);

ALTER TABLE `ShoppingCartDetails` ADD CONSTRAINT `ShoppingCartDetails_fk0` FOREIGN KEY (`cartID`) REFERENCES `ShoppingCart`(`cartID`);

ALTER TABLE `ShoppingCartDetails` ADD CONSTRAINT `ShoppingCartDetails_fk1` FOREIGN KEY (`productID`) REFERENCES `Product`(`productID`);

