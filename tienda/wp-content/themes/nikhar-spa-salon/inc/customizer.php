<?php
/**
 * nikhar-spa-salon: Customizer
 *
 * @subpackage nikhar-spa-salon
 * @since 1.0
 */

function nikhar_spa_salon_customize_register( $wp_customize ) {

	$wp_customize->add_setting('nikhar_spa_salon_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('nikhar_spa_salon_logo_padding',array(
		'label' => __('Logo Padding','nikhar-spa-salon'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('nikhar_spa_salon_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_float'
	));
	$wp_customize->add_control('nikhar_spa_salon_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','nikhar-spa-salon'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('nikhar_spa_salon_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_float'
	));
	$wp_customize->add_control('nikhar_spa_salon_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','nikhar-spa-salon'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('nikhar_spa_salon_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_float'
	));
	$wp_customize->add_control('nikhar_spa_salon_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','nikhar-spa-salon'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('nikhar_spa_salon_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_float'
	));
	$wp_customize->add_control('nikhar_spa_salon_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','nikhar-spa-salon'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('nikhar_spa_salon_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_checkbox'
	));
	$wp_customize->add_control('nikhar_spa_salon_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','nikhar-spa-salon'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('nikhar_spa_salon_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_float'
	));
	$wp_customize->add_control('nikhar_spa_salon_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','nikhar-spa-salon'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('nikhar_spa_salon_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_checkbox'
	));
	$wp_customize->add_control('nikhar_spa_salon_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','nikhar-spa-salon'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('nikhar_spa_salon_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_float'
	));
	$wp_customize->add_control('nikhar_spa_salon_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','nikhar-spa-salon'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_panel( 'nikhar_spa_salon_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'nikhar-spa-salon' ),
		'description' => __( 'Description of what this panel does.', 'nikhar-spa-salon' ),
	) );

	$wp_customize->add_section( 'nikhar_spa_salon_theme_options_section', array(
    	'title'      => __( 'General Settings', 'nikhar-spa-salon' ),
		'priority'   => 30,
		'panel' => 'nikhar_spa_salon_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('nikhar_spa_salon_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'nikhar_spa_salon_sanitize_choices'	        
	));

	$wp_customize->add_control('nikhar_spa_salon_theme_options',array(
		'type' => 'radio',
		'label' => __('Do you want this section','nikhar-spa-salon'),
		'section' => 'nikhar_spa_salon_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','nikhar-spa-salon'),
		   'Right Sidebar' => __('Right Sidebar','nikhar-spa-salon'),
		   'One Column' => __('One Column','nikhar-spa-salon'),
		   'Three Columns' => __('Three Columns','nikhar-spa-salon'),
		   'Four Columns' => __('Four Columns','nikhar-spa-salon'),
		   'Grid Layout' => __('Grid Layout','nikhar-spa-salon')
		),
	));

	// Contact Details
	$wp_customize->add_section( 'nikhar_spa_salon_contact_details', array(
    	'title'      => __( 'Contact Details', 'nikhar-spa-salon' ),
		'priority'   => null,
		'panel' => 'nikhar_spa_salon_panel_id'
	) );

	$wp_customize->add_setting('nikhar_spa_salon_hide_show_topbar',array(
    	'default' => false,
    	'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_checkbox'
	));
	$wp_customize->add_control('nikhar_spa_salon_hide_show_topbar',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Topbar', 'nikhar-spa-salon'),
   	'section' => 'nikhar_spa_salon_contact_details',
	));

	$wp_customize->add_setting('nikhar_spa_salon_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('nikhar_spa_salon_mail',array(
		'label'	=> __('Email Address','nikhar-spa-salon'),
		'section'=> 'nikhar_spa_salon_contact_details',
		'setting'=> 'nikhar_spa_salon_mail',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('nikhar_spa_salon_timing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('nikhar_spa_salon_timing',array(
		'label'	=> __('Timing','nikhar-spa-salon'),
		'section'=> 'nikhar_spa_salon_contact_details',
		'setting'=> 'nikhar_spa_salon_timing',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nikhar_spa_salon_phone',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('nikhar_spa_salon_phone',array(
		'label'	=> __('Contact Text','nikhar-spa-salon'),
		'section'=> 'nikhar_spa_salon_contact_details',
		'setting'=> 'nikhar_spa_salon_phone',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nikhar_spa_salon_phone1',array(
		'default'=> '',
		'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_phone_number'
	));	
	$wp_customize->add_control('nikhar_spa_salon_phone1',array(
		'label'	=> __('Contact Number','nikhar-spa-salon'),
		'section'=> 'nikhar_spa_salon_contact_details',
		'setting'=> 'nikhar_spa_salon_phone1',
		'type'=> 'text'
	));

	//social icons
	$wp_customize->add_section('nikhar_spa_salon_topbar_header',array(
		'title'	=> __('Social Icons','nikhar-spa-salon'),
		'description'	=> __('Add Header Content here','nikhar-spa-salon'),
		'priority'	=> null,
		'panel' => 'nikhar_spa_salon_panel_id',
	));

	$wp_customize->add_setting('nikhar_spa_salon_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('nikhar_spa_salon_facebook_url',array(
		'label'	=> __('Add Facebook link','nikhar-spa-salon'),
		'section'	=> 'nikhar_spa_salon_topbar_header',
		'setting'	=> 'nikhar_spa_salon_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('nikhar_spa_salon_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('nikhar_spa_salon_twitter_url',array(
		'label'	=> __('Add Twitter link','nikhar-spa-salon'),
		'section'	=> 'nikhar_spa_salon_topbar_header',
		'setting'	=> 'nikhar_spa_salon_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('nikhar_spa_salon_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('nikhar_spa_salon_linkedin_url',array(
		'label'	=> __('Add Linkedin link','nikhar-spa-salon'),
		'section'	=> 'nikhar_spa_salon_topbar_header',
		'setting'	=> 'nikhar_spa_salon_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('nikhar_spa_salon_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('nikhar_spa_salon_pinterest_url',array(
		'label'	=> __('Add Pinterest link','nikhar-spa-salon'),
		'section'	=> 'nikhar_spa_salon_topbar_header',
		'setting'	=> 'nikhar_spa_salon_pinterest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('nikhar_spa_salon_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('nikhar_spa_salon_insta_url',array(
		'label'	=> __('Add Instagram link','nikhar-spa-salon'),
		'section'	=> 'nikhar_spa_salon_topbar_header',
		'setting'	=> 'nikhar_spa_salon_insta_url',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'nikhar_spa_salon_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'nikhar-spa-salon' ),
		'priority'   => null,
		'panel' => 'nikhar_spa_salon_panel_id'
	) );

	$wp_customize->add_setting('nikhar_spa_salon_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_checkbox'
	));
	$wp_customize->add_control('nikhar_spa_salon_slider_hide_show',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide slider','nikhar-spa-salon'),
   	'section' => 'nikhar_spa_salon_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'nikhar_spa_salon_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'nikhar_spa_salon_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'nikhar_spa_salon_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'nikhar-spa-salon' ),
			'section'  => 'nikhar_spa_salon_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//Our Services
	$wp_customize->add_section('nikhar_spa_salon_service',array(
		'title'	=> __('Our Services','nikhar-spa-salon'),
		'description'=> __('This section will appear below the slider.','nikhar-spa-salon'),
		'panel' => 'nikhar_spa_salon_panel_id',
	));
	
	$wp_customize->add_setting('nikhar_spa_salon_our_services_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('nikhar_spa_salon_our_services_title',array(
		'label'	=> __('Section Title','nikhar-spa-salon'),
		'section'	=> 'nikhar_spa_salon_service',
		'setting'	=> 'nikhar_spa_salon_our_services_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('nikhar_spa_salon_services_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('nikhar_spa_salon_services_subtitle',array(
		'label'	=> __('Section Subtitle','nikhar-spa-salon'),
		'section'	=> 'nikhar_spa_salon_service',
		'setting'	=> 'nikhar_spa_salon_services_subtitle',
		'type'		=> 'text'
	));


	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('nikhar_spa_salon_category_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'nikhar_spa_salon_sanitize_choices',
	));
	$wp_customize->add_control('nikhar_spa_salon_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category to display Post','nikhar-spa-salon'),
		'description' => __('Image Size ( 300px x 300px )','nikhar-spa-salon'),
		'section' => 'nikhar_spa_salon_service',
	));

	$wp_customize->add_setting('nikhar_spa_salon_services_section_padding',array(
       'default' => '',
       'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_float'
    ));
    $wp_customize->add_control('nikhar_spa_salon_services_section_padding',array(
       'type' => 'number',
       'label' => __('Section Top Bottom Padding','nikhar-spa-salon'),
       'section' => 'nikhar_spa_salon_service',
    ));

	//Footer
 	$wp_customize->add_section( 'nikhar_spa_salon_footer', array(
    	'title'      => __( 'Footer Text', 'nikhar-spa-salon' ),
		'priority'   => null,
		'panel' => 'nikhar_spa_salon_panel_id'
	) );

	$wp_customize->add_setting('nikhar_spa_salon_show_back_totop',array(
 		'default' => true,
   	'sanitize_callback'	=> 'nikhar_spa_salon_sanitize_checkbox'
	));
	$wp_customize->add_control('nikhar_spa_salon_show_back_totop',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Back to Top','nikhar-spa-salon'),
   	'section' => 'nikhar_spa_salon_footer'
	));

 	$wp_customize->add_setting('nikhar_spa_salon_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('nikhar_spa_salon_footer_copy',array(
		'label'	=> __('Footer Text','nikhar-spa-salon'),
		'section'	=> 'nikhar_spa_salon_footer',
		'setting'	=> 'nikhar_spa_salon_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'nikhar_spa_salon_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'nikhar_spa_salon_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'nikhar_spa_salon_customize_register' );

function nikhar_spa_salon_customize_partial_blogname() {
	bloginfo( 'name' );
}

function nikhar_spa_salon_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function nikhar_spa_salon_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function nikhar_spa_salon_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Nikhar_Spa_Salon_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Nikhar_Spa_Salon_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Nikhar_Spa_Salon_Customize_Section_Pro(
				$manager,
				'nikhar_spa_salon_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Spa Pro Theme', 'nikhar-spa-salon' ),
					'pro_text' => esc_html__( 'Go Pro','nikhar-spa-salon' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/product/spa-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'nikhar-spa-salon-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'nikhar-spa-salon-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Nikhar_Spa_Salon_Customize::get_instance();