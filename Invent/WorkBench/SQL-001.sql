-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema inventario_equipos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema inventario_equipos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `inventario_equipos` ;
USE `inventario_equipos` ;

-- -----------------------------------------------------
-- Table `inventario_equipos`.`empleados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario_equipos`.`empleados` (
  `Id_Empleados` INT NOT NULL AUTO_INCREMENT,
  `Nombres` VARCHAR(50) COLLATE 'utf8mb3_bin' NULL DEFAULT NULL,
  `Apellidos` VARCHAR(50) COLLATE 'utf8mb3_bin' NULL DEFAULT NULL,
  `Cedula_Identidad` VARCHAR(15) COLLATE 'utf8mb3_bin' NULL DEFAULT NULL,
  `P00` VARCHAR(15) COLLATE 'utf8mb3_bin' NULL DEFAULT NULL,
  PRIMARY KEY (`Id_Empleados`))
ENGINE = InnoDB
AUTO_INCREMENT = 9;


-- -----------------------------------------------------
-- Table `inventario_equipos`.`equipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario_equipos`.`equipos` (
  `Id_Equipos` INT NOT NULL AUTO_INCREMENT,
  `Tipo_Dispoitivo` VARCHAR(50) COLLATE 'utf8mb3_bin' NULL DEFAULT NULL,
  `Marca` VARCHAR(45) COLLATE 'utf8mb3_bin' NULL DEFAULT NULL,
  `Modelo` VARCHAR(45) COLLATE 'utf8mb3_bin' NULL DEFAULT NULL,
  `Serial` VARCHAR(45) COLLATE 'utf8mb3_bin' NULL DEFAULT NULL,
  `Cod_Invetario` VARCHAR(45) COLLATE 'utf8mb3_bin' NULL DEFAULT NULL,
  PRIMARY KEY (`Id_Equipos`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
