SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `first_name` VARCHAR(45) NULL ,
  `last_name` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `city` VARCHAR(45) NULL ,
  `state` VARCHAR(45) NULL ,
  `points` INT NULL ,
  `coins` VARCHAR(45) NULL ,
  `users_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`missions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`missions` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `points` VARCHAR(45) NULL ,
  `street` VARCHAR(45) NULL ,
  `city` VARCHAR(45) NULL ,
  `zipcode` VARCHAR(45) NULL ,
  `description` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`groups` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `users_id` INT NOT NULL ,
  `points` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_groups_users1` (`users_id` ASC) ,
  CONSTRAINT `fk_groups_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `mydb`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`events`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`events` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `users_id` INT NOT NULL ,
  `groups_id` INT NOT NULL ,
  `is_completed` TINYINT(1) NULL DEFAULT FALSE ,
  `missions_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_events_users1` (`users_id` ASC) ,
  INDEX `fk_events_groups1` (`groups_id` ASC) ,
  INDEX `fk_events_missions1` (`missions_id` ASC) ,
  CONSTRAINT `fk_events_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `mydb`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_groups1`
    FOREIGN KEY (`groups_id` )
    REFERENCES `mydb`.`groups` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_missions1`
    FOREIGN KEY (`missions_id` )
    REFERENCES `mydb`.`missions` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
