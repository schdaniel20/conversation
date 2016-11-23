<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation\Character;

use Conversation\Contract\BaseSource;
use Conversation\Character\Character;

class CharacterInfo implements BaseSource {
    
    protected $source = [
        'name' => 'MyName'
    ];


    public function init(Character $character) {
        
    }
    
    public function get($key) : string {
        
        return $this->source[$key] ?? "";
    }
    
}