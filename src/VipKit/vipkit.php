<?php

namespace VipKit;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\inventory\InventoryBase;
use pocketmine\item\Item;
use pocketmine\level\sound\AnvilUseSound;
use pocketmine\utils\TextFormat as Color;
use pocketmine\permission\Permission;

class vipkit extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."[VipKit] Plugin has been Enabled");
  }
  
    public function onDisable(){
    $this->getServer()->getLogger()->info(Color::RED."[VipKit] Plugin has been Disabled");
  }
  
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){ /* Switch == Case || $cmd->getName() == Command */
			case 'kitvip':
				if($sender->hasPermission("vipkit.kitvip")){
					$sender->getInventory()->clearAll();
					$sender->sendMessage(Color::GREEN."You Have A VIP Kit");
					$sender->getInventory()->addItem(item::get(276, 0, 1));
					$sender->getInventory()->addItem(item::get(364, 0, 64));
					$sender->getInventory()->setHelmet(item::get(310, 0, 1));
					$sender->getInventory()->setChestplate(item::get(311, 0, 1));
					$sender->getInventory()->setLeggings(item::get(312, 0, 1));
					$sender->getInventory()->setBoots(item::get(313, 0, 1));
					
				} else {
					
					$sender->sendMessage(Color::RED."You Not VIP");
				}
			
		}
 }

}
