

CREATE TABLE `portfolio`.`contacts` ( 
`id` INT NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(255) NOT NULL ,
 `lastname` VARCHAR(255) NOT NULL , 
`email` VARCHAR(255) NOT NULL , 
`description` VARCHAR(255) NOT NULL ,
 PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `portfolio`.`admin` ( 
`id` INT NOT NULL AUTO_INCREMENT ,
 `username` VARCHAR(255) NOT NULL ,
 `salt` VARCHAR(255) NOT NULL , 
`password` VARCHAR(255) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `admin` (`id`, `username`, `salt`, `password`)
 VALUES (NULL, 'admin', 'adminonly', '6f6bd606bb6163dd90c928aff35b09e17d05ce55');