<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation\Components;

class AnswerOption {

    protected $text;
    protected $next;

    public function __construct(string $text, int $next) {
        $this->text = $text;
        $this->next = $next;
    }

    public function getText(): string {
        return $this->text;
    }

    public function getNext(): int {
        return $this->next;
    }

}
