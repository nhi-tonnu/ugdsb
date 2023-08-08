<?php
/**
 * Template Name: Community Page
 *
 * This is the template that displays community page with community specific widgets
 *
 * @package ugdsb
 */
 ?>

<?php get_header(); ?>

<div id="primary" class="col-md-8">
		<main id="mainContent" role="main">
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
    	
<?php get_sidebar('community'); ?>


<?php get_footer(); ?>
