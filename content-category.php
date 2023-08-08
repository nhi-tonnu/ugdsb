
<?php

/**
 * The default template for displaying content for Category only
 *
 * Used for both single and index/archive/search. */
 
 
?>
<div class="post-div">

<?php if (is_single()) :
  the_title( '<h2 class="post">', '</h2>' );
else :
  the_title( '<h2 class="post"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
endif; ?>

<?php if ('post' == get_post_type()) { ?>
  <p class="author">Posted <?php echo get_the_date(); ?></p>
<?php } 


if ( has_excerpt ()) {
	the_excerpt();
	echo '<p class="readmore"><a href="'. get_permalink($post->ID) . '"><strong>Read more about</strong> <cite>'. get_the_title($post->ID) .'</cite> &#187;</a></p>';
 }else{
 	echo content(55);
 
 }//end else
 ?>


</div>


