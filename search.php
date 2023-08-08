<?php
/*Template Name: Search Page */
?>

<?php 
get_header(); 
global $wp_query;
$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
?>

<div id="primary" class="col-md-8">
	<main id="mainContent" role="main">

      
      
      
      <h2 class="headings"><?php printf(__( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>
      <p>Found <b><?php echo $total_results = $wp_query->found_posts;?></b> results.</p>
      <div style="width:200px;margin-bottom: 20px;"><?php get_search_form(); ?></div>

      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
          <h3 class="search-results"><a href="<?php the_permalink() ?>">
		  <?php //the_title();

              $title = get_the_title(); $keys= explode(" ",$s); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $title);
              echo $title;
          ?></a>
          </h3>
          
          
          </h3>
          <?php if ('post' == get_post_type()) { ?>
            <small class="gray-dark">Posted <?php echo get_the_date(); ?></small>
          <?php } ?>
          <?php the_excerpt(); ?>
        <?php endwhile; ?>
        <?php //ugdsb_paging_nav(); 
				ugdsb_paging_nav('','', $paged); 
		?>
      <?php else: ?>
        <?php get_template_part( 'content', 'none' ); ?>
      <?php endif; ?>

		</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>