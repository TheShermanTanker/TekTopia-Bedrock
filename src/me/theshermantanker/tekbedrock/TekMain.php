<?php
namespace me\theshermantanker\tekbedrock;

use pocketmine\plugin\PluginBase;
use me\theshermantanker\tekbedrock\events\TekListener;

final class TekMain extends PluginBase {
    
    public static $instance = null;
    
    public function onLoad(){
        $this->start();
    }
    
    public function onEnable(){
        $this->enabled();
    }
    
    public function onDisable(){
        $this->disabled();
    }
    
    private function start(){
        TekMain::$instance = $this;
        $this->getServer()->getPluginManager()->registerEvents(new TekListener(), $this);
        $this->getScheduler()->scheduleRepeatingTask(new TekTicker(), 1);
    }
    
    private function enabled(){
        
    }
    
    private function disabled(){
        
    }
    
    public function update($currentTick){
        
    }
}

