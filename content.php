
<?php

/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search. */
 
 
?>
<div class="post-div">
<?php if (is_single()) :
  the_title( '<h3 class="post">', '</h3>' );
else :
  the_title( '<h3 class="post"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
endif; ?>

<?php if ('post' == get_post_type()) { ?>
  <p class="author">Posted <?php echo get_the_date(); ?></p>
<?php } ?>


<?php 
if ( has_excerpt ()) {
	the_excerpt();
	echo '<p class="readmore"><a href="'. get_permalink($post->ID) . '"><strong>Read more about</strong> <cite>'. get_the_title($post->ID) .'</cite> &#187;</a></p>';
} else {
	the_excerpt();
}
 ?>

</div>
<?php
/*
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
*/
?>
