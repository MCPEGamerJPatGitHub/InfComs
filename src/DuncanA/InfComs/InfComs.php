<?php

namespace DuncanA\InfComs;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server

class InfComs extends PluginBase{
   public function onEnable(){
      $this->getLogger()->info(TextFormat::BLUE . "InfComs enabled");
   }
   public function onDisable(){
      $this->getLogger()->info(TextFormat::RED . "InfComs disabled");
   }
   
   public function onCommand(CommandSender $sender, Command $command, $label, array $args){
      if(strtolower($command->getName()) === "info"){
         if($sender->hasPermission("infcoms.command.info")){
            $online = $this->getServer()->getOnlinePlayers();
            $sender->sendMessage("There are " .$online. " players online");
         }else{
            $sender->sendCommand("You don't have permission to do that!");
         }
      }elseif(strtolower($command->getName()) === "quit"){
         if($sender instanceof Player){
            if($sender->hasPermission("infcoms.command.quit")){
               $player->kick();
            }else{
               $sender->sendMessage("You don't have permission to do that!");
            }
         }else{
            $sender->sendMessage(TextFormat::RED . "Please run that command in-game");
         }
      }elseif(strtolower($command->getName()) === "inv(){
        //Stop using if, else and elseif so many times!!!
         if($sender->hasPermission("infocom.command.inv")
            $inv->getServer()->getPlayerInventory();
            $player->sendMessage("§6Your inventory has been checked by a member of staff.")
            $sender->sendMessage("§5You have completed your task. §dWell Done!")
             }else{
                   $sender->sendMessage("§1Command Error 503. §bYou do not have permission to use this command.")
                   //Color only works on PocketMine 1.5
                   }
         }else{
            $sender->sendMessage("§cPlease use this command in-game within 5 minutes or this server will self-destruct")

      }
}
