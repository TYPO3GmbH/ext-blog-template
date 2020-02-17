<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Blog Template Extension',
    'description' => 'Blogging with TYPO3',
    'category' => 'fe',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 GmbH',
    'author_email' => 'info@typo3.com',
    'version' => '1.2.2',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.99.99',
            'blog' => '',
            'rx_shariff' => '7.3.1',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
