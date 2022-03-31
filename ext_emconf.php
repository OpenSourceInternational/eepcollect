<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Pagecollector',
    'description' => 'Visitors can collect pages and add them to their own favorit-list like a basket in a shop. Inclusiv delete and sort functions.',
    'category' => 'plugin',
    'state' => 'stable',
    'uploadfolder' => true,
    'createDirs' => 'uploads/tx_eepcollect',
    'clearCacheOnLoad' => 0,
    'author' => 'J.Kummer',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.9.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Jokumer\\Eepcollect\\' => 'Classes',
        ],
    ]
];
