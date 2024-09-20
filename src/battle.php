<?php
namespace App;

class Battle {
    private $player1;
    private $player2;

    public function __construct($player1, $player2) {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }


    public function playTurn() {

        $damageToPlayer2 = max(0, $this->player1->getAttack() - $this->player2->getDefense());
        $this->player2->takeDamage($damageToPlayer2);

        if ($this->isGameOver()) {
            return;
        }


        $damageToPlayer1 = max(0, $this->player2->getAttack() - $this->player1->getDefense());
        $this->player1->takeDamage($damageToPlayer1);

        Logger::log($this->player1->getHealth(), $this->player2->getHealth());
    }

   
    public function isGameOver() {
        return $this->player1->getHealth() <= 0 || $this->player2->getHealth() <= 0;
    }

    
    public function getWinner() {
        if ($this->player1->getHealth() > 0) {
            return $this->player1;
        } elseif ($this->player2->getHealth() > 0) {
            return $this->player2;
        }
        return null; 
    }
}
