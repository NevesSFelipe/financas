CREATE TABLE integrantes (
    id_integrante INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    PRIMARY KEY(id_integrante)
) DEFAULT CHARSET = utf8;

INSERT INTO integrantes (nome) VALUES
('Casa'),
('Felipe'),
('Geraldo');