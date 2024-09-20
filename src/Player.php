<?php
namespace App;

class Player {
    private $name;
    private $health;
    private $attack;
    private $defense;

    public function __construct($name, $health, $attack, $defense) {
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
        $this->defense = $defense;
    }

 
    public function getName() {
        return $this->name;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getAttack() {
        return $this->attack;
    }

    public function getDefense() {
        return $this->defense;
    }

   
    public function takeDamage($damage) {
        $this->health -= $damage;
        if ($this->health < 0) {
            $this->health = 0;
        }
    }
}
