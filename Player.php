<?php

require 'Vehicule.php';

class Player{
    private $username;
    private $team;
    private $vehicule;
    private $level = 1;
    private $care;

    public function __construct( $username, $team, $vehicule, $level){
        $this->username = $username;
        $this->team = $team;
        $this->vehicule = $vehicule;
        
        if( is_int( $level ) && $level > 0 && $level < 100){
            $this->level = $level;
        }

        $this->care = mt_rand( 0, 5 );
    }

    public function getIdentity(){
        return $this->username.'-'.$this->team;
    }
}

$player1 = new Player( $car1 );

$player2 = new Player( $car2 );