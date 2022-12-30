CREATE TABLE categorias (
    id_categoria INT(11) NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(100) NOT NULL UNIQUE,
    status ENUM('E', 'S') NOT NULL,
    PRIMARY KEY(id_categoria)
) DEFAULT CHARSET = utf8;


INSERT INTO categorias (descricao, status) VALUES
('Água', 'S'),
('Aluguel', 'S'),
('Gás', 'S'),
('Luz', 'S'),
('Manutenção', 'S'),
('Mercado', 'S'),
('NET + TV', 'S'),
('Romeu', 'S'),
('Casa', 'S'),
('Celular', 'S'),
('Cursos', 'S'),
('Diversão', 'S'),
('Dívidas / Impréstimos', 'S'),
('Gasolina / Transporte / Uber', 'S'),
('Higiene Pessoal', 'S'),
('Reserva de Emergência', 'S'),
('Taxas / Juros', 'S'),
('Cigarro', 'S'),
('Pagamento', 'E'),
('Vale', 'E'),
('Aposentadoria', 'E'),
('13ª / Bonificações', 'E'),
('Ticket Mercado', 'E'),
('Ajuda de Custo', 'E'),
('Contribuição Felipe', 'E'),
('Contribuição Geraldo', 'E');