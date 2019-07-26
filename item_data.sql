DROP DATABASE IF EXISTS accumed; 

CREATE database accumed;

USE accumed;
CREATE TABLE `categories` (
 `itemID` int(10) NOT NULL AUTO_INCREMENT,
 `Item` varchar(100) NOT NULL,
 `subItemOfID` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemID`)
);


Select * from categories;

INSERT INTO categories (Item, subItemOfID)
VALUES ("Item1", 0),
       ("Item2", 0),
	   ("Item3", 0),
       ("Item10", 1),
       ("Item11", 1),
       ("Item12", 1),
       ("Item100", 4),
       ("Item101", 4),
       ("Item102", 4),
       ("Item30", 3),
       ("Item31", 3),
       ("Item32", 3);