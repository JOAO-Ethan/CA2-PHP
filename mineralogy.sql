USE `D00263493`;

DROP TABLE IF EXISTS `mineral`;
DROP TABLE IF EXISTS `crystal_system` CASCADE;

CREATE TABLE `crystal_system`
(
    `id`   int          NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE `mineral`
(
    `id`               int           NOT NULL AUTO_INCREMENT,
    `name`             varchar(255)  NOT NULL,
    `chemical_formula` varchar(255)  NOT NULL,
    `crystalSystemID`  int,
    `minHardness`      decimal(3, 1) NOT NULL,
    `maxHardness`      decimal(3, 1) NOT NULL,
    `picturePath`      varchar(255)  NOT NULL,
    PRIMARY KEY(`id`),
    FOREIGN KEY (`crystalSystemID`) REFERENCES `crystal_system`(`id`) ON DELETE CASCADE
);

INSERT INTO `crystal_system`
VALUES (1,'Isometric'),
       (2,'Orthorhombic'),
       (3,'Hexagonal'),
       (4,'Trigonal'),
       (5,'Tetragonal'),
       (6,'Monoclinic'),
       (7,'Triclinic'),
       (8,'Amorphous'),
       (9,'Icosahedral');


INSERT INTO `mineral`(`name`,`chemical_formula`,`crystalSystemID`,`minHardness`, `maxHardness`,`picturePath`)
VALUES ('Beryl','Be<sub>3</sub>Al<sub>2</sub>Si<sub>6</sub>O<sub>18</sub>',3,7.5,8,'images/beryl.jpg'),
       ('Quartz','SiO<sub>2</sub>',4,7,7,'images/amethyst.jpg'),
       ('Diamond', 'C',1,10,10,'images/diamond.jpg'),
       ('Vanadinite','Pb<sup>2+</sup><sub>5</sub>(V<sup>5+</sup>O<sub>4</sub>)<sub>3</sub>Cl',3,2.5,3,'images/vanadinite.jpg'),
       ('Aragonite','CaCO<sub>3</sub>',2,3.5,4,'images/aragonite.jpg'),
       ('Pyrite','Fe<sup>2+</sup>(S<sub>2</sub>)<sup>2-</sup>',1,6,6.5,'images/pyrite.jpg'),
       ('Baryte','BaS<sup>6+</sup>O<sub>4</sub>',2,3,3,'images/baryte.jpg');