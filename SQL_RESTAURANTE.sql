 -- DROP DATABASE RESTAURANTE;
CREATE DATABASE RESTAURANTE;

USE RESTAURANTE;

CREATE TABLE TIPO_USUARIO
(
	HANDLE			INT AUTO_INCREMENT PRIMARY KEY,
	DESCRICAO		VARCHAR(200),
    DT_INCLUSAO		DATETIME DEFAULT CURRENT_TIMESTAMP(),
    ATIVO			VARCHAR(1) DEFAULT 'S'
);

INSERT INTO TIPO_USUARIO (DESCRICAO)
VALUES
('ADMINISTRADOR');

CREATE TABLE USUARIO
(
	HANDLE 			INT AUTO_INCREMENT PRIMARY KEY,
    NOME 			VARCHAR(80),
    EMAIL			VARCHAR(150),
    SENHA			VARCHAR(255),
    DT_NASCIMENTO	DATE,
    DT_CRIACAO		DATETIME DEFAULT CURRENT_TIMESTAMP(),
    DT_ATUALIZACAO	DATETIME ON UPDATE CURRENT_TIMESTAMP(),
    CD_TIPO_USUARIO	INT,
	ATIVO			VARCHAR(1) DEFAULT 'S',
	FOREIGN KEY (CD_TIPO_USUARIO) REFERENCES TIPO_USUARIO (HANDLE)
);

CREATE TABLE AVALIACOES
(
	HANDLE			INT	AUTO_INCREMENT PRIMARY KEY NOT NULL,
    COD_USUARIO 	INT,
    NOTA			INT,
	COMENTARIO		VARCHAR(400),
    FOREIGN KEY (COD_USUARIO) REFERENCES USUARIO (HANDLE)
);

CREATE TABLE TIPO_ITEM
(
	HANDLE			INT AUTO_INCREMENT PRIMARY KEY,
    DESCRICAO		VARCHAR(200),
    ATIVO			VARCHAR(1) DEFAULT 'S'
);

INSERT INTO TIPO_ITEM (DESCRICAO)
VALUES
('TIPO TESTE');

CREATE TABLE CARDAPIO
(
	HANDLE			INT AUTO_INCREMENT PRIMARY KEY,
	NOME			VARCHAR(50),
    DESCRICAO		VARCHAR(400),
    VALOR			DECIMAL(10,2),
    ATIVO			VARCHAR(1) DEFAULT 'S',
    CD_TIPO_ITEM	INT,
    DT_INCLUSAO		DATE DEFAULT CURRENT_TIMESTAMP(),
    IMAGEM			VARCHAR(100),
    FOREIGN KEY (CD_TIPO_ITEM) REFERENCES TIPO_ITEM(HANDLE)
);

INSERT INTO CARDAPIO
(NOME, DESCRICAO, VALOR, ATIVO, CD_TIPO_ITEM, IMAGEM)
VALUES
('COMIDATESTES', 'COMIDATESTE', 15.00, 'S', 1, '../IMG/COMIDA1.JPG');

INSERT INTO CARDAPIO
(NOME, DESCRICAO, VALOR, ATIVO, CD_TIPO_ITEM, IMAGEM)
VALUES
('OIEECOMIDINHA', 'COMIDATESTE', 20.00, 'S', 1, '../IMG/COMIDA1.JPG');

CREATE TABLE CARRINHO
(
	HANDLE		INT	AUTO_INCREMENT PRIMARY KEY,
	COD_USUARIO	INT,
    COD_ITEM	INT,
    COMPRADO	VARCHAR(1) DEFAULT 'N',
    QTDE 		INT NOT NULL,
    DESCRICAO 	VARCHAR(100),
    VALOR		DECIMAL(12,2),
    IMAGEM		VARCHAR(100),
	FOREIGN KEY (COD_USUARIO) REFERENCES USUARIO (HANDLE),
    FOREIGN KEY (COD_ITEM) REFERENCES CARDAPIO (HANDLE)
);

CREATE TABLE PEDIDO
(
	HANDLE			INT AUTO_INCREMENT PRIMARY KEY,
    CD_USUARIO		INT, 
	DT_PEDIDO		DATETIME DEFAULT CURRENT_TIMESTAMP(),
	VALOR_PEDIDO	DECIMAL(10,2),
	STATUS_PEDIDO 	VARCHAR(50),
	FOREIGN KEY (CD_USUARIO) REFERENCES USUARIO (HANDLE)
);

CREATE TABLE PEDIDO_PRATOS
(
	HANDLE 			INT AUTO_INCREMENT PRIMARY KEY,
    CD_PEDIDO			INT,
    CD_ITEM_CARDAPIO	INT,
    FOREIGN KEY (CD_PEDIDO) REFERENCES PEDIDO(HANDLE),
	FOREIGN KEY (CD_ITEM_CARDAPIO) REFERENCES CARDAPIO(HANDLE)
);