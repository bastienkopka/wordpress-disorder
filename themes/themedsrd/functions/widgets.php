<?php

declare(strict_types=1);

function themedsrd_customizer_header($wp_customize): void {
	// Add section for upload logo
	$wp_customize->add_section('header_section', [
		'title' => __('Header'),
		'priority' => 20,
	]);
	// Add a parameter for logo
	$wp_customize->add_setting('header_logo');
	// Add a control to upload logo
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'header_logo',
			[
				'label' => __('Télécharger le logo :'),
				'section' => 'header_section',
				'settings' => 'header_logo',
			]
		)
	);
}
add_action('customize_register', 'themedsrd_customizer_header');

function themedsrd_social_customizer($wp_customize): void {
	$wp_customize->add_section('social_setting', [
		'title' => __('Social media'),
		'priority' => 20,
	]);

	$social_media = [
		'facebook',
		'twitch',
		'youtube',
		'tiktok',
		'discord',
	];

	foreach ($social_media as $item) {
		$setting = $item . '_setting';
		$wp_customize->add_setting($setting);
		$wp_customize->add_control($setting, [
			'section' => 'social_setting',
			'label' => ucfirst($item),
			'type' => 'text',
		]);
	}
}
add_action('customize_register', 'themedsrd_social_customizer');