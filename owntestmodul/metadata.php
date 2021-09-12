<?php

$sMetadataVersion = '2.1';

$aModule = [
    'id'           => 'owntestmodul',
    'title'        => 'Testmodul',
    'version'      => '1.0.0',
    'author'       => 'stuck1a',
    'email'        => 'info@stuck1a.de',
    
    'extend'       => [  
      // Model
      \OxidEsales\Eshop\Application\Model\Article::class => own\owntestmodul\Application\Model\owntestmodul__oxarticle::class,
      \OxidEsales\Eshop\Application\Model\User\UserUpdatableFields::class => \OxidEsales\ExtendUser\UserUpdatableFields::class
    ],
    
    'controllers'  => [   
    ],

    'blocks' => array(
        // FrontEnd-Erweiterung: Feld "Zus. Info" bei User-Adressen
        array(
            'template' => 'form/fieldset/user_billing.tpl',
            'block'=>'form_user_billing_country',
            'file'=>'Application/views/user.tpl'
        ),
    ),
    
    'settings'     => [
      [
        'group' => 'owntestmodul_general',
        'name' => 'sSetting1',
        'type' => 'str',
        'value' => 'Bitte eingeben...'
      ],
      
      [
        'group' => 'owntestmodul_general',
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

own\Application\Model\User\UserUpdatableFields;
