<?php

use App\Conversations\SurveyConversation;
use App\Drivers\ATVoiceDriver;
use BotMan\BotMan\Drivers\DriverManager;

DriverManager::loadDriver(ATVoiceDriver::class);

// Botman commands for testing
$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('survey', function ($bot) {
    $bot->startConversation(new SurveyConversation());
});
