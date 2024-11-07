<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Sections',
    'description' => 'Provides a simple way to create sections for your website.',
    'version' => '12.0.0',
    'state' => 'stable',
    'category' => 'templates',
    'author' => 'Joel Maximilian Mai',
    'author_email' => 'joel@maispace.de',
    'author_company' => 'Maispace',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'container' => '2.3.0-2.3.99',
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'autoload' => [
        'psr-4' => [
            'Maispace\\Sections\\' => 'Classes',
        ],
    ],
];
