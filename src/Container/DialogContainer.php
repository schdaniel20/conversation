<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation\Container;

use Conversation\Components\Dialogue;

class DialogContainer {

    protected $dialogues;
    protected $default;


    public function init($default) {
        $this->default = $default;
    }

    public function set(int $id, Dialogue $dialogue) {
        $this->dialogues[$id] = $dialogue;
    }

    public function get(int $id) : Dialogue {
        return $this->dialogues[$id] ?? $this->dialogues[$this->default];//set default
    }

}
