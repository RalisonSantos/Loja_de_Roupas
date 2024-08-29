
-- -----------------------------------------------------
-- Schema loja
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema loja
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf8 ;
USE `loja` ;

-- -----------------------------------------------------
-- Table `loja`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(15) NULL,
  `preco` DECIMAL(13) NULL,
  `tamanho` VARCHAR(3) NULL,
  `modelo` VARCHAR(15) NULL,
  `cor` VARCHAR(10) NULL,
  `quantidade` INT NULL,
  `descriao` VARCHAR(150) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `loja`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(40) NULL,
  `email` VARCHAR(35) NULL,
  `data_nascimento` DATETIME NULL,
  `senha` VARCHAR(32) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `loja`.`vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja`.`vendas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(20) NULL,
  `usuarios` INT NULL,
  `total` VARCHAR(45) NULL,
  `data_cadrastro` DATETIME NULL,
  PRIMARY KEY (`id`, `usuarios`),
  INDEX `fk_vendas_usuarios1_idx` (`usuarios` ASC) VISIBLE,
  CONSTRAINT `fk_vendas_usuarios1`
    FOREIGN KEY (`usuarios`)
    REFERENCES `loja`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `loja`.`itens_vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja`.`itens_vendas` (
  `produtos` INT NOT NULL,
  `vendas` INT NOT NULL,
  `itens_vendas` INT NOT NULL,
  `quantidade` INT NULL,
  PRIMARY KEY (`produtos`, `vendas`, `itens_vendas`),
  INDEX `fk_produtos_has_vendas_vendas1_idx` (`vendas` ASC, `itens_vendas` ASC) VISIBLE,
  INDEX `fk_produtos_has_vendas_produtos1_idx` (`produtos` ASC) VISIBLE,
  CONSTRAINT `fk_produtos_has_vendas_produtos1`
    FOREIGN KEY (`produtos`)
    REFERENCES `loja`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produtos_has_vendas_vendas1`
    FOREIGN KEY (`vendas` , `itens_vendas`)
    REFERENCES `loja`.`vendas` (`id` , `usuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `loja`.`fornecedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja`.`fornecedores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `loja`.`compras_fornecedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja`.`compras_fornecedores` (
  `usuarios_id` INT NOT NULL,
  `fornecedores_id` INT NOT NULL,
  `quantidade` INT NULL,
  PRIMARY KEY (`usuarios_id`, `fornecedores_id`),
  INDEX `fk_usuarios_has_fornecedores_fornecedores1_idx` (`fornecedores_id` ASC) VISIBLE,
  INDEX `fk_usuarios_has_fornecedores_usuarios1_idx` (`usuarios_id` ASC) VISIBLE,
  CONSTRAINT `fk_usuarios_has_fornecedores_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `loja`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_fornecedores_fornecedores1`
    FOREIGN KEY (`fornecedores_id`)
    REFERENCES `loja`.`fornecedores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


