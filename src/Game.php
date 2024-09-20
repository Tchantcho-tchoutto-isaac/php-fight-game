<?php
namespace App;
use App\Logger;
use App\Battle;
class Game {
    private $player1;
    private $player2;
    private $battle;

    public function __construct($input) {
        $lines = explode("\n", trim($input));  
        list($name1, $health1, $attack1, $defense1) = explode(" ", $lines[0]);
        list($name2, $health2, $attack2, $defense2) = explode(" ", $lines[1]);

        $this->player1 = new Player($name1, (int)$health1, (int)$attack1, (int)$defense1);
        $this->player2 = new Player($name2, (int)$health2, (int)$attack2, (int)$defense2);

        $this->battle = new Battle($this->player1, $this->player2);
    }

    public function run() {
        while (!$this->battle->isGameOver()) {
            $this->battle->playTurn();
        }

  
        $winner = $this->battle->getWinner();
        if ($winner) {
            Logger::logWinner($winner);
        }
    }
}
