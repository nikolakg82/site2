CREATE TABLE `app_news_category` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`code`  varchar(255) NOT NULL ,
`category_id`  int(10) UNSIGNED NOT NULL ,
`picture`  varchar(255) NOT NULL ,
`date`  int(10) UNSIGNED NOT NULL ,
`pub_date`  int(10) UNSIGNED NOT NULL ,
`exp_date`  int(10) UNSIGNED NOT NULL ,
`ordinance`  int(10) UNSIGNED NOT NULL ,
`active`  enum('y','n') NOT NULL DEFAULT 'n' ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
ROW_FORMAT=COMPACT
;

CREATE TABLE `app_news_category_mlc` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`lang`  varchar(2) NOT NULL ,
`sid`  int(10) UNSIGNED NOT NULL ,
`path`  varchar(255) NOT NULL ,
`title`  mediumtext NOT NULL ,
`text`  mediumtext NOT NULL ,
`picture`  varchar(255) NOT NULL ,
PRIMARY KEY (`id`, `sid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
ROW_FORMAT=COMPACT
;

CREATE TABLE `app_news` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`code`  varchar(255) NOT NULL ,
`category_id`  int(10) UNSIGNED NOT NULL ,
`picture`  varchar(255) NOT NULL ,
`date`  int(10) UNSIGNED NOT NULL ,
`pub_date`  int(10) UNSIGNED NOT NULL ,
`exp_date`  int(10) UNSIGNED NOT NULL ,
`ordinance`  int(10) UNSIGNED NOT NULL ,
`active`  enum('y','n') NOT NULL DEFAULT 'n' ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
ROW_FORMAT=COMPACT
;

CREATE TABLE `app_news_mlc` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`lang`  varchar(2) NOT NULL ,
`sid`  int(10) UNSIGNED NOT NULL ,
`path`  varchar(255) NOT NULL ,
`title`  mediumtext NOT NULL ,
`text`  mediumtext NOT NULL ,
`picture`  varchar(255) NOT NULL ,
PRIMARY KEY (`id`, `sid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
ROW_FORMAT=COMPACT
;

CREATE TABLE `app_news_picture` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`sid`  int(10) UNSIGNED NOT NULL ,
`picture`  varchar(255) NOT NULL ,
`ordinance`  int(10) UNSIGNED NOT NULL ,
`active`  enum('y','n') NOT NULL DEFAULT 'n' ,
PRIMARY KEY (`id`, `sid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
ROW_FORMAT=COMPACT
;

CREATE TABLE `app_news_picture_mlc` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`lang`  varchar(2) NOT NULL ,
`sid`  int(10) UNSIGNED NOT NULL ,
`title`  mediumtext NOT NULL ,
`text`  mediumtext NOT NULL ,
PRIMARY KEY (`id`, `sid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
ROW_FORMAT=COMPACT
;

CREATE TABLE `app_config` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`name`  varchar(255) NOT NULL ,
`value`  varchar(255) NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
ROW_FORMAT=COMPACT
;

CREATE TABLE `app_config_mlc` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`lang`  varchar(2) NOT NULL ,
`sid`  int(10) UNSIGNED NOT NULL ,
`value`  varchar(255) NOT NULL ,
PRIMARY KEY (`id`, `sid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
;