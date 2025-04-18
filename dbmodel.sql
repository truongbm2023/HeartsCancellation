

-- Example 1: create a standard "card" table to be used with the "Deck" tools (see example game "hearts"):


-- add info about first player
ALTER TABLE `player` ADD `player_first` BOOLEAN NOT NULL DEFAULT '0';


CREATE TABLE IF NOT EXISTS `card` (
  `card_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `card_type` varchar(16) NOT NULL,
  `card_type_arg` int(11) NOT NULL,
  `card_location` varchar(16) NOT NULL,
  `card_location_arg` int(11) NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


