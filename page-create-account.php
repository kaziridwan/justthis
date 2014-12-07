<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Fe Y Alegria
 */
if($_POST){
	echo "posted";
	$user_id = wp_create_user($_POST['first_name'], $_POST['password'], $_POST['email']);//yes!!!!!.
	$userinfo = array(
       'ID' => $user_id,
       'first_name' => $_POST['first_name'],
       'last_name' => $_POST['last_name'],
    );

    // Update the WordPress User object with first and last name.
    wp_update_user($userinfo);
    // exit();
    // Add the company as user metadata
    update_usermeta($user_id, 'date_of_birth', $_POST['month']."-".$_POST['day']."-".$_POST['year']);

}

function add_css()
{
   link_custom_css('/create-personal-page.css');
}
add_action('wp_head', 'add_css');
get_header(); ?>
<!-- modal -->
<div class="modal fade" id="createPersonalCampModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content donate-form" >
						<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" id="regForm">
						<!-- <form action="<?php site_root() ?>/create-account" method="post" id="regForm"> -->
						<img class="modal-logo" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-1.png" alt="">
						
						<div class="form-group">
							Create an account
							<img src="<?php bloginfo('template_url'); ?>/img/reg/fb-btn.png" class="block cursor big-btn" alt="">
						</div>
						<div class="form-group">
							<input name="first_name" type="text" placeholder="First Name" class="form-control" required>
						</div>

						<div class="form-group">
							<input name="last_name" type="text" placeholder="Last Name" class="form-control" required>
						</div>
						<div class="form-group">
							<input name="email" type="email" placeholder="Email" class="form-control">
						</div>
						<div class="form-group">
							<input name="password" type="password" placeholder="Create a Password" class="form-control">
						</div>

						<div class="form-group">
							Date of Birth
							<div class="row">
								<div class="col-lg-4">
									<input name="month" type="text" placeholder="Month" class="form-control" id="month">
								</div>
								<div class="col-lg-4">
									<input name="day" type="text" placeholder="Day" class="form-control" id="day">
								</div>
								<div class="col-lg-4">
									<input name="year" type="text" placeholder="Year" class="form-control" id="year">
								</div>
							</div>								
						</div>
						<div class="form-group"> 
							<a onclick="document.getElementById('regForm').submit();">
								<img src="<?php bloginfo('template_url'); ?>/img/reg/email-btn.png" class="block cursor big-btn" alt="">							
							</a>
						</div>
					 </form>
						
				</div>
			</div>
		</div>
<!-- /modal -->
     <!-- Page Content page5-->
<div class="container">
  <div class="paypal-donate-container">
      <img class="banner-donate" src="<?php bloginfo('template_url'); ?>/img/page11/child_banner.png" />
  </div>
</div>  

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
$(document).ready(function(){
 	$('#createPersonalCampModal').modal('show');


    // $( "#date" ).datepicker();
    // $( "#month" ).datepicker();
    // $( "#year" ).datepicker();

});
</script>
<?php get_footer(); ?>