<?php

namespace discord;

use discord\Commands\DiscordCommand;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginDescription;
use pocketmine\plugin\PluginLoader;
use pocketmine\plugin\ResourceProvider;
use pocketmine\Server;

class Main extends PluginBase {
    const PREFIX = "§9Serveur §f>> ";

    public function onEnable(): void {
        $this->getLogger()->info("Le plugin de /discord vient de se charger");
        $this->getServer()->getCommandMap()->register("discord", new DiscordCommand($this));
    }

    public function onDisable(): void {
        $this->getLogger()->info("Le plugin de /discord vient de se décharger");
    }


}