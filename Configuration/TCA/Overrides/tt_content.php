<?php

declare(strict_types=1);

// Containers are registered via b13/container's ContainerConfiguration API, which handles
// CType registration, column slot definitions, and TCA integration in one step.
// The CType helper from mai_base is designed for regular (non-container) content types
// and is not applicable here. The custom palettes below are appended to the b13-generated
// showitem string after each container is registered.

use B13\Container\Tca\ContainerConfiguration;
use B13\Container\Tca\Registry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$lang = static function (string $key): string {
    return 'LLL:EXT:mai_sections/Resources/Private/Language/Default/locallang_tca.xlf:' . $key;
};

$registry = GeneralUtility::makeInstance(Registry::class);

// =============================================================================
// Container registrations (b13/container)
// =============================================================================

// 1col — Single Column
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-1col',
        'Section: 1 Spalte',
        'Eine Section mit einer Spalte (100 %)',
        [
            [
                ['name' => 'Inhalt', 'colPos' => 101],
            ],
        ]
    ))->setIcon('content-container-columns-1')
);

// 2col-50-50 — Two Equal Columns
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-2col-50-50',
        'Section: 50 / 50',
        'Zwei gleichbreite Spalten (50 % / 50 %)',
        [
            [
                ['name' => 'Linke Spalte', 'colPos' => 101],
                ['name' => 'Rechte Spalte', 'colPos' => 102],
            ],
        ]
    ))->setIcon('content-container-columns-2')
);

// 2col-33-66 — Narrow left + wide right
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-2col-33-66',
        'Section: 33 / 66',
        'Schmale linke + breite rechte Spalte (33 % / 66 %)',
        [
            [
                ['name' => 'Schmale Spalte', 'colPos' => 101],
                ['name' => 'Breite Spalte', 'colPos' => 102],
            ],
        ]
    ))->setIcon('content-container-columns-2')
);

// 2col-66-33 — Wide left + narrow right
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-2col-66-33',
        'Section: 66 / 33',
        'Breite linke + schmale rechte Spalte (66 % / 33 %)',
        [
            [
                ['name' => 'Breite Spalte', 'colPos' => 101],
                ['name' => 'Schmale Spalte', 'colPos' => 102],
            ],
        ]
    ))->setIcon('content-container-columns-2')
);

// 2col-25-75 — Narrow left + wide right
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-2col-25-75',
        'Section: 25 / 75',
        'Sehr schmale linke + sehr breite rechte Spalte (25 % / 75 %)',
        [
            [
                ['name' => 'Schmale Spalte', 'colPos' => 101],
                ['name' => 'Breite Spalte', 'colPos' => 102],
            ],
        ]
    ))->setIcon('content-container-columns-2')
);

// 2col-75-25 — Wide left + narrow right
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-2col-75-25',
        'Section: 75 / 25',
        'Sehr breite linke + sehr schmale rechte Spalte (75 % / 25 %)',
        [
            [
                ['name' => 'Breite Spalte', 'colPos' => 101],
                ['name' => 'Schmale Spalte', 'colPos' => 102],
            ],
        ]
    ))->setIcon('content-container-columns-2')
);

// 3col — Three Equal Columns
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-3col',
        'Section: 3 Spalten',
        'Drei gleichbreite Spalten (33 % / 33 % / 33 %)',
        [
            [
                ['name' => 'Linke Spalte', 'colPos' => 101],
                ['name' => 'Mittlere Spalte', 'colPos' => 102],
                ['name' => 'Rechte Spalte', 'colPos' => 103],
            ],
        ]
    ))->setIcon('content-container-columns-3')
);

// 4col — Four Equal Columns
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-4col',
        'Section: 4 Spalten',
        'Vier gleichbreite Spalten (25 % / 25 % / 25 % / 25 %)',
        [
            [
                ['name' => 'Spalte 1', 'colPos' => 101],
                ['name' => 'Spalte 2', 'colPos' => 102],
                ['name' => 'Spalte 3', 'colPos' => 103],
                ['name' => 'Spalte 4', 'colPos' => 104],
            ],
        ]
    ))->setIcon('content-container-columns-3')
);

// grid-auto — Responsive Auto Grid
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-grid-auto',
        'Section: Auto-Grid',
        'Responsives Raster mit automatischer Spaltenanzahl (CSS auto-fill)',
        [
            [
                ['name' => 'Inhalt', 'colPos' => 101],
            ],
        ]
    ))->setIcon('content-container-columns-3')
);

// fullwidth — Full Width Section
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-fullwidth',
        'Section: Volle Breite',
        'Brechen Sie aus dem Layout-Container aus — volle Viewport-Breite',
        [
            [
                ['name' => 'Inhalt', 'colPos' => 101],
            ],
        ]
    ))->setIcon('content-container-columns-1')
);

// contained — Centered Narrow Content
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-contained',
        'Section: Zentriert (schmal)',
        'Zentrierter Inhaltsbereich mit reduzierter maximaler Breite (Lesebreite)',
        [
            [
                ['name' => 'Inhalt', 'colPos' => 101],
            ],
        ]
    ))->setIcon('content-container-columns-1')
);

// split-screen — 50/50 Full-Viewport-Height Split
$registry->configureContainer(
    (new ContainerConfiguration(
        'section-split-screen',
        'Section: Split Screen',
        'Zwei Hälften in voller Viewport-Höhe (z. B. Bild + CTA)',
        [
            [
                ['name' => 'Linke Hälfte', 'colPos' => 101],
                ['name' => 'Rechte Hälfte', 'colPos' => 102],
            ],
        ]
    ))->setIcon('content-container-columns-2')
);

// =============================================================================
// Custom columns added to tt_content
// =============================================================================
ExtensionManagementUtility::addTCAcolumns('tt_content', [

    // -------------------------------------------------------------------------
    // Appearance — Background
    // -------------------------------------------------------------------------
    'tx_maisections_background_color' => [
        'label' => $lang('tt_content.tx_maisections_background_color'),
        'config' => ['type' => 'color'],
    ],
    'tx_maisections_background_image' => [
        'label' => $lang('tt_content.tx_maisections_background_image'),
        'config' => [
            'type' => 'file',
            'allowed' => 'common-image-types',
            'maxitems' => 1,
        ],
    ],
    'tx_maisections_background_position' => [
        'label' => $lang('tt_content.tx_maisections_background_position'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maisections_background_position.center'), 'value' => 'center center'],
                ['label' => $lang('tt_content.tx_maisections_background_position.top'), 'value' => 'center top'],
                ['label' => $lang('tt_content.tx_maisections_background_position.bottom'), 'value' => 'center bottom'],
                ['label' => $lang('tt_content.tx_maisections_background_position.left'), 'value' => 'left center'],
                ['label' => $lang('tt_content.tx_maisections_background_position.right'), 'value' => 'right center'],
            ],
            'default' => 'center center',
        ],
    ],
    'tx_maisections_background_size' => [
        'label' => $lang('tt_content.tx_maisections_background_size'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maisections_background_size.cover'), 'value' => 'cover'],
                ['label' => $lang('tt_content.tx_maisections_background_size.contain'), 'value' => 'contain'],
                ['label' => $lang('tt_content.tx_maisections_background_size.auto'), 'value' => 'auto'],
            ],
            'default' => 'cover',
        ],
    ],
    'tx_maisections_background_attachment' => [
        'label' => $lang('tt_content.tx_maisections_background_attachment'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maisections_background_attachment.scroll'), 'value' => 'scroll'],
                ['label' => $lang('tt_content.tx_maisections_background_attachment.fixed'), 'value' => 'fixed'],
            ],
            'default' => 'scroll',
        ],
    ],

    // -------------------------------------------------------------------------
    // Appearance — Overlay
    // -------------------------------------------------------------------------
    'tx_maisections_overlay_color' => [
        'label' => $lang('tt_content.tx_maisections_overlay_color'),
        'config' => ['type' => 'color'],
    ],
    'tx_maisections_overlay_opacity' => [
        'label' => $lang('tt_content.tx_maisections_overlay_opacity'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => '0 %', 'value' => '0'],
                ['label' => '10 %', 'value' => '10'],
                ['label' => '20 %', 'value' => '20'],
                ['label' => '30 %', 'value' => '30'],
                ['label' => '40 %', 'value' => '40'],
                ['label' => '50 %', 'value' => '50'],
                ['label' => '60 %', 'value' => '60'],
                ['label' => '70 %', 'value' => '70'],
                ['label' => '80 %', 'value' => '80'],
                ['label' => '90 %', 'value' => '90'],
                ['label' => '100 %', 'value' => '100'],
            ],
            'default' => '50',
        ],
    ],

    // -------------------------------------------------------------------------
    // Spacing
    // -------------------------------------------------------------------------
    'tx_maisections_padding_top' => [
        'label' => $lang('tt_content.tx_maisections_padding_top'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.spacing.none'), 'value' => 'none'],
                ['label' => $lang('tt_content.spacing.s'), 'value' => 's'],
                ['label' => $lang('tt_content.spacing.m'), 'value' => 'm'],
                ['label' => $lang('tt_content.spacing.l'), 'value' => 'l'],
                ['label' => $lang('tt_content.spacing.xl'), 'value' => 'xl'],
            ],
            'default' => 'm',
        ],
    ],
    'tx_maisections_padding_bottom' => [
        'label' => $lang('tt_content.tx_maisections_padding_bottom'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.spacing.none'), 'value' => 'none'],
                ['label' => $lang('tt_content.spacing.s'), 'value' => 's'],
                ['label' => $lang('tt_content.spacing.m'), 'value' => 'm'],
                ['label' => $lang('tt_content.spacing.l'), 'value' => 'l'],
                ['label' => $lang('tt_content.spacing.xl'), 'value' => 'xl'],
            ],
            'default' => 'm',
        ],
    ],

    // -------------------------------------------------------------------------
    // Layout
    // -------------------------------------------------------------------------
    'tx_maisections_content_width' => [
        'label' => $lang('tt_content.tx_maisections_content_width'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maisections_content_width.contained'), 'value' => 'contained'],
                ['label' => $lang('tt_content.tx_maisections_content_width.full'), 'value' => 'full'],
                ['label' => $lang('tt_content.tx_maisections_content_width.narrow'), 'value' => 'narrow'],
            ],
            'default' => 'contained',
        ],
    ],
    'tx_maisections_vertical_align' => [
        'label' => $lang('tt_content.tx_maisections_vertical_align'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maisections_vertical_align.top'), 'value' => 'top'],
                ['label' => $lang('tt_content.tx_maisections_vertical_align.center'), 'value' => 'center'],
                ['label' => $lang('tt_content.tx_maisections_vertical_align.bottom'), 'value' => 'bottom'],
            ],
            'default' => 'top',
        ],
    ],

    // -------------------------------------------------------------------------
    // Column Behavior (multi-column layouts)
    // -------------------------------------------------------------------------
    'tx_maisections_column_gap' => [
        'label' => $lang('tt_content.tx_maisections_column_gap'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.spacing.none'), 'value' => 'none'],
                ['label' => $lang('tt_content.spacing.s'), 'value' => 's'],
                ['label' => $lang('tt_content.spacing.m'), 'value' => 'm'],
                ['label' => $lang('tt_content.spacing.l'), 'value' => 'l'],
            ],
            'default' => 'm',
        ],
    ],
    'tx_maisections_stack_mobile' => [
        'label' => $lang('tt_content.tx_maisections_stack_mobile'),
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
        ],
    ],
    'tx_maisections_reverse_mobile' => [
        'label' => $lang('tt_content.tx_maisections_reverse_mobile'),
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
        ],
    ],

    // -------------------------------------------------------------------------
    // Effects
    // -------------------------------------------------------------------------
    'tx_maisections_animation_type' => [
        'label' => $lang('tt_content.tx_maisections_animation_type'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maisections_animation_type.none'), 'value' => ''],
                ['label' => $lang('tt_content.tx_maisections_animation_type.fade-in'), 'value' => 'fade-in'],
                ['label' => $lang('tt_content.tx_maisections_animation_type.slide-up'), 'value' => 'slide-up'],
                ['label' => $lang('tt_content.tx_maisections_animation_type.slide-left'), 'value' => 'slide-left'],
                ['label' => $lang('tt_content.tx_maisections_animation_type.slide-right'), 'value' => 'slide-right'],
            ],
            'default' => '',
        ],
    ],

    // -------------------------------------------------------------------------
    // Navigation
    // -------------------------------------------------------------------------
    'tx_maisections_anchor_id' => [
        'label' => $lang('tt_content.tx_maisections_anchor_id'),
        'description' => $lang('tt_content.tx_maisections_anchor_id.description'),
        'config' => [
            'type' => 'input',
            'size' => 30,
            'max' => 100,
            'eval' => 'trim,alphanum_x',
        ],
    ],

    // -------------------------------------------------------------------------
    // Theme
    // -------------------------------------------------------------------------
    'tx_maisections_theme' => [
        'label' => $lang('tt_content.tx_maisections_theme'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maisections_theme.default'), 'value' => ''],
                ['label' => $lang('tt_content.tx_maisections_theme.light'), 'value' => 'light'],
                ['label' => $lang('tt_content.tx_maisections_theme.dark'), 'value' => 'dark'],
                ['label' => $lang('tt_content.tx_maisections_theme.primary'), 'value' => 'primary'],
                ['label' => $lang('tt_content.tx_maisections_theme.secondary'), 'value' => 'secondary'],
            ],
            'default' => '',
        ],
    ],

    // -------------------------------------------------------------------------
    // Advanced
    // -------------------------------------------------------------------------
    'tx_maisections_css_class' => [
        'label' => $lang('tt_content.tx_maisections_css_class'),
        'config' => [
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
        ],
    ],
]);

// =============================================================================
// Palettes
// =============================================================================
$GLOBALS['TCA']['tt_content']['palettes']['mai_sections_background'] = [
    'label' => $lang('palette.mai_sections_background'),
    'showitem' => 'tx_maisections_background_color, tx_maisections_background_image, '
        . '--linebreak--, tx_maisections_background_position, tx_maisections_background_size, tx_maisections_background_attachment',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_sections_overlay'] = [
    'label' => $lang('palette.mai_sections_overlay'),
    'showitem' => 'tx_maisections_overlay_color, tx_maisections_overlay_opacity',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_sections_spacing'] = [
    'label' => $lang('palette.mai_sections_spacing'),
    'showitem' => 'tx_maisections_padding_top, tx_maisections_padding_bottom',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_sections_layout'] = [
    'label' => $lang('palette.mai_sections_layout'),
    'showitem' => 'tx_maisections_content_width, tx_maisections_vertical_align',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_sections_columns'] = [
    'label' => $lang('palette.mai_sections_columns'),
    'showitem' => 'tx_maisections_column_gap, --linebreak--, tx_maisections_stack_mobile, tx_maisections_reverse_mobile',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_sections_effects'] = [
    'label' => $lang('palette.mai_sections_effects'),
    'showitem' => 'tx_maisections_animation_type',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_sections_navigation'] = [
    'label' => $lang('palette.mai_sections_navigation'),
    'showitem' => 'tx_maisections_anchor_id',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_sections_theme'] = [
    'label' => $lang('palette.mai_sections_theme'),
    'showitem' => 'tx_maisections_theme',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_sections_advanced'] = [
    'label' => $lang('palette.mai_sections_advanced'),
    'showitem' => 'tx_maisections_css_class',
];

// =============================================================================
// Extend section types with custom tabs
// Tabs are appended after the b13-generated showitem string.
// =============================================================================

// Tabs shared by all section types
$tabsAppearance =
    ',--div--;' . $lang('tab.appearance') .
    ',--palette--;;mai_sections_background' .
    ',--palette--;;mai_sections_overlay';

$tabsSpacingLayout =
    ',--div--;' . $lang('tab.spacing_layout') .
    ',--palette--;;mai_sections_spacing' .
    ',--palette--;;mai_sections_layout';

$tabsThemeEffects =
    ',--div--;' . $lang('tab.theme_effects') .
    ',--palette--;;mai_sections_theme' .
    ',--palette--;;mai_sections_effects' .
    ',--palette--;;mai_sections_navigation' .
    ',--palette--;;mai_sections_advanced';

// Additional tab for multi-column layouts (2col+, 3col, 4col, split-screen)
$tabsColumns =
    ',--div--;' . $lang('tab.columns') .
    ',--palette--;;mai_sections_columns';

$singleColTypes = [
    'section-1col',
    'section-grid-auto',
    'section-fullwidth',
    'section-contained',
];

$multiColTypes = [
    'section-2col-50-50',
    'section-2col-33-66',
    'section-2col-66-33',
    'section-2col-25-75',
    'section-2col-75-25',
    'section-3col',
    'section-4col',
    'section-split-screen',
];

foreach ($singleColTypes as $type) {
    if (isset($GLOBALS['TCA']['tt_content']['types'][$type])) {
        $GLOBALS['TCA']['tt_content']['types'][$type]['showitem'] .=
            $tabsAppearance . $tabsSpacingLayout . $tabsThemeEffects;
    }
}

foreach ($multiColTypes as $type) {
    if (isset($GLOBALS['TCA']['tt_content']['types'][$type])) {
        $GLOBALS['TCA']['tt_content']['types'][$type]['showitem'] .=
            $tabsAppearance . $tabsSpacingLayout . $tabsColumns . $tabsThemeEffects;
    }
}
