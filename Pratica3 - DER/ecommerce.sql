-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2021-11-11 08:46:31.058

-- tables
-- Table: boleto
CREATE TABLE boleto (
    id int NOT NULL AUTO_INCREMENT,
    cod_barras varchar(100) NOT NULL,
    cpf int NOT NULL,
    CONSTRAINT boleto_pk PRIMARY KEY (id)
);

-- Table: cartao
CREATE TABLE cartao (
    id int NOT NULL AUTO_INCREMENT,
    numero int NOT NULL,
    nome_cliente varchar(255) NOT NULL,
    cod_seguranca int NOT NULL,
    cod_validade varchar(6) NOT NULL,
    CONSTRAINT cartao_pk PRIMARY KEY (id)
);

-- Table: compra
CREATE TABLE compra (
    id int NOT NULL AUTO_INCREMENT,
    usuario_id int NOT NULL,
    produto_id int NOT NULL,
    quantidade int NOT NULL,
    desconto real(10,2) NOT NULL,
    forma_de_pagamento_id int NOT NULL,
    CONSTRAINT compra_pk PRIMARY KEY (id)
);

-- Table: endereco
CREATE TABLE endereco (
    id int NOT NULL,
    rua varchar(100) NOT NULL,
    numero int NOT NULL,
    cep varchar(10) NOT NULL,
    complemento varchar(100) NOT NULL,
    usuario_id int NOT NULL,
    CONSTRAINT endereco_pk PRIMARY KEY (id)
);

-- Table: forma_de_pagamento
CREATE TABLE forma_de_pagamento (
    id int NOT NULL AUTO_INCREMENT,
    cartao_id int NOT NULL,
    boleto_id int NOT NULL,
    pix_id int NOT NULL,
    CONSTRAINT forma_de_pagamento_pk PRIMARY KEY (id)
);

-- Table: papel
CREATE TABLE papel (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    descricao varchar(100) NOT NULL,
    CONSTRAINT papel_pk PRIMARY KEY (id)
);

-- Table: pix
CREATE TABLE pix (
    id int NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    numero varchar(14) NOT NULL,
    CONSTRAINT pix_pk PRIMARY KEY (id)
);

-- Table: produto
CREATE TABLE produto (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    descricao varchar(255) NOT NULL,
    quantidade int NOT NULL,
    valor real(10,2) NOT NULL,
    CONSTRAINT produto_pk PRIMARY KEY (id)
);

-- Table: usuario
CREATE TABLE usuario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    senha varchar(40) NOT NULL,
    forma_de_pagamento_id int NOT NULL,
    CONSTRAINT usuario_pk PRIMARY KEY (id)
);

-- Table: usuario_papel
CREATE TABLE usuario_papel (
    id int NOT NULL AUTO_INCREMENT,
    usuario_id int NOT NULL,
    papel_id int NOT NULL,
    CONSTRAINT usuario_papel_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: compra_forma_de_pagamento (table: compra)
ALTER TABLE compra ADD CONSTRAINT compra_forma_de_pagamento FOREIGN KEY compra_forma_de_pagamento (forma_de_pagamento_id)
    REFERENCES forma_de_pagamento (id);

-- Reference: endereco_usuario (table: endereco)
ALTER TABLE endereco ADD CONSTRAINT endereco_usuario FOREIGN KEY endereco_usuario (usuario_id)
    REFERENCES usuario (id);

-- Reference: forma_de_pagamento_boleto (table: forma_de_pagamento)
ALTER TABLE forma_de_pagamento ADD CONSTRAINT forma_de_pagamento_boleto FOREIGN KEY forma_de_pagamento_boleto (boleto_id)
    REFERENCES boleto (id);

-- Reference: forma_de_pagamento_cartao (table: forma_de_pagamento)
ALTER TABLE forma_de_pagamento ADD CONSTRAINT forma_de_pagamento_cartao FOREIGN KEY forma_de_pagamento_cartao (cartao_id)
    REFERENCES cartao (id);

-- Reference: forma_de_pagamento_pix (table: forma_de_pagamento)
ALTER TABLE forma_de_pagamento ADD CONSTRAINT forma_de_pagamento_pix FOREIGN KEY forma_de_pagamento_pix (pix_id)
    REFERENCES pix (id);

-- Reference: usuario_forma_de_pagamento (table: usuario)
ALTER TABLE usuario ADD CONSTRAINT usuario_forma_de_pagamento FOREIGN KEY usuario_forma_de_pagamento (forma_de_pagamento_id)
    REFERENCES forma_de_pagamento (id);

-- Reference: usuario_papel_papel (table: usuario_papel)
ALTER TABLE usuario_papel ADD CONSTRAINT usuario_papel_papel FOREIGN KEY usuario_papel_papel (papel_id)
    REFERENCES papel (id);

-- Reference: usuario_papel_usuario (table: usuario_papel)
ALTER TABLE usuario_papel ADD CONSTRAINT usuario_papel_usuario FOREIGN KEY usuario_papel_usuario (usuario_id)
    REFERENCES usuario (id);

-- Reference: venda_produto (table: compra)
ALTER TABLE compra ADD CONSTRAINT venda_produto FOREIGN KEY venda_produto (produto_id)
    REFERENCES produto (id);

-- Reference: venda_usuario (table: compra)
ALTER TABLE compra ADD CONSTRAINT venda_usuario FOREIGN KEY venda_usuario (usuario_id)
    REFERENCES usuario (id);

-- End of file.

