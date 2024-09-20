<?php
namespace App;

class Logger {
    private static $round = 1;

    public static function log($player1Health, $player2Health) {
      
        echo "" .  $player1Health . " " . $player2Health . PHP_EOL;
        self::$round++;
    }

    public static function logWinner(Player $winner) {
        // Afficher le gagnant
        echo $winner->getName() . " " . $winner->getHealth() . PHP_EOL;
    }
}


