<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation;

use Conversation\Character\Character;
use Conversation\Contract\BaseSource;
use Conversation\Character\CharacterInfo;

class Handler {

    protected $character;
    protected $currentDialog;
    protected $infos;

    public function init(Character $character) {
        $this->character = $character;

        $this->infos = new CharacterInfo($this->character);
    }

    public function getCharacterName(): string {
        return $this->character->getName();
    }

    public function changeDialog(int $id): bool {
        $this->currentDialog = $this->character->getDialogue($id);
        return true;
    }

    public function getDialogText(): string {
        $text = $this->currentDialog->getText();

        preg_match_all('~\$(.+?)(?:\s|$)~ims', $text, $elements);

        if (!empty($elements[1])) {

            foreach ($elements[1] as $element) {

                $var = $this->infos->get($element);

                if ($var !== "") {
                    $text = str_replace("$" . $element, $var, $text);
                }
            }
        }

        return $text;
    }

    public function getDialogAnswers(): array {
        $answ = $this->currentDialog->getAnswerOptions();

        return $answ;
    }

}
