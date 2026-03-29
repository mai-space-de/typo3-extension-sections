<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Mai Sections',
    'description' => 'Section/container management for building page layouts. Uses `b13/container` (consistent with `mai_bentobox`), `ichhabrecht/content-defender` to restrict allowed content types per column, and `sebkln/content-slug` to provide slug-based in-page anchor IDs on content elements.',
    'category' => 'module',
    'author' => 'Maispace',
    'author_email' => '',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
