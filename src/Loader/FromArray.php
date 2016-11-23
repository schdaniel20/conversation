<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Conversation\Loader;

use Conversation\Contract\Loader;
use Conversation\Character\Character;
use Conversation\Convert;
use Conversation\Container\DialogContainer;

class FromArray implements Loader {
    
    protected $characters = [
        1 => [
            'id' => 1,
            'name' => 'Character1',
            'dialogue' => [
                'source' => 'test.json',
                'default' => '1'
                ]
        ],
        2 => [
            'id' => 2,
            'name' => 'Character2',
            'dialogue' => [
                'source' => 'test.json',
                'default' => '1'
                ]
        ]
    ];


    public function getCharacter(int $id) : Character {
        
        if(!file_exists($this->characters[$id]['dialogue']['source'])) {
            throw new Exception('file not found');
        }
        
        $dialogs = file_get_contents($this->characters[$id]['dialogue']['source']);
        $dialogs = json_decode($dialogs, true);
        
        $dialogContainer = new DialogContainer();
        $dialogContainer->init($this->characters[$id]['dialogue']['default']);
        
        Convert::convert($dialogs, $dialogContainer);
        
        return new Character($this->characters[$id]['id'], $this->characters[$id]['name'], $dialogContainer);
    }
    
    public function listCharachters() : \Generator {
        
        foreach ($this->characters as $charcter) {
            yield [
                'id' => $charcter['id'],
                'name' => $charcter['name']
                ];
        }
    }
    
}