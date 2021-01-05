<?php
namespace me\theshermantanker\tekbedrock;

use pocketmine\scheduler\Task;

final class TekTicker extends Task{
    
    public function onRun($currentTick){
        TekMain::$instance->update($currentTick);
    }
    
}

