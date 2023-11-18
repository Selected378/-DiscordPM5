<?php

namespace discord\Commands;

use discord\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\player\Player;

class DiscordCommand extends Command {
    /** @noinspection PhpUnused */
    private $plugin;

    public function __construct(Main $plugin) {
        parent::__construct("discord", "avoir le ds", "/discord");
        $this->setPermission("discord.cmd");
        $this->plugin = $plugin;
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if ($sender instanceof Player) {
            $sender->sendMessage(Main::PREFIX . "Le discord du serveur est discord.gg/");
        } else {
            $sender->sendMessage(Main::PREFIX . "Vous devez etre un joueur pour éxécuter cette commande");
        }
        }
    }
