<?php

namespace Kits;

use pocketmine\plugin\PluginBase;
use pocketmine\item\item;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\inventory\InventoryBase;

class Main extends PluginBase{

 public function onEnable(){
  $this->getServer()->getLogger()->info("KitsMC has been enabled");
   }
   public function onDisable(){
    $this->getServer()->getLogger()->info("KitsMc has been disabled");
     }
     public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
      switch($cmd->getName()){
       case 'vip':
        $player->getInventory()->setHelmet(item::get(310, 0, 1));
        $player->getInventory()->setChestPlate(item::get(311, 0, 1));
        $player->getInventory()->setBoost(item::get(313, 0, 1));
        $player->getInventory()->setLeggings(item::get(312, 0, 1));
        $player->getInventory()->addItem(item::get(272, 0, 1));
        $player->getInventory()->addItem(item::get(322, 0, 15));
        $player->getInventory()->addItem(item::get(261, 0, 1));
        $player->getInventory()->addItem(item::get(262, 0, 15));
        $player->sendMessage("Done you get KIT vip");
        break;
      }
     }
    }
