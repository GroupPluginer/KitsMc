<?php

namespace Kits;

use pocketmine\plugin\PluginBase;
use pocketmine\item\item
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\text\TextFormat as Color;
use pocketmine\inventory\InventoryBase;

class Main extends PluginBase{

 public function onEnable(){
  $this->getServer()->getLogger()->info(Color::GREEN."KitsMc has been enabled");
   }
   public function onDisable(){
    $this->getServer()->getLogger()->info(Color::RED."KitsMc has been disabled");
     }
     public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
      switch($cmd->getName()(({
       case 'vip':
        $player->getInventory()->setHelmet(item::get(310, 0, 1));
        $player->getInventory()->setChestPlate(item::get(311));
        
