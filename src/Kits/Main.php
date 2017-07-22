<?php

namespace Kits;

use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\inventory\InventoryBase;
use pocketmine\player;

 class Main extends PluginBase{

 public function onEnable(){
  $this->getServer()->getLogger()->info("KitsMC has been enabled");
   }
   public function onDisable(){
    $this->getServer()->getLogger()->info("KitsMc has been disabled");
     }
     public function onCommand(CommandSender $sender, Command $cmd, $lable, array $args){
      switch($cmd->getName()){
       case vip:
        $player->getInventory()->setHelmet(Item::get(310, 0, 1));
        $player->getInventory()->setChestPlate(Item::get(311, 0, 1));
        $player->getInventory()->setBoost(Item::get(313, 0, 1));
        $player->getInventory()->setLeggings(Item::get(312, 0, 1));
        $player->getInventory()->addItem(Item::get(272, 0, 1));
        $player->getInventory()->addItem(Item::get(322, 0, 15));
        $player->getInventory()->addItem(Item::get(261, 0, 1));
        $player->getInventory()->addItem(Item::get(262, 0, 15));
        $player->sendMessage("Done you get KIT vip");
        break;
      }
     }
    }
