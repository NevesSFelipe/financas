CREATE TABLE categorias_integrantes (
    id_categoria_integrante INT(11) NOT NULL AUTO_INCREMENT,
    id_categoria INT(11) NOT NULL,
    id_integrante INT(11) NOT NULL,
    PRIMARY KEY(id_categoria_integrante),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria),
    FOREIGN KEY (id_integrante) REFERENCES integrantes(id_integrante)
) DEFAULT CHARSET = utf8;

INSERT INTO categorias_integrantes (id_categoria, id_integrante) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(25, 1),
(26, 1),

(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(19, 2),
(20, 2),
(22, 2),
(23, 2),
(24, 2),

(9, 3),
(10, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(21, 3),
(22, 3);