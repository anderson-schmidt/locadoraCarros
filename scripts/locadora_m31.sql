#SOURCE C:\xampp\htdocs\Anderson\locadora_m31.sql

CREATE DATABASE locadora_m31;
USE locadora_m31;
CREATE TABLE bairro(
    cod_bairro int NOT NULL AUTO_INCREMENT,
    bairro varchar(15) NOT NULL,
    PRIMARY KEY(cod_bairro)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE tipo(
    cod_tipo int NOT NULL AUTO_INCREMENT,
    tipo varchar(15) NOT NULL,
    PRIMARY KEY(cod_tipo)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE montadora(
    cod_montadora int NOT NULL AUTO_INCREMENT,
    montadora varchar(15) NOT NULL,
    PRIMARY KEY(cod_montadora)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE cliente(
    cod_cliente int NOT NULL AUTO_INCREMENT,
    cliente varchar(35) NOT NULL,
    bairro_cliente int NOT NULL,
    PRIMARY KEY(cod_cliente),
    FOREIGN KEY(bairro_cliente) REFERENCES bairro(cod_bairro)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE locacao(
    cod_locacao int NOT NULL AUTO_INCREMENT,
    cliente_locacao int NOT NULL,
    data_locacao date NOT NULL,
    PRIMARY KEY(cod_locacao),
    FOREIGN KEY(cliente_locacao) REFERENCES cliente(cod_cliente)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE carro(
    cod_carro int NOT NULL AUTO_INCREMENT,
    carro varchar(35) NOT NULL,
    tipo_carro int NOT NULL,
    montadora_carro int NOT NULL,
    valor float NOT NULL,
    PRIMARY KEY(cod_carro),
    FOREIGN KEY(tipo_carro) REFERENCES tipo(cod_tipo),
    FOREIGN KEY(montadora_carro) REFERENCES montadora(cod_montadora)    
) ENGINE=innoDB DEFAULT CHARSET=utf8;
CREATE TABLE carros_locacao(
    carro_locado int NOT NULL,
    locacao int NOT NULL,
    FOREIGN KEY(carro_locado) REFERENCES carro(cod_carro),
    FOREIGN KEY(locacao) REFERENCES locacao(cod_locacao)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
  
  #insert into <nome da tabela> values <conteúdo>
  

  CREATE TABLE usuario(
    cod_usuario int NOT NULL AUTO_INCREMENT,
    usuario varchar(15) NOT NULL,
    senha varchar(6) NOT NULL,
    PRIMARY KEY(cod_usuario)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
