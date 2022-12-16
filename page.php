<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bespoke-theme
 */

get_header();
?>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    	<?php 
    	$image1 = get_field('slider_image-1');
    	if( !empty( $image1 ) ): ?>
      		<div class="carousel-item active" style="background-image: url(<?php echo esc_url($image1['url']); ?>)">
        		<div class="container">
        			<div class="carousel-caption text-start">
            			<h1><?php echo get_field('slider_1_header')?></h1>
            			<p><?php echo get_field('slider_1_detail');?></p>
          			</div>
        		</div>
      		</div>
      	<?php endif; ?>
      <?php 
    	$image2 = get_field('slider_image-2');
    	if( !empty( $image2 ) ): ?>
      		<div class="carousel-item" style="background-image: url(<?php echo esc_url($image2['url']); ?>)">
        		<div class="container">
        			<div class="carousel-caption text-start">
            			<h1><?php echo get_field('slider_2_header')?></h1>
            			<p><?php echo get_field('slider_2_detail');?></p>
          			</div>
        		</div>
      		</div>
      	<?php endif; ?>
      	<?php 
    	$image3 = get_field('slider_image-3');
    	if( !empty( $image3 ) ): ?>
      		<div class="carousel-item" style="background-image: url(<?php echo esc_url($image3['url']); ?>)">
        		<div class="container">
        			<div class="carousel-caption text-start">
            			<h1><?php echo get_field('slider_3_header')?></h1>
            			<p><?php echo get_field('slider_3_detail');?></p>
          			</div>
        		</div>
      		</div>
      	<?php endif; ?>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
    	<?php $section_1_image = get_field('section_1_image');
    	if( !empty( $section_1_image ) ): ?>
	      <div class="col-lg-4">
		    <div class="section" style="background-image: url(<?php echo esc_url($section_1_image['url']); ?>)">
		        <h2 class="fw-normal"><?php echo get_field('section_1_header')?></h2>
		        <p><?php echo get_field('section_1_text')?></p>
		        <a class="" href="<?php echo get_field('section_1_url')?>">SHOP NOW</a>
		    </div>
	      </div><!-- /.col-lg-4 -->
	     <?php endif; ?>

	     <?php $section_2_image = get_field('section_2_image');
    	if( !empty( $section_2_image ) ): ?>
	      <div class="col-lg-4">
		    <div class="section" style="background-image: url(<?php echo esc_url($section_2_image['url']); ?>)">
	        	<h2 class="fw-normal"><?php echo get_field('section_2_header')?></h2>
		        <p><?php echo get_field('section_2_text')?></p>
		        <a class="" href="<?php echo get_field('section_2_url')?>">SHOP NOW</a>
		    </div>
	      </div><!-- /.col-lg-4 -->
	     <?php endif; ?>

	     <?php $section_3_image = get_field('section_3_image');
    	if( !empty( $section_3_image ) ): ?>
	      <div class="col-lg-4">
		    <div class="section" style="background-image: url(<?php echo esc_url($section_3_image['url']); ?>)">
		        <h2 class="fw-normal"><?php echo get_field('section_3_header')?></h2>
		        <p><?php echo get_field('section_3_text')?></p>
		        <a class="" href="<?php echo get_field('section_3_url')?>">SHOP NOW</a>
		    </div>
	      </div><!-- /.col-lg-4 -->
	     <?php endif; ?>
     
    </div><!-- /.row -->

    <hr class="featurette-divider">
  </div><!-- /.container -->

    <!-- START Section 2 -->
   <div class="container-fluid">
   	<?php $section_bg_image = get_field('bg_image'); ?>
	    <div class="row section2" style="background-image: url(<?php echo esc_url($section_bg_image['url']); ?>)">
	      <div class="col-md-12">
	      	
	      	<div class="section_content" >
	      		<h1><?php echo get_field('sec_2_header_text')?></h1>
	      		<p class="lead"><?php echo get_field('sec_2_text')?></p>
	      		<a class="" href="<?php echo get_field('sec_2_url')?>">READ MORE</a>
	      		<div class="clearfix"></div>
	      	</div>
	        
	      </div>
	    </div>
	</div><!-- /END Section 2 -->

  



	

<?php
//get_sidebar();
get_footer();
