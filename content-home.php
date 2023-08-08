
<?php

/**
 * The default template for displaying content
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
<?php 
if (get_the_date() != get_the_modified_date()){ ?>
  <p class="author">Updated <?php echo get_the_modified_date(); ?></p>
<?php
}else{
 ?>
 <p class="author">Posted <?php echo get_the_date(); ?></p>
<?php 
}//if posted date
}//if post type ?>



<?php  

 
if ( has_excerpt ()) {
	the_excerpt();
	echo '<p class="readmore"><a href="'. get_permalink() . '"><strong>Read more about</strong> <cite>'. get_the_title() .'</cite> &#187;</a></p>';
} else {
	$limit = 50; //limit
	$content_text = get_the_content();
	$exceptt= explode(' ', $content_text, $limit);
	if ( count($exceptt) >=$limit) {
		echo content2($limit);	
		//echo '<p class="readmore"><a href="'. get_permalink() . '"><strong>Read more about</strong> <cite>'. get_the_title() .'</cite> &#187;</a></p>';
	}else{
 		echo $content_text;
	}//end else*/
}
?>
<div class="clearboth"></div>
</div>


