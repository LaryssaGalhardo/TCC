-- MySQL Script generated by MySQL Workbench
-- Thu May 14 13:39:01 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bd_tcc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd_tcc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_tcc` DEFAULT CHARACTER SET utf8 ;
USE `bd_tcc` ;

-- -----------------------------------------------------
-- Table `bd_tcc`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tcc`.`clientes` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  `cpf` VARCHAR(11) NULL,
  `telefone` VARCHAR(15) NULL,
  `cep` VARCHAR(8) NULL,
  `cidade` VARCHAR(60) NULL,
  `endereco` VARCHAR(100) NULL,
  `complemento` VARCHAR(100) NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_tcc`.`carrinhos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tcc`.`carrinhos` (
  `id_carrinho` INT NOT NULL AUTO_INCREMENT,
  `data_carrinho` DATETIME NULL,
  `valor` DECIMAL(10,2) NULL,
  `id_cliente` INT NOT NULL,
  PRIMARY KEY (`id_carrinho`),
  INDEX `fk_carrinhos_clientes1_idx` (`id_cliente` ASC),
  CONSTRAINT `fk_carrinhos_clientes1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `bd_tcc`.`clientes` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_tcc`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tcc`.`categorias` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_tcc`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tcc`.`produtos` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `descrisao` VARCHAR(255) NOT NULL,
  `estoque` INT NOT NULL,
  `estoque_min` INT NOT NULL,
  `valor` DECIMAL(10,2) NOT NULL,
  `produtoscol` VARCHAR(45) NULL,
  `id_categoria` INT NOT NULL,
  imagem VARCHAR(255),
  PRIMARY KEY (`id_produto`),
  INDEX `fk_produtos_categorias1_idx` (`id_categoria` ASC),
  CONSTRAINT `fk_produtos_categorias1`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `bd_tcc`.`categorias` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_tcc`.`produtos_carrinhos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tcc`.`produtos_carrinhos` (
  `id_produtos_carrinhos` INT NOT NULL AUTO_INCREMENT,
  `quantidade` INT NULL,
  `valor` DECIMAL(10,2) NULL,
  `id_carrinho` INT NOT NULL,
  `id_produto` INT NOT NULL,
  PRIMARY KEY (`id_produtos_carrinhos`),
  INDEX `fk_produtos_carrinhos_carrinhos1_idx` (`id_carrinho` ASC),
  INDEX `fk_produtos_carrinhos_produtos1_idx` (`id_produto` ASC),
  CONSTRAINT `fk_produtos_carrinhos_carrinhos1`
    FOREIGN KEY (`id_carrinho`)
    REFERENCES `bd_tcc`.`carrinhos` (`id_carrinho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produtos_carrinhos_produtos1`
    FOREIGN KEY (`id_produto`)
    REFERENCES `bd_tcc`.`produtos` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_tcc`.`entregas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tcc`.`entregas` (
  `id_entregas` INT NOT NULL AUTO_INCREMENT,
  `agenda` DATETIME NOT NULL,
  `frete` DECIMAL(10,2) NOT NULL,
  `id_carrinho` INT NOT NULL,
  PRIMARY KEY (`id_entregas`),
  INDEX `fk_entregas_carrinhos1_idx` (`id_carrinho` ASC),
  CONSTRAINT `fk_entregas_carrinhos1`
    FOREIGN KEY (`id_carrinho`)
    REFERENCES `bd_tcc`.`carrinhos` (`id_carrinho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
