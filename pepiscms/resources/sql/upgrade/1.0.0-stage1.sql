ALTER TABLE `cms_logs` CHANGE COLUMN `message` `message` VARCHAR(2048) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT '' ;

CREATE TABLE IF NOT EXISTS `cms_password_history` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL REFERENCES `cms_users` (`user_id` ),
  `changed_datetime` DATETIME NOT NULL COMMENT 'UTC timestamp',
  `password_encoded` VARCHAR(128) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `hashing_salt` VARCHAR(64) NOT NULL DEFAULT '',
  `hashing_algorithm` VARCHAR(6) NOT NULL DEFAULT 'md5',
  `hashing_iterations` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX (`user_id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

DROP TABLE IF EXISTS remote_applications;
DROP TABLE IF EXISTS cms_remote_applications;

CREATE TABLE IF NOT EXISTS `cms_siteconfig` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(512) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `value` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `is_boolean` TINYINT NOT NULL DEFAULT '0' COMMENT '1 - TRUE, 0 - FALSE' ,
  `is_serialized` TINYINT NOT NULL DEFAULT '0' COMMENT '1 - TRUE, 0 - FALSE' ,
  `module` VARCHAR(32) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `created_datetime` DATETIME NOT NULL COMMENT 'UTC timestamp',
  `updated_datetime` DATETIME NOT NULL COMMENT 'UTC timestamp',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;