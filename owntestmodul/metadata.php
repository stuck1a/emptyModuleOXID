<?php

$sMetadataVersion = '2.1';

$aModule = [
    'id'           => 'owntestmodul',
    'title'        => 'Testmodul',
    
    'extend'       => [  
      // Model
      \OxidEsales\Eshop\Application\Model\Article::class => own\owntestmodul\Application\Model\owntestmodul__oxarticle::class
    ],
    
    'controllers'  => [   
    ],
    
    'blocks'       => [
    ],
    
    'settings'     => [
      [
        'group' => 'owntestmodul_general',
        'name' => 'sTestsetting1',
        'type' => 'str',
        'value' => 'Testvalue1'
      ],
      
      [
        'group' => 'owntestmodul_general',
        'name' => 'sTestsetting2',
        'type' => 'select',
        'value' => 'download',
        'constraints' => 'download|inline'
      ]
    ],
    
    'templates'    => [
    // tpl files
    ]
];