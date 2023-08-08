<?php get_header(); ?>


<div id="primary" class="col-md-8">
	<main id="mainContent" role="main">
		
		<h1 class="headings"><?php single_cat_title(); ?></h1>
			<div id="category-description">
			<?php echo category_description(); ?> 
		</div>
		<?php
		
		while ( have_posts() ) : the_post();
      		// Include the post format-specific content template.
      		//if category has slug of newsletterfull or newsletter-html then display using template content-categoryfull.php
      		
			if((is_category('newsletterfull'))||(is_category('newsletter-html'))){
				get_template_part( 'content', 'categoryfull');
			}else{
				get_template_part( 'content', 'category');
			}
      
    	endwhile;

    	// Previous/next post navigation.
    	ugdsb_paging_nav();
		?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
