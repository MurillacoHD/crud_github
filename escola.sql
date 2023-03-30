DROP DATABASE IF EXISTS escola;
CREATE DATABASE escola;
USE  escola;

CREATE TABLE tb_aulas (
    id_aula INT PRIMARY KEY AUTO_INCREMENT,
    aula VARCHAR(50)
);

INSERT INTO tb_aulas VALUES
    (1,"Planta Baixa-P3"),
    (2,"Planta Baixa-P4"),
    (3,"Planta Baixa-P5"),
    (4,"Planta 1-Primero"),
    (5,"Planta 1-Segundo"),
    (6,"Planta 1-Tercero"),
    (7,"Planta 1-Cuarto"),
    (8,"Planta 1-Quinto"),
    (9,"Planta 1-Sexto");

CREATE TABLE tb_cursos (
    id_cursos INT PRIMARY KEY AUTO_INCREMENT,
    curs VARCHAR(50)
);


INSERT INTO tb_cursos VALUES
(1,"P3"),
(2,"P4"),
(3,"P5"),
(4,"Primero"),
(5,"Segundo"),
(6,"Tercero"),
(7,"Quarto"),
(8,"Quinto"),
(9,"Sexto");

CREATE TABLE tb_usuaris (
    id_usuari INT PRIMARY KEY AUTO_INCREMENT,
    usuari VARCHAR(40),
    contrasenya VARCHAR (50)
);

INSERT INTO tb_usuaris VALUES
(1,"cfalco","EwnizP3#falco"),
(2,"pmarti","EwnizP3#martinez"),
(3,"anavar","EwnizP3#navarro"),
(4,"sabasc","EwnizP3#abascal"),
(5,"mdiaz","EwnizP4#diaz"),
(6,"jsoler","EwnizP4#soler"),
(7,"mgarci","Ewniz3#garcia"),
(8,"mlopez","EwnizP4#lopez"),
(9,"scasta","EwnizP5#goma"),
(10,"vromer","EwnizP5#romero"),
(11,"gsolso","Ewniz5#solsona"),
(12,"gmonte","EwnizP5#monterroso"),
(13,"smoren","Ewniz1#moreno"),
(14,"pmuril","Ewniz1#murillo"),
(15,"jperez","Ewniz1#pereez"),
(16,"ediaz","Ewniz5#diaz"),
(17,"jnahar","Ewniz1#naharros"),
(18,"mgil","Ewniz6#gil"),
(19,"rbou","Ewniz6#bou"),
(20,"jmarti","Ewniz2#marti");

CREATE TABLE tb_professors (
    id_professor INT PRIMARY KEY AUTO_INCREMENT,
    professor VARCHAR(50),
    id_usuari INT,
    FOREIGN KEY (id_usuari) REFERENCES tb_usuaris (id_usuari)
);

INSERT INTO tb_professors VALUES
(1,"Claudia Falcó",1),
(2,"Pau Martinez",2),
(3,"Alberto Navarro",3),
(4,"Santiago Abascal",4),
(5,"Maria Diaz",5),
(6,"Jaume Soler",6),
(7,"Marc Garcia",7),
(8,"Mireia López",8),
(9,"Silvia Castaño",9),
(10,"Vanesa Romeero",10),
(11,"Guillem Solsona",11),
(12,"Gabriel Monterroso",12),
(13,"Soledad Moreno",13),
(14,"Pau Murillo",14),
(15,"Josue Peréz",15),
(16,"Esther Diaz",16),
(17,"Josep Naharros",17),
(18,"Marc Gil",18),
(19,"Roser Bou",19),
(20,"Joel Martí",20);

CREATE TABLE tb_assignaturas (
    id_assignatura INT PRIMARY KEY AUTO_INCREMENT,
    assignatura VARCHAR(50),
    id_professor INT,
    FOREIGN KEY (id_professor) REFERENCES tb_professors (id_professor)
);

INSERT INTO tb_assignaturas VALUES
-- P3
(1, "Descubrimiento de uno mismo y de los demás",1),
(2, "Descubrimiento del entorno",1),
(3, "Comunicación y lenguajes",1),
-- P4
(4, "Descubrimiento de uno mismo y de los demás",2),
(5, "Descubrimiento del entorno",2),
(6, "Comunicación y lenguajes",2),
-- P5
(7, "Descubrimiento de uno mismo y de los demás",3),
(8, "Descubrimiento del entorno",3),
(9, "Comunicación y lenguajes",3),
-- Primero
(10, "Lengua catalana y literatura",4),
(11, "Lengua castellana y literatura",4),
(12, "Àngles",10),
(13, "Matemáticas",12),
(14, "Naturales",4),
(15, "Sociales",14),
(16, "Visual y plástica",16),
(17, "Educación física",18), 
(18, "Aternativa",6),
(19, "Religió",20),
-- Segundo
(20, "Lengua catalana y literatura",5),
(21, "Lengua castellana y literatura",5),
(22, "Àngles",10),
(23, "Matemáticas",12),
(24, "Naturales",5),
(25, "Sociales",14),
(26, "Visual y plástica",16),
(27, "Educación física",18),
(28, "Aternativa",6),
(29, "Religió",20),
-- Tercero
(30, "Lengua catalana y literatura",6),
(31, "Lengua castellana y literatura",6),
(32, "Àngles",10),
(33, "Matemáticas",12),
(34, "Naturales",6),
(35, "Sociales",14),
(36, "Visual y plástica",16),
(37, "Educación física",18),
(38, "Aternativa",6),
(39, "Religió",20),
-- Cuarto
(40, "Lengua catalana y literatura",7),
(41, "Lengua castellana y literatura",7),
(42, "Àngles",11),
(43, "Matemáticas",13),
(44, "Naturales",7),
(45, "Sociales",15),
(46, "Música y danza",17),
(47, "Educación física",19),
(48, "Aternativa",6),
(49, "Religió",20),
-- Quinto
(50, "Lengua catalana y literatura",8),
(51, "Lengua castellana y literatura",8),
(52, "Àngles",11),
(53, "Matemáticas",13),
(54, "Naturales",8),
(55, "Sociales",15),
(56, "Música y danza",17),
(57, "Educación física",19),
(58, "Aternativa",6),
(59, "Religió",20),
-- Sexto
(60, "Lengua catalana y literatura",9),
(61, "Lengua castellana y literatura",9),
(62, "Àngles",11),
(63, "Matemáticas",13),
(64, "Naturales",9),
(65, "Sociales",15),
(66, "Música y danza",17),
(67, "Educación física",19),
(68, "Aternativa",6),
(69, "Religió",20);

CREATE TABLE tb_horaris (
    id_horari INT PRIMARY KEY AUTO_INCREMENT,
    horari_entrada INTEGER,
    horari_sortida INTEGER,
    id_professor INT,
    FOREIGN KEY (id_professor) REFERENCES tb_professors (id_professor)
);


INSERT INTO tb_horaris VALUES
(1,08-00,17-30,1),
(2,08-00,17-30,1),
(3,08-00,17-30,1),
(4,08-00,17-30,1),
(5,08-00,17-30,1),

(6,08-00,17-30,2),
(7,08-00,17-30,2),
(8,08-00,17-30,2),
(9,08-00,17-30,2),
(10,08-00,17-30,2),

(11,08-00,17-30,3),
(12,08-00,17-30,3),
(13,08-00,17-30,3),
(14,08-00,17-30,3),
(15,08-00,17-30,3),

(16,08-00,17-30,4),
(17,08-00,17-30,4),
(18,08-00,17-30,4),
(19,08-00,17-30,4),
(20,08-00,17-30,4),

(21,08-00,17-30,5),
(22,08-00,17-30,5),
(23,08-00,17-30,5),
(24,08-00,17-30,5),
(25,08-00,17-30,5),

(26,08-00,17-30,6),
(27,08-00,17-30,6),
(28,08-00,17-30,6),
(29,08-00,17-30,6),
(30,08-00,17-30,6),

(31,08-00,17-30,7),
(32,08-00,17-30,7),
(33,08-00,17-30,7),
(34,08-00,17-30,7),
(35,08-00,17-30,7),

(36,08-00,17-30,8),
(37,08-00,17-30,8),
(38,08-00,17-30,8),
(39,08-00,17-30,8),
(40,08-00,17-30,8),

(41,08-00,17-30,9),
(42,08-00,17-30,9),
(43,08-00,17-30,9),
(44,08-00,17-30,9),
(45,08-00,17-30,9),

(46,08-00,17-30,10),
(47,08-00,17-30,10),
(48,08-00,17-30,10),
(49,08-00,17-30,10),
(50,08-00,17-30,10),

(51,08-00,17-30,11),
(52,08-00,17-30,11),
(53,08-00,17-30,11),
(54,08-00,17-30,11),
(55,08-00,17-30,11),

(56,08-00,17-30,12),
(57,08-00,17-30,12),
(58,08-00,17-30,12),
(59,08-00,17-30,12),
(60,08-00,17-30,12),

(61,08-00,17-30,13),
(62,08-00,17-30,13),
(63,08-00,17-30,13),
(64,08-00,17-30,13),
(65,08-00,17-30,13),

(66,08-00,17-30,14),
(67,08-00,17-30,14),
(68,08-00,17-30,14),
(69,08-00,17-30,14),
(70,08-00,17-30,14),

(71,08-00,17-30,15),
(72,08-00,17-30,15),
(73,08-00,17-30,15),
(74,08-00,17-30,15),
(75,08-00,17-30,15),

(76,08-00,17-30,16),
(77,08-00,17-30,16),
(78,08-00,17-30,16),
(79,08-00,17-30,16),
(80,08-00,17-30,16),

(81,08-00,17-30,17),
(82,08-00,17-30,17),
(83,08-00,17-30,17),
(84,08-00,17-30,17),
(85,08-00,17-30,17),

(86,08-00,17-30,18),
(87,08-00,17-30,18),
(88,08-00,17-30,18),
(89,08-00,17-30,18),
(90,08-00,17-30,18),

(91,08-00,17-30,19),
(92,08-00,17-30,19),
(93,08-00,17-30,19),
(94,08-00,17-30,19),
(95,08-00,17-30,19),

(96,08-00,17-30,20),
(97,08-00,17-30,20),
(98,08-00,17-30,20),
(99,08-00,17-30,20),
(100,08-00,17-30,20);