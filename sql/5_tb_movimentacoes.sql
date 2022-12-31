CREATE TABLE movimentacoes (
    id_movimentacao INT(11) NOT NULL AUTO_INCREMENT,
    data_pagamento DATE NOT NULL,
    id_integrante INT(11) NOT NULL,
    id_categoria INT(11) NOT NULL,
    valor DECIMAL(6,2) NOT NULL,
    obs VARCHAR(255),
    PRIMARY KEY(id_movimentacao),
    FOREIGN KEY (id_integrante) REFERENCES integrantes(id_integrante),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
) DEFAULT CHARSET = utf8;