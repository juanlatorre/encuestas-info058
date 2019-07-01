CREATE TABLE `alumnos` (
    `rut` varchar(11) NOT NULL,
    `clave` varchar(25) NOT NULL,
    `nombre` varchar(50) NOT NULL,
    `carrera` varchar(50) NOT NULL,
    `p1` varchar(100) NOT NULL,
    `p2` varchar(255) NOT NULL,
    `p3` int(1) NOT NULL,
    `p4` int(1) NOT NULL,
    `p5` int(1) NOT NULL,
    `p6` int(1) NOT NULL,
    `p7` int(1) NOT NULL,
    `p8` int(1) NOT NULL,
    `p9` int(1) NOT NULL,
    `p10` int(1) NOT NULL,
    `p11` int(1) NOT NULL,
    `p12` int(1) NOT NULL,
    `p13` int(1) NOT NULL,
    `p14` int(1) NOT NULL,
    `p15` int(1) NOT NULL,
    `p16` int(1) NOT NULL,
    `p17` int(1) NOT NULL,
    `p18` int(1) NOT NULL,
    `p19` int(1) NOT NULL,
    `p20` int(1) NOT NULL,
    `p21` int(1) NOT NULL,
    `p22` int(1) NOT NULL,
    `p23` int(1) NOT NULL,
    `p24` int(1) NOT NULL,
    `p25` int(1) NOT NULL,
    `sugerencia_calidad` varchar(500) NOT NULL,
    `sugerencia_metodologia` varchar(500) NOT NULL,
    `otros_comentarios` varchar(500) NOT NULL,
    `voto` int(1) NOT NULL,
    PRIMARY KEY (
        `rut`
    )
);

CREATE TABLE `administradores` (
    `rut` varchar(11)  NOT NULL ,
    `clave` varchar(25)  NOT NULL,
    PRIMARY KEY (
        `rut`
    ) 
);

