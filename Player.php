<?php

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

    public function drive(){
        if($this->vehicule->isStart()){
            $performance = $this->estimatePerformance();

            if($performance < 30) {
                $this->vehicule->decreaseSpeed();
            }else if($performance > 70) {
                $this->vehicule->increaseSpeed();
            }
        } else {
            $this->vehicule->start();
            $this->vehicule->increaseSpeed();
        }
        return $this->vehicule->getSpeed();
    }

    public function getIdentity(){
        return $this->username.'-'.$this->team;
    }

    private function estimatePerformance(){

        $limit = 100;
        $limit -= $this->care * 2;

        $performance = mt_rand(0, $limit);
        $performance += round( $this->level / 10 );

        return $performance;
    }
}
