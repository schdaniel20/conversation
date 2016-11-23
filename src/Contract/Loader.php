<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation\Contract;

use Conversation\Character\Character;

interface Loader {
    public function getCharacter(int $id) : Character;
    
    public function listCharachters() : \Generator;
}
