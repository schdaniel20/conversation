<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation\Character;

use Conversation\Container\DialogContainer;

class Character {

    protected $id;
    protected $name;
    protected $dialogueContainer;

    public function __construct(int $id, string $name, DialogContainer $dialogueContainer) {
        $this->id = $id;
        $this->name = $name;
        $this->dialogueContainer = $dialogueContainer;
    }

    public function getName() {
        return $this->name;
    }

    public function getDialogue(int $id) {
        return $this->dialogueContainer->get($id);
    }

}
