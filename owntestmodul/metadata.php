<?php

$sMetadataVersion = '2.1';

$aModule = [
    'id'           => 's1atestmodul',
    'title'        => 'Stuck1a\s Testmodul',
    'version'      => '1.0.0',
    'author'       => 'stuck1a',
    'email'        => 'info@stuck1a.de',
    
    'extend'       => [  
      // Model
      \OxidEsales\Eshop\Application\Model\Article::class => s1a\s1atestmodul\Application\models\s1atestmodul__oxarticle::class
    ],
    
    'controllers'  => [
      // controller files
    ],
    
    'blocks' => [
      // block files
    ]
    
    'settings'     => [
      [
        'group' => 's1atestmodul_general',
        'name' => 'sSetting1',
        'type' => 'str',
        'value' => 'Bitte eingeben...'
      ],
      
      [
        'group' => 's1atestmodul_general',
        'name' => 'sSetting2',
        'type' => 'select',
        'value' => 'sChoice2',
        'constraints' => 'sChoice1|sChoice2'
      ]
    ],
    
    'templates'    => [
    // tpl files
    ]
];
