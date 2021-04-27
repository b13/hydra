<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Hydra',
    'description' => 'Allows adding response headers through site config.',
    'category' => 'fe',
    'author' => 'b13 GmbH',
    'author_email' => 'typo3@b13.com',
    'author_company' => 'b13 GmbH',
    'state' => 'stable',
    'uploadfolder' => false,
    'clearCacheOnLoad' => true,
    'version' => '1.1.0',
    'constraints' =>
        [
            'depends' => ['typo3' => '10.4.0-11.4.99'],
            'conflicts' => [],
            'suggests' => [],
        ],
];
