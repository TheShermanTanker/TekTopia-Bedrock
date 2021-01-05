<?php

namespace me\theshermantanker\tekbedrock\town;

use pocketmine\level\Position;

final class PlayerBase{
    
    private $center;
    private $radius;
    private $components = [];
    private $destroyed = false;
    
    public function __construct(Position $center, int $radius = 30){
        $this->center = $center;
        $this->radius = $radius;
    }
    
    public function getCenter() : Position{
        return $this->center;
    }
    
    public function getRadius() : int{
        return $this->radius;
    }
    
    public function positionIsIn(Position $compare) : bool{
        $check = (pow($compare->getX() - $this->center->getX(), 2) + pow($compare->getZ() - $this->center->getZ(), 2) <= pow($this->radius, 2));
        return $check && ($compare->getLevel() == $this->center->getLevel());
    }
    
    public static $bases = [];
    
    public static function loadSaved(){
        $filepath = "phar://" . \Phar::running(false) . "save/bases.json";
        
    }
}

