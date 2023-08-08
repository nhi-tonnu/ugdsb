<?php
/**
 * Template Name: School Council Page
 *
 * This is the template that displays school council page with school council specific widgets
 *
 * @package ugdsb
 */
 ?>
<div id="fb-root"></div>
<!--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="dFt8SAr0"></script>-->
<script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=<APP_ID>&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

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
    	
<?php get_sidebar('council'); ?>


<?php get_footer(); ?>
