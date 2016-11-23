<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation\Contract;

use Conversation\Character\Character;

interface BaseSource {
    
    public function init(Character $character);
    
    public function get($key) : string;
}