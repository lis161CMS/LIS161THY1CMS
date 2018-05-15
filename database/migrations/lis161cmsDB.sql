-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lis161CMS
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lis161CMS
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lis161CMS` DEFAULT CHARACTER SET utf8 ;
USE `lis161CMS` ;

-- -----------------------------------------------------
-- Table `lis161CMS`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lis161CMS`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(255) NOT NULL,
  `roleShortName` VARCHAR(45) NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lis161CMS`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lis161CMS`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstName` VARCHAR(255) NULL,
  `middleName` VARCHAR(255) NULL,
  `lastName` VARCHAR(255) NULL,
  `email` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `role_id` INT NOT NULL,
  `userPhoto` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_roles_idx` (`role_id` ASC),
  CONSTRAINT `fk_users_roles`
    FOREIGN KEY (`role_id`)
    REFERENCES `lis161CMS`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lis161CMS`.`navigationTypes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lis161CMS`.`navigationTypes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `navigationType` VARCHAR(255) NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_navigationTypes_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_navigationTypes_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `lis161CMS`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lis161CMS`.`navigations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lis161CMS`.`navigations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `navigationName` VARCHAR(45) NOT NULL,
  `navigationLink` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `role_id` INT NOT NULL,
  `navigationType_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_navigations_roles1_idx` (`role_id` ASC),
  INDEX `fk_navigations_navigationTypes1_idx` (`navigationType_id` ASC),
  INDEX `fk_navigations_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_navigations_roles1`
    FOREIGN KEY (`role_id`)
    REFERENCES `lis161CMS`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_navigations_navigationTypes1`
    FOREIGN KEY (`navigationType_id`)
    REFERENCES `lis161CMS`.`navigationTypes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_navigations_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `lis161CMS`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lis161CMS`.`contentTypes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lis161CMS`.`contentTypes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contentType` VARCHAR(255) NOT NULL,
  `contentTypeDesc` TEXT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_contentTypes_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_contentTypes_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `lis161CMS`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lis161CMS`.`contents`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lis161CMS`.`contents` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contentTitle` TEXT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `contentType_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_content_contentTypes1_idx` (`contentType_id` ASC),
  INDEX `fk_content_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_content_contentTypes1`
    FOREIGN KEY (`contentType_id`)
    REFERENCES `lis161CMS`.`contentTypes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_content_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `lis161CMS`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lis161CMS`.`revisions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lis161CMS`.`revisions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `content` TEXT NOT NULL,
  `revisionNo` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `created_at_copy1` TIMESTAMP NULL DEFAULT NULL,
  `updated_at_copy1` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at_copy1` TIMESTAMP NULL DEFAULT NULL,
  `imageLink` VARCHAR(255) NULL,
  `content_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_revisions_contents1_idx` (`content_id` ASC),
  INDEX `fk_revisions_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_revisions_contents1`
    FOREIGN KEY (`content_id`)
    REFERENCES `lis161CMS`.`contents` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_revisions_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `lis161CMS`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lis161CMS`.`navigationcontents`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lis161CMS`.`navigationcontents` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `navigation_id` INT NOT NULL,
  `content_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_navigationcontents_navigations1_idx` (`navigation_id` ASC),
  INDEX `fk_navigationcontents_contents1_idx` (`content_id` ASC),
  CONSTRAINT `fk_navigationcontents_navigations1`
    FOREIGN KEY (`navigation_id`)
    REFERENCES `lis161CMS`.`navigations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_navigationcontents_contents1`
    FOREIGN KEY (`content_id`)
    REFERENCES `lis161CMS`.`contents` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lis161CMS`.`permissions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lis161CMS`.`permissions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `permission` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `role_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_permissions_roles1_idx` (`role_id` ASC),
  CONSTRAINT `fk_permissions_roles1`
    FOREIGN KEY (`role_id`)
    REFERENCES `lis161CMS`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
