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
       ('Baryte','BaS<sup>6+</sup>O<sub>4</sub>',2,3,3,'images/baryte.jpg'),
       ('Calcite', 'CaCO<sub>3</sub>', 4, 3,3, 'images/calcite.jpg'),
       ('Topaz','Al<sub>2</sub>SiO<sub>4</sub>F<sub>2</sub>', 2, 8, 8, 'images/topaz.jpg'),
       ('Staurolite', 'Fe<sup>2+</sup><sub>2</sub>Al<sub>9</sub>Si<sub>4</sub>O<sub>23</sub>(OH)',6,7,7.5,'images/staurolite.jpg'),
       ('Eudialyte','Na<sub>15</sub>Ca<sub>6</sub>Fe<sup>2+</sup><sub>3</sub>Zr<sup>4+</sup><sub>3</sub>Si(Si<sub>25</sub>O<sub>73</sub>)(O,OH,H<sub>2</sub>O)<sub>3</sub>(Cl,OH)<sub>2</sub>',4,5,6,'images/eudialyte.jpg'),
       ('Azurite', 'Cu<sup>2+</sup><sub>3</sub>(CO<sub>3</sub>)<sub>2</sub>(OH)<sub>2</sub>', 6,3.5,4,'images/azurite.jpg'),
       ('Chalcopyrite','Cu<sup>1+</sup>Fe<sup>3+</sup>S<sup>2-</sup><sub>2</sub>',5,3.5,4,'images/chalcopyrite.jpg'),
       ('Epidote','Ca<sub>2</sub>Fe<sup>3+</sup>Al<sub>2</sub>(Si<sub>2</sub>O<sub>7</sub>)(SiO<sub>4</sub>)O(OH)',6,6,6,'images/epidote.jpg'),
       ('Copper', 'Cu', 1, 2.5,3,'images/copper.jpg'),
       ('Fluorite','CaF<sub>2</sub>',1,4,4,'images/fluorite.jpg'),
       ('Galena', 'PbS', 1,2.5,2.5,'images/galena.jpg'),
       ('Forsterite','Mg<sub>2</sub>SiO<sub>4</sub>',2,7,7,'images/forsterite.jpg'),
       ('Variscite', 'AlPO<sub>4</sub>·2H<sub>2</sub>O',2,3.5,3.5,'images/variscite.jpg'),
       ('Bismuth', 'Bi', 4,2,2.5,'images/bismuth.jpg');