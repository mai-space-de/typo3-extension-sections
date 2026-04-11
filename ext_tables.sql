CREATE TABLE tt_content (
    -- Background
    tx_maisections_background_color varchar(7) DEFAULT '' NOT NULL,
    tx_maisections_background_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_maisections_background_position varchar(30) DEFAULT 'center center' NOT NULL,
    tx_maisections_background_size varchar(10) DEFAULT 'cover' NOT NULL,
    tx_maisections_background_attachment varchar(10) DEFAULT 'scroll' NOT NULL,

    -- Overlay
    tx_maisections_overlay_color varchar(7) DEFAULT '' NOT NULL,
    tx_maisections_overlay_opacity varchar(3) DEFAULT '50' NOT NULL,

    -- Spacing
    tx_maisections_padding_top varchar(4) DEFAULT 'm' NOT NULL,
    tx_maisections_padding_bottom varchar(4) DEFAULT 'm' NOT NULL,

    -- Layout
    tx_maisections_content_width varchar(10) DEFAULT 'contained' NOT NULL,
    tx_maisections_vertical_align varchar(10) DEFAULT 'top' NOT NULL,

    -- Column Behavior
    tx_maisections_column_gap varchar(4) DEFAULT 'm' NOT NULL,
    tx_maisections_stack_mobile smallint(6) unsigned DEFAULT '1' NOT NULL,
    tx_maisections_reverse_mobile smallint(6) unsigned DEFAULT '0' NOT NULL,

    -- Effects
    tx_maisections_animation_type varchar(20) DEFAULT '' NOT NULL,

    -- Navigation
    tx_maisections_anchor_id varchar(100) DEFAULT '' NOT NULL,

    -- Theme
    tx_maisections_theme varchar(20) DEFAULT '' NOT NULL,

    -- Advanced
    tx_maisections_css_class varchar(255) DEFAULT '' NOT NULL,
);
