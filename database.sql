-- Exported from QuickDBD: https://www.quickdatatabasediagrams.com/
-- Link to schema: https://app.quickdatabasediagrams.com/#/d/8LOA07
-- NOTE! If you have used non-SQL datatypes in your design, you will have to change these here.


CREATE TABLE `alumnos` (
    `rut` varchar(11)  NOT NULL ,
    `clave` varchar(25)  NOT NULL ,
    `nombre` varchar(50)  NOT NULL ,
    `carrera` varchar(50)  NOT NULL ,
    `p1` varchar  NOT NULL ,
    `p2` varchar  NOT NULL ,
    `p3` int(1)  NOT NULL ,
    `p4` int(1)  NOT NULL ,
    `p5` int(1)  NOT NULL ,
    `p6` int(1)  NOT NULL ,
    `p7` int(1)  NOT NULL ,
    `p8` int(1)  NOT NULL ,
    `p9` int(1)  NOT NULL ,
    `p10` int(1)  NOT NULL ,
    `p11` int(1)  NOT NULL ,
    `p12` int(1)  NOT NULL ,
    `p13` int(1)  NOT NULL ,
    `p14` int(1)  NOT NULL ,
    `p15` int(1)  NOT NULL ,
    `p16` int(1)  NOT NULL ,
    `p17` int(1)  NOT NULL ,
    `p18` int(1)  NOT NULL ,
    `p19` int(1)  NOT NULL ,
    `p20` int(1)  NOT NULL ,
    `p21` int(1)  NOT NULL ,
    `p22` int(1)  NOT NULL ,
    `p23` int(1)  NOT NULL ,
    `p24` int(1)  NOT NULL ,
    `p25` int(1)  NOT NULL ,
    `sugerencia_calidad` varchar  NOT NULL ,
    `sugerencia_metodologia` varchar  NOT NULL ,
    `otros_comentarios` varchar  NOT NULL ,
    `voto` int(1)  NOT NULL 
);

CREATE TABLE `administradores` (
    `rut` varchar(11)  NOT NULL ,
    `clave` varchar(25)  NOT NULL 
);

