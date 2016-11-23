<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation;

use Conversation\Components\AnswerOption;
use Conversation\Components\Dialogue;
use Conversation\Container\DialogContainer;

class Convert {
    
    public static function convert(array $dialogArray, DialogContainer &$dialogContainer) : DialogContainer {
        
        foreach($dialogArray as $dA) {
            $dialog = new Dialogue($dA['id'], $dA['text']);
            
            foreach ($dA['option'] as $option) {
                $answerOption = new AnswerOption($option['text'], $option['next']);
                $dialog->addAnswerOption($answerOption);
            }            
            $dialogContainer->set($dA['id'], $dialog);
        }
        
        return $dialogContainer;
    }
    
}