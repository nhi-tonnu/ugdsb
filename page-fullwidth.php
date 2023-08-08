<?php
/**
 * Template Name: Full-width(no sidebar)
 *
 * This is the template that displays full width page without sidebar
 *
 * @package ugdsb
 */

get_header(); ?>

  <div id="primary" class="col-md-12">

    <main id="mainContent" class="site-main" role="main">

      	<?php 
        	while (have_posts()) : the_post(); 
		?>
    	<h1 class="headings"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        
        
        
		<?php
		endwhile;
		wp_reset_query();
    	?>    

    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>
