<?php
/**
 * The template for displaying the footer
 *
 * Displays from <div class="footer"> to </html>
 *
 * @package WordPress
 * @subpackage UGDSB
 */
?>



</div><!--end container -->

<footer class="site-footer" role="contentinfo">
	<div class="footer" id="footer-row">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <!-- automate address -->

              <?php 
                // from plugin wrdsb_schools_contact.php
                if (function_exists('ugdsb_school_info_display')) {
                  	ugdsb_school_info_display();
                }
                else {
                  ?>
                  <h2>Upper Grand District School Board</h2>
              <address>500 Victoria Street N.<br />
               Guelph, ON N1E 6K2<br />
              </address>
              <address>
                Switchboard: 519-822-4420<br />
                <a href="#">Contact Information</a><br />
                <a href="#">Website Feedback Form</a>
              </address>
              <?php  
                }
              ?>
              
              
             
            </div>
            <div class="col-sm-6 col-md-4 social-icons">
            	<h2>Stay Connected</h2>
                <?php if ( of_get_option('social_facebook', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('social_facebook', true)); ?>" title="Facebook" ><span class="social-icon fa fa-facebook-square"></span><span class="sr-only">Follow Us on Facebook</span></a>
	             <?php } ?>
	            <?php if ( of_get_option('social_twitter', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('social_twitter', true)); ?>" title="Twitter" ><span class="social-icon fa fa-twitter-square"></span><span class="sr-only">Follow Us on Twitter</span></a>
	             <?php } ?>
	            
	             <?php if ( of_get_option('social_instagram', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('social_instagram', true)); ?>" title="Instagram" ><span class="social-icon fa fa-instagram"></span><span class="sr-only">Follow Us on Instagram</span></a>
	             <?php } ?>
	             
                 <?php if ( of_get_option('social_google', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('social_google', true)); ?>" title="Google Plus" ><span class="social-icon fa fa-google-plus-square"></span><span class="sr-only">Follow Us on Google Plus</span></a>
	             <?php } ?>
	             <?php if ( of_get_option('social_feed', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('social_feed', true)); ?>" title="RSS Feeds" ><span class="social-icon fa fa-rss-square"></span><span class="sr-only">Follow Us on FeedBurner</span></a>
	             <?php } ?>
	             <?php if ( of_get_option('social_pinterest', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('social_pinterest', true)); ?>" title="Pinterest" ><span class="social-icon fa fa-pinterest-square"></span><span class="sr-only">Follow Us on Pinterest</span></a>
	             <?php } ?>
                 <?php if ( of_get_option('social_linkedin', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('social_linkedin', true)); ?>" title="LinkedIn" ><span class="social-icon fa fa-linkedin-square"></span><span class="sr-only">Follow Us on LinkedIn</span></a>
	             <?php } ?>
	             <?php if ( of_get_option('social_youtube', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('social_youtube', true)); ?>" title="YouTube" ><span class="social-icon fa fa-youtube-square"></span><span class="sr-only">Follow Us on YouTube</span></a>
	             <?php } ?>
	             <?php if ( of_get_option('social_flickr', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('social_flickr', true)); ?>" title="Flickr" ><span class="social-icon fa fa-flickr"></span><span class="sr-only">Follow Us on Flickr</span></a>
	             <?php } ?>
                 
              
            </div><!-- SOCIAL LINKS -->
            <div class="col-sm-6 col-md-4">
            	<!-- SCRIPT TO SEE THE SCREENSIZE -->
                <!--<span id="monitor"></span>-->
                
                <h2>Quick Links from UGDSB</h2>
                <ul class="footer-links">
                <li><a href="https://www.ugdsb.ca/accessibility" target="_blank" title="Accessibility at UGDSB">Accessibility at UGDSB</a></li>
                <li><a href="https://www.ugdsb.ca/basp" target="_blank" title="Before and After School Programs">Before And/or After School Programs</a></li>
                <li><a href="https://www.ugdsb.ca/fi/" target="_blank" title="French Immersion at UGDSB">French Immersion at UGDSB</a></li>
                <li><a href="https://webapps.ugdsb.on.ca/reportbullying/" target="_blank" title="Report Bullying Online Tool">Report Bullying Online Tool</a></li>
                <li><a href="https://ugdsb.schoolcashonline.com/" target="_blank" title="School Cash online">School Cash Online</a></li>
                <li><a href="https://www.ugdsb.ca/schools/school-year-calendars/" target="_blank" title="School Year Calendars">School Year Calendars</a></li>
                <li><a href="http://www.ugcloud.ca" target="_blank" title="UGCloud.ca Upper Grand District School Board - Single Sign On">UGCloud</a></li>
                <li><a href="https://www.ugdsb.ca/parents/school-messenger-app/" target="_blank" title="Stay Connected to your school">SchoolMessenger - Stay Connected to Your School</a></li>
                <li><a href="https://www.ugdsb.ca/programs/special-education/support-documents-for-parents-guardians/" target="_blank" title="Special Education Parent Resources">Special Education Parent Resources</a></li>

                <li><a href="https://www.uppergrandlearningfoundation.com/" target="_blank" title="Upper Grand Learning Foundation">Upper Grand Learning Foundation</a></li>
                </ul>
            	
                <?php // if ( is_active_sidebar( 'footer-right' ) ) : ?>
                	<?php //dynamic_sidebar( 'footer-right' ); ?>
              	<?php //endif; ?>
            </div><!-- right widget -->
            
            
          </div><!-- row -->
        </div><!-- container -->
      </div><!-- footer top row -->
      

	  <div id="bottom_footer">
      		<div class="container">
            	<div class="col-md-12 pull-left">
                    <ul class="list-inline">
                    <li><a href="https://www.ugdsb.ca/login" target="_blank" class="footer-text">Admin Login</a></li>
                    <li><a href="https://www.ugdsb.ca/board/copyright-and-usage/" target="_blank">Copyright</a></li>
                    <li><a href="https://www.ugdsb.ca/board/personal-information-and-privacy/" target="_blank">Privacy</a></li>
                	<?php
					if ( (function_exists( 'of_get_option' ) && (of_get_option('custom_footer_text', true) != 1) ) ) {
					
			 			echo "<li>".of_get_option('custom_footer_text', true)."</li>"; } 
					
				    ?> 
                     
                	</ul>
                    <a href="#top" id="smoothup" title="Back to top"><span class="sr-only">Go to Top</span></a>
                </div>
             </div> 
             
      </div><!-- footer bottom row -->
      
</footer>  
<script>
    jQuery(document).ready( function () {

        jQuery('#stafflist_table').DataTable( {
        "order": [[ 1, "asc" ]], 
		paging: false, 
		responsive: true,
    } );
} );
</script>     
    
<?php wp_footer(); ?>
</body>
</html>