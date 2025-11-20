-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------



-- -----------------------------------------------------
-- Table `User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `pass` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `product_img`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `product_img` (
  `idproduct_img` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` VARCHAR(45) NULL,
  PRIMARY KEY (`idproduct_img`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `product_categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `product_categorie` (
  `idproduct_categorie` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_namme` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idproduct_categorie`),
  UNIQUE INDEX `category_namme_UNIQUE` (`category_namme` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `product` (
  `idproduct` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NOT NULL,
  `price` VARCHAR(45) NOT NULL,
  `stock` VARCHAR(45) NOT NULL,
  `product_img_idproduct_img` INT UNSIGNED NOT NULL,
  `product_categorie_idproduct_categorie` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idproduct`),
  INDEX `fk_product_product_img_idx` (`product_img_idproduct_img` ASC) VISIBLE,
  INDEX `fk_product_product_categorie1_idx` (`product_categorie_idproduct_categorie` ASC) VISIBLE,
  CONSTRAINT `fk_product_product_img`
    FOREIGN KEY (`product_img_idproduct_img`)
    REFERENCES `product_img` (`idproduct_img`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_product_categorie1`
    FOREIGN KEY (`product_categorie_idproduct_categorie`)
    REFERENCES `product_categorie` (`idproduct_categorie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aanbiedingen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aanbiedingen` (
  `idaanbiedingen` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `korting_value` VARCHAR(10) NOT NULL,
  `start_date` DATE NOT NULL,
  `end_date` DATE NOT NULL,
  `product_idproduct` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idaanbiedingen`),
  INDEX `fk_aanbiedingen_product1_idx` (`product_idproduct` ASC) VISIBLE,
  CONSTRAINT `fk_aanbiedingen_product1`
    FOREIGN KEY (`product_idproduct`)
    REFERENCES `product` (`idproduct`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
