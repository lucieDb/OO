<!--  créer une partie-un joueur-un véhicule -->
<?php 

require 'Player.php';
class Race{
    private $track;
    private $type;
    private $distance;
    private $lap = 5;
    private $weather;
    private $players = array();
    private $ranking = array();

    public function __construct($track, $type, $distance, $weather, $lap = null){
        $this->track = $track;
        $this->type = $type; 
        $this->weather = $weather;

        if ( is_int ($distance) && $distance > 100) {
            $this->distance = $distance;   
        }else {
            $this->distance = 100;
        }
       
        if( is_int( $lap ) && $lap > 0) {
            $this->lap = $lap;
        }
    }

    public function addPlayer( $player ){
        $this->players[] = $player;
    }
    
    public function start() {
        
    }

    public function getRanking() {
        return $this->ranking;
    }
}

$race = new Race($player1 , $player2);