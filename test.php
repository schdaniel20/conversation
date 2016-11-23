<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "vendor/autoload.php";

use Conversation\Convert;
use Conversation\Loader\FromArray;
use Conversation\Handler;

$a = new FromArray();

foreach ($a->listCharachters() as $character) {
    echo $character['id'], " - ", $character['name'], PHP_EOL;
}

$current = $a->getCharacter(1);

$nr = 1;

$handle = fopen("php://stdin", "r");

$dialogHandler = new Handler();

$dialogHandler->init($current);

while (1) {

    $dialogHandler->changeDialog($nr);
    ECHO "------------------------", PHP_EOL;
    echo $dialogHandler->getCharacterName(), ": ", $dialogHandler->getDialogText(), PHP_EOL;
    ECHO "------------------------", PHP_EOL;

    $answers = $dialogHandler->getDialogAnswers();

    if (empty($answers)) {
        break;
    }

    for ($i = 0; $i < count($answers); $i++) {
        echo $i, "-", $answers[$i]->getText(), PHP_EOL;
    }

    $answerNr = trim(fgets($handle));

    echo "Me: ", $answers[$answerNr]->getText(), PHP_EOL;

    $nr = $answers[$answerNr]->getNext();
}
fclose($handle);



