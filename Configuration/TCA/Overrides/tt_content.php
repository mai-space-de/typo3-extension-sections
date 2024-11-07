<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'section-1col',
            'Einfache Section',
            'Eine einfache Section mit nur einer Spalte',
            [
                [
                    ['name' => 'Inhalt', 'colPos' => 101],
                ]
            ]
        )
    ),
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'section-2cols',
            'Zwei Spalten Section',
            'Eine Section mit zwei Spalten',
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 101],
                    ['name' => 'Rechte Spalte', 'colPos' => 102]
                ]
            ]
        )
    ),
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'section-3cols',
            'Drei Spalten Section',
            'Eine Section mit drei Spalten',
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 101],
                    ['name' => 'Mittlere Spalte', 'colPos' => 102],
                    ['name' => 'Rechte Spalte', 'colPos' => 103]
                ]
            ]
        )
    ),
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'section-66-33',
            '66/33 Section',
            'Eine Section mit zwei Spalten',
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 101],
                    ['name' => 'Rechte Spalte', 'colPos' => 102]
                ]
            ]
        )
    ),
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'section-33-66',
            '33/66 Section',
            'Eine Section mit zwei Spalten',
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 102],
                    ['name' => 'Rechte Spalte', 'colPos' => 101]
                ]
            ]
        )
    ),
);
