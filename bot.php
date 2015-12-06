<?php
use gries\Pokebot\Command\PokemathCommand;
use PhpSlackBot\Bot;

require_once __DIR__.'/vendor/autoload.php';

if (!isset($argv[1])) {
    echo "\nUsage: php bot.php \"token\"";
    exit;
}

$token = trim($argv[1]);

$bot = new Bot();
$bot->setToken($token);
$bot->loadCommand(new PokemathCommand());
$bot->run();