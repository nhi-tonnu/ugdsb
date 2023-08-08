<?php
/**
/**
 * Template Name: Staff List
 *
 * This is the template that displays Staff List
 *
 * @package ugdsb
 */
?>


<?php 

//$user_query = new WP_User_Query(array('meta_key' => 'wrdsb_display_in_staff_list', 'meta_value' => 1, 'order' => 'ASC')); 

//pagination vars
$current_page = get_query_var('paged') ? (int)get_query_var('paged') : 1;
$users_per_page = (isset($_GET["users_per_page"])) ? $_GET["users_per_page"] : 1000;
$orderby = ! empty( $_GET['orderby'] ) ? $_GET['orderby'] : 'last_name';
$order   = ! empty( $_GET['order'] ) ? $_GET['order'] : 'ASC';

//get search value 
$search = ( isset($_GET["as"]) ) ? sanitize_text_field($_GET["as"]) : false ;


if($search){
	$args = array(
	'number' => $users_per_page, //how many per page
	'paged' => $current_page, //what page to get, starting from page1
	'meta_key' => 'wrdsb_display_in_staff_list', 
	'meta_value' => 1, 
	'fields' => 'all',
	'order' => $order,
	'orderby' => $orderby,
	'search' => '*' . esc_attr($search) . '*',
	'search_columns' => array('first_name','last_name', 'description', 'email'),
	'meta_query' => array(
        'relation' => 'OR',
        array(
            'key'     => 'first_name',
            'value'   => $search,
            'compare' => 'LIKE'
        ),
        array(
            'key'     => 'last_name',
            'value'   => $search,
            'compare' => 'LIKE'
        ),
        array(
            'key' => 'description',
            'value' => $search,
            'compare' => 'LIKE'
        ),
		array(
            'key' => 'email',
            'value' => $search,
            'compare' => 'LIKE'
        )
    )
);
}else{
	/*$args = array(
	'number' => $users_per_page, //how many per page
	'paged' => $current_page, //what page to get, starting from page1
	'meta_key' => 'wrdsb_display_in_staff_list', 
	'meta_value' => 1, 
	'order' => $order,
	'orderby' => $orderby
	);*/
	$args = array(
	'number' => $users_per_page, //how many per page
	'paged' => $current_page, //what page to get, starting from page1
	'meta_key' => 'wrdsb_display_in_staff_list', 
	'meta_value' => 1, 
	'order' => $order,
	'orderby' => $orderby, 
	/*'meta_query' => array( 'order_clause' => array('key' => $orderby))*/
	
	);
}
$current_blogID = get_current_blog_id();//get current blog id


$user_query = new WP_User_Query($args);


$total_users = $user_query->get_total(); //how many users in total
$num_pages = ceil($total_users / $users_per_page);//How many pages of users we will need

if($total_users < $users_per_page){
	$users_per_page = $total_users;
}

//Augu30,2021 - to remove column Role from the table display the staff list
$role_col = 1;
$aa = 1;
if ($current_blogID == 17){
	$role_col = 0;
	//echo 'blogID='.$current_blogID;
}


?>

<?php get_header(); ?>

<div id="primary" class="col-md-12">
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

<?php
      // User Loop
      if (!empty($user_query->results)) { ?>
        
        <div class="table-responsive list-staff-table" >
          <table class="table table-striped table-bordered table-fixed-head" data-toggle="table" data-sort-name="role" id="stafflist_table" width="99%">
            <thead>
              <tr>
                <th class="text-left" data-field="name" data-sortable="true"><span style="font-size: 14px;">First Name</span> </th>
                <th class="text-left" data-field="lastname"><span style="font-size: 14px;">Last Name</span></th>
                <? 
				 if ($role_col == $aa){ ?>
					 <th class='text-left' data-field='role' data-sortable='true'><span style='font-size: 14px;'>Role</span></th>
			    <?
				 }//end if
				?>
                
                <th class="text-left" data-field="email" data-sortable="true"><span style="font-size: 14px;">Email 1</span> </th>
                <th class="text-left" data-field="voicemail" data-sortable="true"><span style="font-size: 14px;">Email 2</span></th>
                <th class="text-left" data-field="extension" data-sortable="true"><span style="font-size: 14px;">Extension</span></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($user_query->results as $user) { ?>
                <tr>
                  <td>
				   <?php if ($user->wrdsb_website_url != NULL) { 
				    	echo "<a href='".$user->wrdsb_website_url."' target='_blank'>".$user->first_name."</a>";
				   }else{
					   echo $user->first_name;
				   }
				   ?>
				   </td>
                  <td> 
				  <?php 
				  if ($user->wrdsb_website_url != NULL) { 
				    	echo "<a href='".$user->wrdsb_website_url."' target='_blank'>".$user->last_name."</a>";
				   }else{
					   echo $user->last_name;
				   }
				   ?>
				  </td>
                  <? 
				 if ($role_col == $aa){ ?>
					 <td><?php  echo $user->description; ?></td>
			    <?
				 }//end if
				 else{
					 echo ''; 
				 }
				?>
                  <td width="15%"><!-- email 1 -->
                  		<?php echo $user->user_nicename.'<code>&#64;</code>ugdsb.on.ca';?>
                  </td>
                  <td width="15%"><!-- email 2-->
				  		<?php //echo $user->wrdsb_voicemail;
							echo $user->user_login.'<code>&#64;</code>ugcloud.ca';
						?>   
                  </td>
                  <td width="7%"><!-- voicemail extension-->
				  		<?php 
						$primary_blog = '';
						$primary_blog =  $user->primary_blog;
						$ext_per_blog = 'wp_'.$current_blogID.'_extension';
						$ext_primary_blog = 'wp_'.$primary_blog.'_extension';
						$ugdsb_ext = 'wrdsb_voicemail';
						
						//get extension
						$usr_ext_blog = get_user_meta($user->ID, $ext_per_blog, true);
						$usr_ugdsb_voicemail = get_user_meta($user->ID, $ugdsb_ext, true);
						$usr_ext_primary_blog = get_user_meta($user->ID, $ext_primary_blog , true); 
						
						if($usr_ext_blog != NULL){//first check if this user has extension per current blogID
							echo $usr_ext_blog;
						}else{
							if($user->wp_extension != NULL){
								echo $user->wp_extension;
								
							}
							else{
								if($usr_ext_primary_blog !=NULL){
									echo $usr_ext_primary_blog; 
								}
								else if($usr_ugdsb_voicemail != NULL){ //check if they manually enter their own voicemail
									echo $usr_ugdsb_voicemail;
								}
								else{
									//no extension	
								}
							}
						}//no extension for the specific school
						
						?>   
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        
        

        
      <?php
      } else {
	echo '<p>No member(s) found.</p>';
      } ?>
    
      

	
          
</main><!-- #main -->        
</div><!-- #primary -->
    	


<?php get_footer(); ?>
