<?php

 namespace MickrigeMaus\cmd;

 

 use pocketmine\event\Listener;

 use pocketmine\plugin\PluginBase;

 use pocketmine\command\Command;

 use pocketmine\command\CommandSender;

 use pocketmine\Player;

 class Main extends PluginBase implements Listener {

    public function onEnable()

    {

        $this->getLogger()->info("[cmd] Aktiviert.");

    }

    public $fts;

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool

    {

        $fts = "[CMD]";

        $this->fts = $fts;

        if ($cmd->getName() == "tag") {

            if ($sender instanceof Player) {

                if ($sender->hasPermission("time.command")) {

                    $sender->getLevel()->setTime(6000);

                    $sender->sendMessage("§b§lServer§r >> §6Du hast Tag gemacht");

                    return true;

                } else {

                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");

                    return true;

                }

            }

            return true;

        }

        if ($cmd->getName() == "nacht") {

            if ($sender instanceof Player) {

                if ($sender->hasPermission("time.command")) {

                    $sender->getLevel()->setTime(16000);

                    $sender->sendMessage("§b§lServer§r >> §6Du hast Nacht gemacht");

                    return true;

                } else {

                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");

                    return true;

                }

            }

            return true;

        }

        if ($cmd->getName() == "gm0") {

            if ($sender instanceof Player) {

                if ($sender->hasPermission("gamemode.command")) {

                    $sender->setGamemode(0);

                    $sender->sendMessage("§b§lServer§r >> §6Du bist nun im gm0");

                } else {

                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");

                }

            }

            return true;

        }

        if ($cmd->getName() == "gm1") {

            if ($sender instanceof Player) {

                if ($sender->hasPermission("gamemode.command")) {

                    $sender->setGamemode(1);

                    $sender->sendMessage("§b§lServer§r >> §6Du bist nun im gm1");

                } else {

                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");

                }

            }

            return true;

        }

        if ($cmd->getName() == "gm2") {

            if ($sender instanceof Player) {

                if ($sender->hasPermission("gamemode.command")) {

                    $sender->setGamemode(2);

                    $sender->sendMessage("§b§lServer§r >> §6Du bist nun im gm2");

                } else {

                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");

                }

            }

            return true;

		}        if ($cmd->getName() == "heal") {

            if ($sender instanceof Player) {

                if ($sender->hasPermission("heal.command")) {

                    $sender->setHealth(20);

                    $sender->sendMessage("§b§lServer§r >> §6Deine Herzen wurden gefüllt");

                } else {

                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");

                }

            }

            return true;

        }

        if ($cmd->getName() == "food") {

            if ($sender instanceof Player) {

                if ($sender->hasPermission("food.command")) {

                    $sender->setFood(20);

                    $sender->sendMessage("§b§lServer§r >> §6Deine Hungersleiste wurde gefüllt");

                } else {

                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");

                }

            }

            return true;

        }

        if ($cmd->getName() == "gm3") {

            if ($sender instanceof Player) {

                if ($sender->hasPermission("gamemode.command")) {

                    $sender->setGamemode(3);

                    $sender->sendMessage("§b§lServer§r >> §6Du bist nun im gm3");

                } else {

                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");

                }

            }

            return true;

         }

        return true;

        }

    }
