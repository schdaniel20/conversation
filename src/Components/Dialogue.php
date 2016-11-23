<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation\Components;

use Conversation\Components\AnswerOption;
use Conversation\Character\CharacterInfo;

class Dialogue {
    
    protected $id;
    protected $text;
    protected $answerOptions = [];

    public function __construct(int $id, string $text) {
        $this->id = $id;
        $this->text = $text;
    }
    
    public function addAnswerOption(AnswerOption $answerOption) {
        $this->answerOptions[] = $answerOption;
    }

    public function getText(): string {
        return $this->text;
    }

    public function getAnswerOptions(): array {
        return $this->answerOptions;
    }

}
