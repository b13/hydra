<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Hydra',
    'description' => 'Allows adding response headers through site config.',
    'category' => 'fe',
    'author' => 'b13 GmbH',
    'author_email' => 'typo3@b13.com',
    'author_company' => 'b13 GmbH',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '2.0.0',
    'constraints' =>
        [
            'depends' => ['typo3' => '13.4.0-14.99.99'],
            'conflicts' => [],
            'suggests' => [],
        ],
];
