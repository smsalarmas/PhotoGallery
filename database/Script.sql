CREATE TABLE img_gallery (
  `idimg_gallery` INT NOT NULL AUTO_INCREMENT,
  `name_key` VARCHAR(160) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `text_short` VARCHAR(300) NULL,
  `text_title` VARCHAR(80) NULL,
  `text_category` VARCHAR(45) NULL,
  PRIMARY KEY (`idimg_gallery`));

ADD INDEX `name_key` (`name_key` ASC);