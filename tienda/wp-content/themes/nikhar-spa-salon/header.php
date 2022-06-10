<?php
/**
 * The header for our theme
 *
 * @subpackage nikhar-spa-salon
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nikhar-spa-salon' ); ?></a>
	
	<div id="spa-header">
		<div id="top-header">
			<?php if (get_theme_mod('nikhar_spa_salon_hide_show_topbar',false) == true) {?>
				<div class="container">
					<div class="contact-details">
						<div class="row">
							<div class="col-lg-7 col-md-7 align-self-center">
								<span class="mail">
									<?php if( get_theme_mod( 'nikhar_spa_salon_mail','' ) != '') { ?>
								    	<a href="mailto:<?php echo esc_attr( get_theme_mod('nikhar_spa_salon_mail','' ) ); ?>"><i class="far fa-envelope"></i><span class="col-org"><?php echo esc_html( get_theme_mod('nikhar_spa_salon_mail','' ) ); ?></span></a>
									<?php } ?>
								</span>
								<span class="timing">
									<?php if( get_theme_mod( 'nikhar_spa_salon_timing','' ) != '') { ?>
								    <i class="fas fa-clock"></i><span class="col-org"><?php echo esc_html( get_theme_mod('nikhar_spa_salon_timing','') ); ?></span>
									<?php } ?>
								</span>  	
							</div>
							<div class="col-lg-5 col-md-5 align-self-center">
								<div class="search-icon">
						            <?php get_search_form(); ?>
						        </div>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
			<div class="container">
				<div class="top">
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="logo">
						        <?php if ( has_custom_logo() ) : ?>
							        <div class="site-logo"><?php the_custom_logo(); ?></div>
							    <?php endif; ?>
					            <?php if (get_theme_mod('nikhar_spa_salon_show_site_title',true)) {?>
							        <?php $blog_info = get_bloginfo( 'name' ); ?>
							        <?php if ( ! empty( $blog_info ) ) : ?>
							            <?php if ( is_front_page() && is_home() ) : ?>
								            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							        	<?php else : ?>
						            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							            <?php endif; ?>
							        <?php endif; ?>
							    <?php }?>
					        	<?php if (get_theme_mod('nikhar_spa_salon_show_tagline',true)) {?>
							        <?php
							        $description = get_bloginfo( 'description', 'display' );
							        if ( $description || is_customize_preview() ) :
							          ?>
								        <p class="site-description">
								            <?php echo esc_html($description); ?>
								        </p>
							        <?php endif; ?>
							    <?php }?>
						    </div>
						</div>
						<div class="col-lg-6 col-md-5">
							<div class="social-icons">
								<?php if( get_theme_mod( 'nikhar_spa_salon_facebook_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'nikhar_spa_salon_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e('Facebook','nikhar-spa-salon'); ?></span></a>
							    <?php } ?>
							    <?php if( get_theme_mod( 'nikhar_spa_salon_twitter_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'nikhar_spa_salon_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e('Twitter','nikhar-spa-salon'); ?></span></a>
							    <?php } ?>
							    <?php if( get_theme_mod( 'nikhar_spa_salon_linkedin_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'nikhar_spa_salon_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e('Linkedin','nikhar-spa-salon'); ?></span></a>
							    <?php } ?>
							    <?php if( get_theme_mod( 'nikhar_spa_salon_pinterest_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'nikhar_spa_salon_pinterest_url','' ) ); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e('Pinterest','nikhar-spa-salon'); ?></span></a>
							    <?php } ?>
							    <?php if( get_theme_mod( 'nikhar_spa_salon_insta_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'nikhar_spa_salon_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e('Instagram','nikhar-spa-salon'); ?></span></a>
							    <?php } ?>		            
							</div>	
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="call">
								<?php if( get_theme_mod('nikhar_spa_salon_phone') != ''){ ?>
				                    <p class="phone"><?php echo esc_html( get_theme_mod('nikhar_spa_salon_phone','')); ?></p>
				                <?php } ?>
				                <?php if( get_theme_mod('nikhar_spa_salon_phone1') != ''){ ?>
				                    <p><a href="tel:<?php echo esc_attr( get_theme_mod('nikhar_spa_salon_phone1','' ) ); ?>"><?php echo esc_html( get_theme_mod('nikhar_spa_salon_phone1','')); ?></a></p>
				                <?php } ?>
			            	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header id="header">
			<div class="menu-section">
				<div class="container">
					<div class="main-top">
						<?php if (has_nav_menu('primary')){ ?>
							<div class="toggle-menu responsive-menu">
					            <button onclick="nikhar_spa_salon_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','nikhar-spa-salon'); ?></span></button>
					        </div>
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'nikhar-spa-salon' ); ?>">
				                  	<?php 
				                    wp_nav_menu( array( 
				                      'theme_location' => 'primary',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                  	?>
				                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="nikhar_spa_salon_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','nikhar-spa-salon'); ?></span></a>
				                </nav>
				            </div>
				        <?php }?>
					</div>	
				</div>		
			</div>
		</header>
	</div>

	<div class="site-content-contain">
		<div id="content" class="site-content">