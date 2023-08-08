<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ugdsb
 */
?>

<?php //the_post_thumbnail( 'ugdsb-featured', array( 'class' => 'single-featured' )); ?>

<div class="post-inner-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
</div>