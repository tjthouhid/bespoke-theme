<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bespoke-theme
 */

?>

  <!-- FOOTER -->
  <footer class="container">
  	<div class="row">
  		<div class="col">
  			    <?php
  				$custom_logo_id = get_theme_mod( 'custom_logo' );
  				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )
  				?>
  					<a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
  						<?php 
  						if ( has_custom_logo() ) {
  							echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
  						} else {
  							echo '<h1>' . get_bloginfo('name') . '</h1>';
  						}
  						?>
  							
  					</a>
  		</div>
  		<div class="col">
  			<p class="footer-copy">&copy; 2022 All rights Reserved by Levi Lucas</p>
  		</div>
  	</div>
    
    
  </footer>
</main>

	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
