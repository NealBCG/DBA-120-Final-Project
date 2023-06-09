CREATE DATABASE IF NOT EXISTS final_project;
USE final_project;
DROP TABLE IF EXISTS country;
CREATE TABLE `country` (
  `subregion_id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL PRIMARY KEY,
  FOREIGN KEY (subregion_id) REFERENCES subregion(subregion_id))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO country (`subregion_id`, `country`) VALUES
(15,'Albania'),
(19,'Algeria'),
(3,'Angola'),
(5,'Antigua and Barbuda'),
(8,'Argentina'),
(17,'Azerbaijan'),
(11,'Bangladesh'),
(6,'Belize'),
(4,'Benin'),
(8,'Bolivia'),
(3,'Botswana'),
(8,'Brazil'),
(4,'Burkina Faso'),
(2,'Burundi'),
(12,'Cambodia'),
(1,'Cameroon'),
(4,'Cape Verde'),
(1,'Central African Republic'),
(1,'Chad'),
(8,'Chile'),
(9,'China'),
(8,'Columbia'),
(2,'Comoro Islands'),
(1,'Congo'),
(10,'Cook Islands'),
(6,'Costa Rica'),
(4,'Cote d''Ivoire'),
(18,'Czech Republic'),
(1,'Democratic Republic of Congo'),
(2,'Djibouti'),
(5,'Dominican Republic'),
(8,'Ecuador'),
(19,'Egypt'),
(6,'El Salvador'),
(2,'Ethiopia'),
(1,'Gabon'),
(4,'Gambia'),
(17,'Georgia'),
(4,'Ghana'),
(6,'Guatemala'),
(4,'Guinea'),
(4,'Guinea-Bissau'),
(8,'Guyana'),
(5,'Haiti'),
(6,'Honduras'),
(11,'India'),
(19,'Iraq'),
(5,'Jamaica'),
(16,'Kazahkstan'),
(2,'Kenya'),
(16,'Kyrgyzstan'),
(12,'Lao'),
(3,'Lesotho'),
(2,'Madagascar'),
(3,'Malawi'),
(12,'Malaysia'),
(11,'Maldives'),
(4,'Mali'),
(4,'Mauritania'),
(7,'Mexico'),
(13,'Moldova'),
(9,'Mongolia'),
(15,'Montenegro'),
(19,'Morocco'),
(3,'Mozambique'),
(12,'Myanmar'),
(3,'Namibia'),
(11,'Nepal'),
(6,'Nicaragua'),
(4,'Niger'),
(4,'Nigeria'),
(9,'North Korea'),
(11,'Pakistan'),
(19,'Palestine'),
(6,'Panama'),
(10,'Papau New Guinea'),
(8,'Paraguay'),
(8,'Peru'),
(12,'Philippines'),
(1,'Regional/1'),
(13,'Regional/13'),
(15,'Regional/15'),
(2,'Regional/2'),
(3,'Regional/3'),
(4,'Regional/4'),
(5,'Regional/5'),
(6,'Regional/6'),
(8,'Regional/8'),
(15,'Romania'),
(13,'Russia'),
(2,'Rwanda'),
(4,'Senegal'),
(15,'Serbia'),
(2,'Seychelles'),
(4,'Sierra Leone'),
(10,'Solomon Islands'),
(3,'South Africa'),
(11,'Sri Lanka'),
(5,'St Vincent and the Grenadines'),
(5,'St. Lucia'),
(2,'Sudan'),
(8,'Suriname'),
(3,'Swaziland'),
(19,'Syria'),
(16,'Tajikstan'),
(2,'Tanzania'),
(12,'Thailand'),
(12,'Timor Leste'),
(4,'Togo'),
(19,'Tunisia'),
(17,'Turkey'),
(2,'Uganda'),
(13,'Ukraine'),
(8,'Uruguay'),
(10,'Vanuatu'),
(12,'Vietnam'),
(19,'Yemen'),
(3,'Zambia'),
(3,'Zimbabwe');