<?php 

	$nikhar_spa_salon_custom_style = '';

	// Logo Size
	$nikhar_spa_salon_logo_top_padding = get_theme_mod('nikhar_spa_salon_logo_top_padding');
	$nikhar_spa_salon_logo_bottom_padding = get_theme_mod('nikhar_spa_salon_logo_bottom_padding');
	$nikhar_spa_salon_logo_left_padding = get_theme_mod('nikhar_spa_salon_logo_left_padding');
	$nikhar_spa_salon_logo_right_padding = get_theme_mod('nikhar_spa_salon_logo_right_padding');

	if( $nikhar_spa_salon_logo_top_padding != '' || $nikhar_spa_salon_logo_bottom_padding != '' || $nikhar_spa_salon_logo_left_padding != '' || $nikhar_spa_salon_logo_right_padding != ''){
		$nikhar_spa_salon_custom_style .=' .logo {';
			$nikhar_spa_salon_custom_style .=' padding-top: '.esc_attr($nikhar_spa_salon_logo_top_padding).'px; padding-bottom: '.esc_attr($nikhar_spa_salon_logo_bottom_padding).'px; padding-left: '.esc_attr($nikhar_spa_salon_logo_left_padding).'px; padding-right: '.esc_attr($nikhar_spa_salon_logo_right_padding).'px;';
		$nikhar_spa_salon_custom_style .=' }';
	}

	// service section padding
	$nikhar_spa_salon_services_section_padding = get_theme_mod('nikhar_spa_salon_services_section_padding');

	if( $nikhar_spa_salon_services_section_padding != ''){
		$nikhar_spa_salon_custom_style .=' #our-services {';
			$nikhar_spa_salon_custom_style .=' padding-top: '.esc_attr($nikhar_spa_salon_services_section_padding).'px; padding-bottom: '.esc_attr($nikhar_spa_salon_services_section_padding).'px;';
		$nikhar_spa_salon_custom_style .=' }';
	}

	// Site Title Font Size
	$nikhar_spa_salon_site_title_font_size = get_theme_mod('nikhar_spa_salon_site_title_font_size');
	if( $nikhar_spa_salon_site_title_font_size != ''){
		$nikhar_spa_salon_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$nikhar_spa_salon_custom_style .=' font-size: '.esc_attr($nikhar_spa_salon_site_title_font_size).'px;';
		$nikhar_spa_salon_custom_style .=' }';
	}

	// Site Tagline Font Size
	$nikhar_spa_salon_site_tagline_font_size = get_theme_mod('nikhar_spa_salon_site_tagline_font_size');
	if( $nikhar_spa_salon_site_tagline_font_size != ''){
		$nikhar_spa_salon_custom_style .=' .logo p.site-description {';
			$nikhar_spa_salon_custom_style .=' font-size: '.esc_attr($nikhar_spa_salon_site_tagline_font_size).'px;';
		$nikhar_spa_salon_custom_style .=' }';
	}