<?php get_header(); ?>

<?php $has_left = FALSE; ?>
<?php $has_right = FALSE; ?>
<?php //if (is_active_sidebar('sidebar-left') || has_nav_menu('left')) {$has_left = TRUE;} ?>
<?php if (is_active_sidebar('sidebar-1') || has_nav_menu('right')) {$has_right = TRUE;} ?>



<?php
    # Both sidebars
    # content area
    if (($has_left == TRUE) and ($has_right == TRUE)):
      echo '<div class="col-sm-6 col-md-8 col-lg-8">';
    # Just left sidebar
    elseif (($has_left == TRUE) and ($has_right == FALSE)):
      echo '<div class="col-sm-9 col-lg-9">';
    # Just right sidebar
    elseif (($has_left == FALSE) and ($has_right == TRUE)):
      echo '<div class="col-sm-8" id="primary"><main id="mainContent" role="main">';
    # No sidebars
    elseif (($has_left == FALSE) and ($has_right == FALSE)):
      echo '<div class="col-sm-12 col-lg-12"><main id="mainContent" role="main">';
    endif;
?>

<?php       //start the loop
        	while (have_posts()) : the_post(); 
		?>
        
        <?php if (is_single()) :
  			the_title( '<h2 class="headings">', '</h2>' );
			else :
  			the_title( '<h2 class="headings"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>

		<?php if ('post' == get_post_type()) { ?>
  			<p class="author">Posted <?php echo get_the_date(); ?></p>
		<?php } ?>

        <p><?php the_content(); ?></p>
        
      
        
		<?php
		endwhile;
		wp_reset_query();
    	?>    
        
        

<?php
	$igc=0;
	foreach((get_the_category()) as $category) {
	    if (strtolower($category->cat_name) != 'uncategorized') {
			$igc = 1;
		}
	}
	if ($igc == 1) {
		$display_cats = 1;
	}
	$number_of_tags = count(get_the_tags());
	//if ($number_of_tags > 0) {
	if (get_the_tags()) {
		$display_tags = 1;
	}
	if (!isset($display_cats) && isset($display_tags)) {
		echo '<div class="clearfix"></div>';
		echo '<p class="categories gray-dark small">Tags: ';
                the_tags('',' &bull; ','');
                echo '</p>';
	} elseif (isset($display_cats) && !isset($display_tags)) {
		echo '<div class="clearfix"></div>';
		echo '<p class="categories gray-dark small">Categories: ';
                the_category(' &bull; ');
                echo '</p>';
	} elseif (isset($display_cats) && isset($display_tags)) {
		echo '<div class="clearfix"></div>';
		echo '<p class="categories gray-dark small">Categories: ';
                the_category(' &bull; ');
                echo ' Tags: ';
                the_tags('',' &bull; ','');
                echo '</p>';
	}
?>


</div><!-- mainContent -->


<?php
    # Both sidebars
    # right column
    if (($has_left == TRUE) and ($has_right == TRUE)):
      echo '<div class="col-sm-3 col-md-2 col-lg-2">';
      if (!is_front_page()) {
        get_sidebar('rmenu');
      }
      get_sidebar('right');
      echo '</div>';

    # Just left sidebar
      # Nothing to do

    # Just right sidebar
    elseif (($has_left == FALSE) and ($has_right == TRUE)):
      	//echo '<div class="col-sm-3 col-md-4 col-lg-2" style="float:right;">';
      	get_sidebar();


    # No sidebars
      # Nothing to do

    endif;
?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>
