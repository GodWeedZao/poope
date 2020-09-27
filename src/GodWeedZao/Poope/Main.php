<?php

declare(strict_types=1);

namespace GodWeedZao\Poope;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerToggleSneakEvent;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPoope(PlayerToggleSneakEvent $event) {
        $event->getPlayer()->getLevel()->dropItem($event->getPlayer()->getPosition()->asVector3(), Item::get(Item::BRICK));
    }
}
