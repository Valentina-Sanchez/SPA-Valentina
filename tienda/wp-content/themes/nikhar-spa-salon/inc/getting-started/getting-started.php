<?php
//about theme info
add_action( 'admin_menu', 'nikhar_spa_salon_gettingstarted' );
function nikhar_spa_salon_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'nikhar-spa-salon'), esc_html__('About Theme', 'nikhar-spa-salon'), 'edit_theme_options', 'nikhar_spa_salon_guide', 'nikhar_spa_salon_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function nikhar_spa_salon_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'nikhar_spa_salon_admin_theme_style');

//guidline for about theme
function nikhar_spa_salon_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'nikhar-spa-salon' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Nikhar Spa Salon WordPress Theme', 'nikhar-spa-salon' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'nikhar-spa-salon' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'nikhar-spa-salon' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'nikhar-spa-salon' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'nikhar-spa-salon' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'nikhar-spa-salon' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'nikhar-spa-salon' ); ?> <a href="<?php echo esc_url( NIKHAR_SPA_SALON_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'nikhar-spa-salon' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Nikhar Spa Salon is a youthful, refreshing, sleek and feature-full WordPress theme for spa, salon, beauty parlour, hair salon, health club, health care centre, make-up artist, massage parlour, physiotherapy centre, steam bath centre, gym, yoga class and similar websites. It can also be used for health or beauty care blog. You can change the whole look of the website from sleek to bold and vice versa by changing its colour scheme, background images and font. It is fully responsive, compatible with many browsers and translation ready. It gives awesome look on retina ready devices with the use of sharp images and crisp fonts. It is optimized for search engines giving a good ranking to your website. Social media integration is done to make content shareable on various networking sites. You can use life-size full screen banners or full-width sliders to attract users. This spa WordPress theme allows customization to change its logo, menu, header and footer style, slider effects, colour, background image, fonts and so many other things to make it a personalized website. Nikhar Spa Salon loads with great speed. Attract visitors by showing beautiful and colourful images of your spa, its infrastructure and your services in the gallery. As it is compatible with WooCommerce, you can start your very own online store.', 'nikhar-spa-salon')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Spa Theme', 'nikhar-spa-salon' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'nikhar-spa-salon'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( NIKHAR_SPA_SALON_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'nikhar-spa-salon'); ?></a>
			<a href="<?php echo esc_url( NIKHAR_SPA_SALON_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'nikhar-spa-salon'); ?></a>
			<a href="<?php echo esc_url( NIKHAR_SPA_SALON_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'nikhar-spa-salon'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/nikhar-spa-saloon1.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'nikhar-spa-salon'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'nikhar-spa-salon'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'nikhar-spa-salon'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>