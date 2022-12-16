<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bespoke-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bespoke-theme' ); ?></a>


<header>
  <nav class="navbar navbar-expand-md navbar-dark stop-fixed-top bg-dark">
    <div class="container-fluid">
    	<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )
				?>
      			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      				<?php 
      				if ( has_custom_logo() ) {
      					echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
      				} else {
      					echo '<h1>' . get_bloginfo('name') . '</h1>';
      				}
      				?>
      					
      				</a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container_id'        => 'navbarCollapse',
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'menu_class'        => 'navbar-nav ms-auto mb-2 mb-md-0',
				)
			);
			?>

    </div>
  </nav>
</header>


	