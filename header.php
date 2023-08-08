<?php
/**
 * The Header for our theme
 *
 * 
 *
 * @package WordPress
 * @subpackage UGDSB
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if (is_front_page()) { ?> 
    <title><?php bloginfo('name'); ?></title>
  <?php } else { ?>
    <title><?php wp_title(''); ?> (<?php bloginfo('name'); ?>)</title>
  <?php } ?>  
<!-- Google Tag Manager  Nhi added November22,2022 -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHWGWRJ');</script>
<!-- End Google Tag Manager -->
<!-- End Google Tag Manager -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 
  <!-- Do we have a custom header image? -->
  <style type="text/css">
     <?php
        if(get_theme_mod('header_background_image')) { ?>
				  header {
					 	
						background:#fff url("<?php echo get_theme_mod_img('header_background_image'); ?>") no-repeat bottom right !important;
						
						padding-top: 25px;
						padding-bottom: 25px;
						text-align: center;	
				  }	
      <?php  }//end if
      if ( 'blank' != get_header_textcolor() ) :
	    ?>
        .site-title a,
		    .site-title a h1,
        .site-description,
		    span.dhs2{color: #<?php echo get_header_textcolor(); ?> !important;}
        #mainContent h1, #mainContent h1.headings, #mainContent h1.home-headings{color: #<?php echo get_header_textcolor(); ?> !important;}
    <?php endif; ?>
  
  </style>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2579289-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-2579289-1');
</script>

<?php wp_head();?>
</head>
<body id="top" <?php body_class(); ?>>
<a href="#mainContent" class="skip-main hidden-print">Skip to Main Content</a>
<div id="mini-topnav">

        <div class="container">
        <div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mininav1" aria-expanded="false" >
            		<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
			    </button>
            
            <a href="https://www.ugdsb.ca" target="_blank" class="navbar-brand">
            <img src="https://www.ugdsb.ca/uploads/static/ugdsb_logo.png" alt="Upper Grand District School Board" ></a>
            

        </div><!-- end navbarheader -->
        <div class="navbar-collapse collapse navbar-right" id="mininav1">
      			
                <ul class="nav navbar-nav">

	             	<li><a href="https://stwdsts.ca/" target="_blank" title="Bus Transportation Information"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_school_bus.png" alt="Bus Transportation Information" style="padding-top:3px;"></a></li>
            <?php if ( of_get_option('custom_header_phone_text', true) != "") { ?>
				 	<li><span class="fa fa-phone"></span><a href="tel:<?php echo of_get_option('custom_header_phone_text', true); ?>" aria-label="phone number"><?php echo of_get_option('custom_header_phone_text', true); ?></a></li>
	             <?php } ?>
                    <?php if ( of_get_option('custom_header_email_text', true) != "") { ?>
				 <li><span class="header-icons fa fa-envelope"></span> <a href="mailto:<?php echo of_get_option('custom_header_email_text', true); ?>"><?php echo of_get_option('custom_header_email_text', true); ?></a></li>
	             <?php } ?>
                   
              <li>
					         <!-- google translation -->
                    <div id="google_translate_element"></div>
					         <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_RIGHT, gaTrack: true, gaId: 'UA-72910739-1'}, 'google_translate_element');
                    }
                    </script>
                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
         
				       </li>
            
      			</ul>
                <!-- search form -->
                <form role="search" class="search-form2" action="<?php echo esc_url(home_url('/')); ?>">
				<input type="search" class="search-field" placeholder="<?php _e( 'Search', 'ugdsb' );?>..."  value="" name="s" title="Search after:"><input type="submit" class="search-submit" value="Search">
				</form>


    		</div><!-- /.navbar-collapse -->  
    </div><!-- end container -->
</div><!-- end mini nav -->


<div id="header-div">
	<div class="container">
    <header>
        <div class="transparent">
        <div class="col-md-3 col-sm-3 hidden-xs" id="schoolLogo">
           				<?php if(get_theme_mod('school_logo')) { 
                
                    ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php
						echo "<img src='".get_theme_mod_img('school_logo')."' title='".esc_attr(get_bloginfo( 'name','display' ) )."' alt='".esc_attr(get_bloginfo( 'name','display' ) )."' width=\"110\" height=\"110\"></a>";	
            //echo "<img src='".$url."' title='".esc_attr(get_bloginfo( 'name','display' ) )."' alt='".esc_attr(get_bloginfo( 'name','display' ) )."' width=\"110\" height=\"110\"></a>"; 
						}
						else { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/ugdsb-logo-circle.png" alt="UGDSB Logo"></a>
							<?php	
							}
						?>
           
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12" id="schoolName">
            <div class="site-title"><a href="<?php echo home_url(); ?>/" class="site-title-link"><h1><?php echo get_bloginfo('name'); ?></h1>
            
            
            <?php if ((of_get_option('custom_header_address1_text', true) != "")&& (of_get_option('custom_header_address2_text', true) != "") 
			&& (of_get_option('custom_header_address3_text', true) != "")) { ?>
            	<span class="dhs2"><?php echo of_get_option('custom_header_address1_text', true); ?>,&nbsp;
                <?php echo of_get_option('custom_header_address2_text', true); ?>&nbsp;
                <?php echo of_get_option('custom_header_address3_text', true); ?></span>
            
            <?php } ?>
            </a>
            </div> 
            
              
        </div><!-- end schoolname -->
    </header><!-- end header -->
    </div><!-- container -->
</div><!-- end header-div -->


<div class="container" id="topNav">
<nav class="navbar navbar-inverse" role="navigation">
			
		        <div class="navbar-header">
                	
		            <button type="button" class="navbar-toggle togglenav" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
					
		        </div><!-- end navheader -->
               
				
				<?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 2,//1 is one level, 2 is sub-dropdown menu
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
                
            		    
</nav><!-- .site-navigation -->

</div><!-- end header -->


<?php //if (!is_front_page()) { ?>
    <?php //the_breadcrumb(); ?>
<?php //} ?>

<div class="container" id="bodyContainer2">

      <?php if (is_front_page()) { 
    // if we have featured content, include the featured content template
    // get_template_part( 'featured-content' ); ?>
    
    <!-- elseif we have a header image, include that -->
    <?php if (has_header_image()) { ?>
      <div class="container" id="featured-pic">
        <img src="<?php echo (get_header_image()); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo (get_bloginfo('title')); ?>" />
      </div>
    <?php } ?>

    <!-- and if we have neither featured content nor a header image, do nothing at all -->
  <?php } ?>

  <?php if (!is_front_page()) { ?>
    <?php the_breadcrumb(); ?>
  <?php } ?>