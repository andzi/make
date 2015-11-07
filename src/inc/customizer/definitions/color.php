<?php
/**
 * @package Make
 */

// Bail if this isn't being included inside of a MAKE_Customizer_ControlsInterface.
if ( ! isset( $this ) || ! $this instanceof MAKE_Customizer_ControlsInterface ) {
	return;
}

// Panel ID
$panel = $this->prefix . 'color';

// Global
$this->add_section_definitions( 'color', array(
	'panel'   => $panel,
	'title'   => __( 'Global', 'make' ),
	'controls' => array(
		'color-group-color-scheme' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Color Scheme', 'make' ),
				'type'  => 'group-title',
			),
		),
		'color-primary'   => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Primary Color', 'make' ),
				'description'  => sprintf(
					__( 'Used for: %s', 'make' ),
					__( 'links', 'make' )
				),
			),
		),
		'color-secondary' => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Secondary Color', 'make' ),
				'description'  => sprintf(
					__( 'Used for: %s', 'make' ),
					__( 'form inputs, table borders, ruled lines, slider buttons', 'make' )
				),
			),
		),
		'color-text'      => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Text Color', 'make' ),
				'description'  => sprintf(
					__( 'Used for: %s', 'make' ),
					__( 'most text', 'make' )
				),
			),
		),
		'color-detail'    => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Detail Color', 'make' ),
				'description'  => sprintf(
					__( 'Used for: %s', 'make' ),
					__( 'UI icons', 'make' )
				),
			),
		),
		'color-group-global-link' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Links', 'make' ),
				'type'  => 'group-title',
			),
		),
		'color-primary-link'    => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Link Hover/Focus Color', 'make' ),
				'description'  => __( 'The default link color is controlled by the "Primary Color" option above.', 'make' ),
			),
		),
		'color-group-global-background' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Background', 'make' ),
				'type'  => 'group-title',
			),
		),
		// Site Background Color gets inserted here.
		'main-background-color-heading' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Main Column Background Color', 'make' ),
				'type'  => 'heading',
			),
		),
		'main-background-color' => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
			),
		),
		'main-background-color-opacity'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Range',
				'label'   => __( 'Opacity', 'make' ),
				'type'  => 'range',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 1.01, // Needs to be slightly over 1 to handle rounding error.
					'step' => 0.05,
				),
			),
		),
	),
) );

// Site Header
$this->add_section_definitions( 'color-header', array(
	'panel'   => $panel,
	'title'   => __( 'Site Header', 'make' ),
	'controls' => array(
		'header-text-color'           => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Text Color', 'make' ),
			),
		),
		'header-background-color-heading' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Background Color', 'make' ),
				'type'  => 'heading',
			),
		),
		'header-background-color'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
			),
		),
		'header-background-color-opacity'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Range',
				'label'   => __( 'Opacity', 'make' ),
				'type'  => 'range',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 1.01, // Needs to be slightly over 1 to handle rounding error.
					'step' => 0.05,
				),
			),
		),
	),
) );

// Site Title & Tagline
$this->add_section_definitions( 'color-site-title-tagline', array(
	'panel'   => $panel,
	'title'   => __( 'Site Title &amp; Tagline', 'make' ),
	'description' => sprintf(
		__( 'These options override the %s option in the %s section.', 'make' ),
		__( 'Text Color', 'make' ),
		__( 'Site Header', 'make' )
	),
	'controls' => array(
		'color-site-title'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Site Title Color', 'make' ),
			),
		),
		'color-site-tagline'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Tagline Color', 'make' ),
			),
		),
	),
) );

// Main Menu
$this->add_section_definitions( 'color-main-menu', array(
	'panel'   => $panel,
	'title'   => __( 'Main Menu', 'make' ),
	'controls' => array(
		'color-group-nav-item' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Menu Items', 'make' ),
				'type'  => 'group-title',
			),
		),
		'color-nav-text'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Text Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Text Color', 'make' ),
					__( 'Site Header', 'make' )
				),
			),
		),
		'color-nav-text-hover'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Hover/Focus Text Color', 'make' ),
			),
		),
		'color-group-subnav-item' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Sub-Menu Items', 'make' ),
				'type'  => 'group-title',
			),
		),
		'color-subnav-text'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Text Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Text Color', 'make' ),
					__( 'Site Header', 'make' )
				),
			),
		),
		'color-subnav-text-hover'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Hover/Focus Text Color', 'make' ),
			),
		),
		'color-subnav-detail'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Detail Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Detail Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'color-subnav-background'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Background Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Secondary Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'color-subnav-background-opacity'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Range',
				'label'   => __( 'Opacity', 'make' ),
				'type'  => 'range',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 1.01, // Needs to be slightly over 1 to handle rounding error.
					'step' => 0.05,
				),
			),
		),
		'color-subnav-background-hover'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Hover/Focus Background Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Primary Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'color-subnav-background-hover-opacity'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Range',
				'label'   => __( 'Opacity', 'make' ),
				'type'  => 'range',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 1.01, // Needs to be slightly over 1 to handle rounding error.
					'step' => 0.05,
				),
			),
		),
		'color-group-current-item' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Current Item', 'make' ),
				'type'  => 'group-title',
			),
		),
		'color-nav-current-item-background'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Background Color', 'make' ),
			),
		),
		'color-nav-current-item-background-opacity'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Range',
				'label'   => __( 'Opacity', 'make' ),
				'type'  => 'range',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 1.01, // Needs to be slightly over 1 to handle rounding error.
					'step' => 0.05,
				),
			),
		),
	),
) );

// Header Bar
$this->add_section_definitions( 'color-header-bar', array(
	'panel'   => $panel,
	'title'   => __( 'Header Bar', 'make' ),
	'controls' => array(
		'header-bar-text-color'       => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Text Color', 'make' ),
			),
		),
		'header-bar-link-color'       => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Link Color', 'make' ),
			),
		),
		'header-bar-link-hover-color'       => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Link Hover/Focus Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Link Hover/Focus Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'header-bar-border-color'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Border Color', 'make' ),
			),
		),
		'header-bar-background-color-heading' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Background Color', 'make' ),
				'type'  => 'heading',
			),
		),
		'header-bar-background-color' => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
			),
		),
		'header-bar-background-color-opacity'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Range',
				'label'   => __( 'Opacity', 'make' ),
				'type'  => 'range',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 1.01, // Needs to be slightly over 1 to handle rounding error.
					'step' => 0.05,
				),
			),
		),
	),
) );

// Sidebars
$this->add_section_definitions( 'color-sidebar', array(
	'panel'   => $panel,
	'title'   => __( 'Sidebars', 'make' ),
	'controls' => array(
		'color-group-sidebar-widget' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Widgets', 'make' ),
				'type'  => 'group-title',
			),
		),
		'color-widget-title-text'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Widget Title Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Text Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'color-widget-text'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Widget Body Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Text Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'color-widget-border'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Border Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Secondary Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'color-group-sidebar-link' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Links', 'make' ),
				'type'  => 'group-title',
			),
		),
		'color-widget-link'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Link Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Primary Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'color-widget-link-hover'            => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Link Hover/Focus Color', 'make' ),
			),
		),
	),
) );

// Footer
$this->add_section_definitions( 'color-footer', array(
	'panel'   => $panel,
	'title'   => __( 'Footer', 'make' ),
	'controls' => array(
		'footer-text-color'       => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Footer Text Color', 'make' ),
			),
		),
		'footer-link-color'       => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Link Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Primary Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'footer-link-hover-color'       => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Link Hover/Focus Color', 'make' ),
				'description' => sprintf(
					__( 'This option overrides the %s option in the %s section.', 'make' ),
					__( 'Link Hover/Focus Color', 'make' ),
					__( 'Global', 'make' )
				),
			),
		),
		'footer-border-color'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
				'label'        => __( 'Border Color', 'make' ),
			),
		),
		'footer-background-color-heading' => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'   => __( 'Background Color', 'make' ),
				'type'  => 'heading',
			),
		),
		'footer-background-color' => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'WP_Customize_Color_Control',
			),
		),
		'footer-background-color-opacity'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Range',
				'label'   => __( 'Opacity', 'make' ),
				'type'  => 'range',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 1.01, // Needs to be slightly over 1 to handle rounding error.
					'step' => 0.05,
				),
			),
		),
	),
) );

// Check for deprecated filters
foreach ( array( 'make_customizer_colorscheme_sections' ) as $filter ) {
	if ( has_filter( $filter ) ) {
		$this->compatibility->deprecated_hook(
			$filter,
			'1.7.0',
			__( 'To add or modify Customizer sections and controls, use the make_customizer_sections hook instead, or the core $wp_customize methods.', 'make' )
		);
	}
}