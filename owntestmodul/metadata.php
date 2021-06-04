<?php

$sMetadataVersion = '2.1';

$aModule = array (
    'id'           => 'owntestmodul',
    
    'title'        => array (
      'de'            => 'Testmodul',
      'en'            => 'Testmodule'
    ),
    
    'description'  => array (
      'de'            => 'Beschreibungstext',
      'en'            => 'Descriptionstext'
    ),
    
    'extend'       => array (  
      // Model
      \OxidEsales\Eshop\Application\Model\Article::class => own\owntestmodul\Application\Model\owntestmodul__oxarticle::class
    ),
    
    'controllers'  => array (
      // controller definitions
    ),
    
    'blocks'       => array (
      // block definitions
    ),
    
    'settings'     => array (
      array (
        'group'       => 'owntestmodul_general',
        'name'        => 'sTestsetting1',
        'type'        => 'str',
        'value'       => 'Testvalue1'
      ),
      
      array (
        'group'       => 'owntestmodul_general',
        'name'        => 'sTestsetting2',
        'type'        => 'select',
        'value'       => 'download',
        'constraints' => 'download|inline'
      )
    ),
    
    'templates'    => array (
      // tpl files
    )
);