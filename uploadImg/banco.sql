
CREATE DATABASE `produto` DEFAULT CHARACTER SET utf8 ;
USE `produto` ;

-- -----------------------------------------------------
-- Table `produto`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `produto`.`produto` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nome_produto` VARCHAR(100) NOT NULL,
  `descricao` TEXT NOT NULL,
  PRIMARY KEY (`id_produto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `produto`.`imagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `produto`.`imagens` (
  `id_imageM` INT NOT NULL AUTO_INCREMENT,
  `nome_imagem` VARCHAR(100) NOT NULL,
  `produto_id_produto` INT NOT NULL,
  PRIMARY KEY (`id_imageM`),
  
    FOREIGN KEY (`produto_id_produto`)
    REFERENCES `produto`.`produto` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
