CREATE DATABASE clinica;

CREATE TABLE `clinica`.`contato` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `mensagem` VARCHAR(255) NOT NULL ,'motivo' VARCHAR(20) NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `clinica`.`EnderecoFunc` ( `id` INT NOT NULL AUTO_INCREMENT , `logradouro` VARCHAR(100) NOT NULL , `tipo` VARCHAR(20) NOT NULL , `numero` INT NOT NULL , `complemento` VARCHAR(150) NOT NULL , `bairro` VARCHAR(150) NOT NULL , `cidade` VARCHAR(150) NOT NULL , `estado` VARCHAR(20) NOT NULL , `cep` VARCHAR(25) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

ALTER TABLE `EnderecoFunc` ADD `funcionario_id` INT NOT NULL AFTER `cep`;

CREATE TABLE `clinica`.`funcionario` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NOT NULL , `dt_nascimento` DATE NOT NULL , `sexo` CHAR (1)NOT NULL , `estado_civil` VARCHAR(50) NOT NULL , `cargo` VARCHAR(50) NOT NULL , `especialidade` VARCHAR(50) NULL , `cpf` VARCHAR(20) NOT NULL , `rg` VARCHAR(25) NOT NULL , `outro` VARCHAR(25) NULL , `id_endereco` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

ALTER TABLE `enderecofunc` ADD CONSTRAINT `fk_cliente` FOREIGN KEY ( `funcionario_id` ) REFERENCES `funcionario` ( `id` );