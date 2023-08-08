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
    	
<?php get_sidebar('lmenu'); ?>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
