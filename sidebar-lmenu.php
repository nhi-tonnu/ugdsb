<?php
/**
 * The menu on the left of the content.
 * Contains a page menu by default.
 * Optionally, replaces page menu with custom menu.
 *
 * @package WordPress
 * @subpackage WRDSB
 * @since WRDSB 1.0
*/
?>
<div id="secondary" class="widget-area col-md-4" role="complementary">

	
	<?php
	$siblings = get_pages(array(
      'sort_order' => 'ASC',
      'sort_column' => 'post_title',
      'hierarchical' => 0,
      'parent' => $post->post_parent,
      'post_type' => 'page',
    ));
    $children = get_pages(array(
      'sort_order' => 'ASC',
      'sort_column' => 'post_title',
      'hierarchical' => 0,
      'parent' => $post->ID,
      'post_type' => 'page',
    ));
	
	//check if the page has any child page, display them if they do
	if(count($children) > 0){ ?>
     	<div class="sub-menu-heading">
          <?php if ($post->post_parent != 0) { ?>
            <h3><a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a></h3>
          <?php } else { ?>
            <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
          <?php } ?>
    	</div>
    
    	<div class="sub-menu-items">
          <ul>
            <?php 
              foreach ($siblings as $sibling) {
                if ($sibling->post_parent != 0) {
                  if ($sibling->ID == $post->ID) {
                    echo '<li>';
                    echo '<strong>';
                    echo '<a href="'.get_permalink($sibling->ID).'">'.$sibling->post_title.'</a>';
                    echo '</strong>';
                  } else {
                    echo '<li>';
                    echo '<a href="'.get_permalink($sibling->ID).'">'.$sibling->post_title.'</a>';
                  }
                }
                if ($sibling->ID == $post->ID && $children) {
                  if ($post->post_parent != 0) {
                    echo '<ul class="nav_current_page_children_container">';
                  } else {
                    echo '<ul>';
                  }
                  foreach ($children as $child) {
                    echo '<li><a href="'.get_permalink($child->ID).'">'.$child->post_title.'</a></li>';
                  }
                  echo '</ul>';
                }
                if ($sibling->post_parent != 0) {
                  if ($sibling->ID == $post->ID) {
                    echo '</strong>';
                  }
                  echo '</li>';
                }
              }
            ?>
          </ul>
        </div><!-- end submenu list -->
    	<?php } else if (is_page() && ($post->post_parent)){ //it is a child page ?>
			<div class="sub-menu-heading">
          		<?php if ($post->post_parent != 0) { ?>
            	<h3><a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a></h3>
          		<?php } else { ?>
            	<h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
          		<?php } ?>
    		</div>
    
    		<div class="sub-menu-items">
          	<ul>
            <?php 
              foreach ($siblings as $sibling) {
                if ($sibling->post_parent != 0) {
                  if ($sibling->ID == $post->ID) {
                    echo '<li>';
                    echo '<strong>';
                    echo '<a href="'.get_permalink($sibling->ID).'">'.$sibling->post_title.'</a>';
                    echo '</strong>';
                  } else {
                    echo '<li>';
                    echo '<a href="'.get_permalink($sibling->ID).'">'.$sibling->post_title.'</a>';
                  }
                }
                if ($sibling->ID == $post->ID && $children) {
                  if ($post->post_parent != 0) {
                    echo '<ul class="nav_current_page_children_container">';
                  } else {
                    echo '<ul>';
                  }
                  foreach ($children as $child) {
                    echo '<li><a href="'.get_permalink($child->ID).'">'.$child->post_title.'</a></li>';
                  }
                  echo '</ul>';
                }
                if ($sibling->post_parent != 0) {
                  if ($sibling->ID == $post->ID) {
                    echo '</strong>';
                  }
                  echo '</li>';
                }
              }
            ?>
          	</ul>
        	</div><!-- end submenu list -->
  		<?php }else {//page is parent without children, display none ?>
        	
        <?php }//else ?>
        
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php endif; ?>

</div><!-- end secondary section -->
