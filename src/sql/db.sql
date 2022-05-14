CREATE DATABASE total_care;
use total_care;
CREATE TABLE usuarios 
(
	id int(8) PRIMARY KEY NOT NULL auto_increment,
    email varchar(30) NOT NULL,
    senha varchar(15) not null
) AUTO_INCREMENT=1;
INSERT INTO usuarios (email,senha)
VALUES
("admin@admin.com","admin");
CREATE TABLE `pacientes` (
  `id` int(8) PRIMARY KEY NOT NULL auto_increment,
  `nome` varchar(255) default NULL,
  `idade` char(2) default NULL,
  `peso`  char(3)default NULL,
  `altura` char(3)default NULL,
  `imc` varchar(10)default NULL
) AUTO_INCREMENT=1;

INSERT INTO `pacientes` (`nome`,`idade`,`peso`,`altura`,`imc`)
VALUES
  ("Jasper James",56,75,168,27),
  ("Lars Stuart",17,69,179,18),
  ("Lester Hodge",25,68,180,26),
  ("Zachery Best",58,90,167,23),
  ("Caesar Gillespie",53,65,196,21),
  ("Jacob House",64,63,186,28),
  ("Porter Clarke",41,77,167,22),
  ("Marvin Mcmahon",21,67,195,24),
  ("Bevis Brown",29,91,182,22),
  ("Jelani Decker",40,86,167,21);
INSERT INTO `pacientes` (`nome`,`idade`,`peso`,`altura`,`imc`)
VALUES
  ("Christian Jensen",46,70,177,24),
  ("Benjamin Floyd",42,94,183,23),
  ("Connor Beach",35,89,170,24),
  ("Ian Ford",19,78,171,23),
  ("Oren Garcia",57,90,166,27),
  ("Salvador Duffy",46,90,193,26),
  ("Hayden Parrish",26,61,182,25),
  ("Chase Clayton",63,75,172,23),
  ("Flynn Dixon",27,84,184,28),
  ("Reuben Burgess",22,92,185,29);
INSERT INTO `pacientes` (`nome`,`idade`,`peso`,`altura`,`imc`)
VALUES
  ("Clinton Fleming",42,60,167,23),
  ("Nathan York",49,75,178,22),
  ("Jasper Carney",43,87,178,17),
  ("Callum York",64,90,193,25),
  ("Tad Downs",21,75,180,23),
  ("Thaddeus Gibbs",58,73,168,18),
  ("Logan Murphy",65,70,194,18),
  ("Erich Cummings",27,84,186,23),
  ("Cullen Mills",15,64,195,21),
  ("Cadman Wooten",22,87,169,25);
INSERT INTO `pacientes` (`nome`,`idade`,`peso`,`altura`,`imc`)
VALUES
  ("Jin Davenport",39,78,186,21),
  ("Otto Lyons",29,56,166,28),
  ("Evan French",44,91,171,24),
  ("Denton Mclaughlin",39,68,183,27),
  ("Jesse Hogan",35,85,184,20),
  ("Wade Murray",21,70,174,27),
  ("Logan Welch",48,65,179,29),
  ("Hayden Reeves",22,86,172,21),
  ("Stone Gill",48,91,196,25),
  ("Colby Farrell",21,68,194,27);
