<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or exit('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'base',
    'setup',
    "@import 'EXT:sections/Configuration/TypoScript/setup.typoscript'"
);
