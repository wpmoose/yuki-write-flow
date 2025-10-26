<?php

/**
 * Theme customizer options
 *
 * @package Yuki Write Flow
 */

if (!function_exists('yuki_write_flow_return_yes')) {
    function yuki_write_flow_return_yes()
    {
        return 'yes';
    }
}

if (!function_exists('yuki_write_flow_return_no')) {
    function yuki_write_flow_return_no()
    {
        return 'no';
    }
}

//
// Header top row
//
if (!function_exists('yuki_write_flow_header_top_row_elements')) {
    function yuki_write_flow_header_top_row_elements()
    {
        return [
            'desktop' => [
                [
                    'elements' => ['logo'],
                    'settings' => ['width' => '30%']
                ],
                [
                    'elements' => ['menu-1', 'socials', 'divider-1', 'button-1', 'theme-switch', 'search', 'trigger'],
                    'settings' => ['width' => '70%', 'justify-content' => 'flex-end']
                ],
            ],
            'mobile' => [
                [
                    'elements' => ['logo'],
                    'settings' => ['width' => '30%']
                ],
                [
                    'elements' => ['button-1', 'theme-switch', 'search', 'trigger'],
                    'settings' => ['width' => '70%', 'justify-content' => 'flex-end']
                ],
            ],
        ];
    }
}
add_filter('yuki_header_top_row_default_value', 'yuki_write_flow_header_top_row_elements');

if (!function_exists('yuki_write_flow_header_top_row_height')) {
    function yuki_write_flow_header_top_row_height()
    {
        return '68px';
    }
}
add_filter('yuki_header_top_bar_row_min_height_default_value', 'yuki_write_flow_header_top_row_height');

//
// Header middle row
//

if (!function_exists('yuki_write_flow_header_primary_row_elements')) {
    function yuki_write_flow_header_primary_row_elements()
    {
        return [
            'desktop' => [
                [
                    'elements' => [],
                    'settings' => ['width' => '100%']
                ],
            ],
            'mobile' => [
                [
                    'elements' => [],
                    'settings' => ['width' => '100%']
                ],
            ],
        ];
    }
}
add_filter('yuki_header_primary_row_default_value', 'yuki_write_flow_header_primary_row_elements');

if (!function_exists('yuki_write_flow_content_spacing')) {
	/**
	 * Change default content spacing for homepage and archive
	 *
	 * @return string
	 */
	function yuki_write_flow_content_spacing()
	{
		return '24px';
	}
}
add_filter('yuki_homepage_content_spacing_default_value', 'yuki_write_flow_content_spacing');
add_filter('yuki_archive_content_spacing_default_value', 'yuki_write_flow_content_spacing');

//
// Header Logo Element
//
if ( ! function_exists( 'yuki_blogger_header_el_logo_site_title_typography' ) ) {
	function yuki_blogger_header_el_logo_site_title_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '24px',
			'variant'       => '600',
			'lineHeight'    => '1.7',
			'textTransform' => 'capitalize',
		];
	}
}
add_filter( 'yuki_header_el_logo_site_title_typography_default_value', 'yuki_blogger_header_el_logo_site_title_typography' );

//
// Archive Layout
//
if ( ! function_exists( 'yuki_write_flow_archive_layout' ) ) {
	function yuki_write_flow_archive_layout() {
		return 'archive-left';
	}
}
add_filter( 'yuki_archive_layout_default_value', 'yuki_write_flow_archive_layout' );

if ( ! function_exists( 'yuki_write_flow_archive_image_width' ) ) {
    function yuki_write_flow_archive_image_width() {
        return '40%';
    }
}
add_filter( 'yuki_archive_image_width_default_value', 'yuki_write_flow_archive_image_width' );

if ( ! function_exists( 'yuki_write_flow_archive_image_height' ) ) {
    function yuki_write_flow_archive_image_height() {
        return [
            'desktop' => '100%',
            'tablet' => '100%',
            'mobile' => '240px',
        ];
    }
}
add_filter( 'yuki_entry_thumbnail_height_default_value', 'yuki_write_flow_archive_image_height' );

if ( ! function_exists( 'yuki_write_flow_card_vertical_alignment' ) ) {
    function yuki_write_flow_card_vertical_alignment() {
        return 'center';
    }
}
add_filter( 'yuki_card_vertical_alignment_default_value', 'yuki_write_flow_card_vertical_alignment' );

if ( ! function_exists( 'yuki_write_flow_entry_excerpt_typography' ) ) {
    function yuki_write_flow_entry_excerpt_typography() {
        return [
            'family'     => 'inherit',
            'fontSize'   => '0.8rem',
            'variant'    => '400',
            'lineHeight' => '1.5'
        ];
    }
}
add_filter( 'yuki_entry_excerpt_typography_default_value', 'yuki_write_flow_entry_excerpt_typography' );

//
// Single Post
//
add_filter( 'yuki_post_sidebar_section_default_value', 'yuki_write_flow_return_yes' );
