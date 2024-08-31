<?php
/*
Title: Popup Settings
Post Type: popup
*/
piklist( 'field', array(
	'type'  => 'checkbox',
	'field' => 'popwizardwp_active',
	'label' => __( 'Active', 'popwizardwp' ),
	'value'=>0,
	'choices'=>array(
		1=>__( 'Active', 'popwizardwp' )
	)
) );
piklist( 'field', array(
	'type'  => 'text',
	'field' => 'popwizardwp_display_after',
	'label' => __( 'Display Popup After', 'popwizardwp' ),
	'value' => '5',
	'help'  => __( 'in seconds', 'popwizardwp' ),
) );
piklist( 'field', array(
	'type'  => 'url',
	'field' => 'popwizardwp_url',
	'label' => __( 'URL', 'popwizardwp' ),
) );
piklist( 'field', array(
	'type'  => 'checkbox',
	'field' => 'popwizardwp_auto_hide',
	'label' => __( 'Auto Hide', 'popwizardwp' ),
	'value'=>1,
	'choices'=>array(
		1=>__( 'Don\'t Hide', 'popwizardwp' )
	)
) );
piklist( 'field', array(
	'type'    => 'checkbox',
	'field'   => 'popwizardwp_on_exit',
	'label'   => __( 'Display On Exit', 'popwizardwp' ),
	'value'   => 1,
	'choices' => array(
		0 => __( 'Display On Exit', 'popwizardwp' )
	)
) );
piklist( 'field', array(
	'type'    => 'select',
	'field'   => 'popwizardwp_popup_size',
	'label'   => __( 'Popup Size', 'popwizardwp' ),
	'value'   => 'landscape',
	'choices' => array(
		'popup-landscape' => __( 'Landscape', 'popwizardwp' ),
		'popup-square' => __( 'Square', 'popwizardwp' ),
		'full' => __( 'Original', 'popwizardwp' ),
	)
) );