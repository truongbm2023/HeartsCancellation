<?php
/**
 * Note: If your game has no variant, you don't have to modify this file.
 *
 * Note²: All options defined in this file should have a corresponding "game state labels"
 *        with the same ID (see "initGameStateLabels" in emptygame.game.php)
 *
 * !! It is not a good idea to modify this file when a game is running !!
 *
 */

$game_options = array(

		100 => array(
				'name' => totranslate('Game length'),
				'values' => array(
						1 => array( 'name' => totranslate( 'Standard game (100 points)' ) ),
						2 => array( 'name' => totranslate( 'Long game (200 points)' ) ),
				),
				'default' => 1
		)

);


