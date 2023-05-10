CREATE DATABASE IF NOT EXISTS final_project;
USE final_project;
DROP TABLE IF EXISTS region;
CREATE TABLE `region` (
  `region_id` int(11) NOT NULL PRIMARY KEY,
  `region` varchar(255) NOT NULL)
  ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO region (`region_id`, `region`) VALUES
(1,'Africa'),
(2,'Americas'),
(3,'Asia'),
(4,'Europe'),
(5,'Middle East');
