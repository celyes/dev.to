<?php 

class Pokemon {

    public $baseDamage;
    public $own;
    public $opponent;
    public $attack;
    public $defense;

    /**
     * constructor function 
     * 
     * @param int baseDamage
     * @param string own
     * @param string oponent
     * @param int attack 
     * @param int defense
     */
    public function __construct($baseDamage, $own, $opponent, $attack, $defense){
        $this->baseDamage = $baseDamage;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->own = $own;
        $this->opponent = $opponent;
    }

    /**
     * compareAttackTypes: compares attack types
     * @return int
     */
    public function compareAttackTypes ()
    {
        switch($this->own){
            case "fire":
                if($this->opponent == "grass"){ return 2; }
                if($this->opponent == "water"){ return 0.5; }
            case "grass":
                if($this->opponent == "fire"){ return 0.5; }
                if($this->opponent == "water"){ return 2; }
            case "electric":
                if($this->opponent == "water"){ return 2; }
            case "water":
                if($this->opponent == "fire"){ return 2; }
                if($this->opponent == "grass"){ return 0.5; }
            default:
                return 1;
        }
    }

    /**
     * calculateDamage: calculates actual damage
     * @return int
     */
    public function calculateDamage()
    {
        return $this->baseDamage * ($this->attack / $this->defense) * $this->compareAttackTypes();
    }
}

$pk = new Pokemon(50, "grass", "water", 40, 40); // result : 100
echo $pk->calculateDamage();