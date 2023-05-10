CREATE DATABASE IF NOT EXISTS final_project;
USE final_project;
DROP TABLE IF EXISTS subregion;
CREATE TABLE `subregion` (
  `region_id` int(11) NOT NULL,
  `subregion_id` int(11) NOT NULL PRIMARY KEY,
  `subregion` varchar(255) NOT NULL,
  FOREIGN KEY (region_id) REFERENCES region(region_id))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO subregion (`region_id`, `subregion_id`, `subregion`) VALUES
(1,1,'Central Africa'),
(1,2,'East Africa'),
(1,3,'Southern Africa'),
(1,4,'West Africa'),
(2,5,'Caribbean'),
(2,6,'Central America'),
(2,7,'North America'),
(2,8,'South America'),
(3,9,'East Asia'),
(3,10,'Pacific'),
(3,11,'South Asia'),
(3,12,'South-East Asia'),
(4,13,'Moldova, Russian Federation'),
(4,15,'Central and Southern Europe'),
(4,16,'Central Asia'),
(4,17,'Turkey and Southern Caucasus'),
(4,18,'Western Europe'),
(5,19,'Middle East and North Africa');
