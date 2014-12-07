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
						<img class="modal-logo" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-1.png" alt="">
						
						<div class="form-group">
							Campaign Name
							<input type="text" placeholder="Campo de Pelota en Maracaibo" readonly class="form-control">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									Fundraising Goal
									<input type="text" class="form-control" placeholder="$300">
								</div>
								<div class="col-lg-6">
									Campaign End Date
									<input type="text" class="form-control" placeholder="MM/DD/YYYY">
								</div>
							</div>								
						</div>
						<div class="form-group">
							Personal Message
							<textarea type="textarea" placeholder="" class="form-control personal-message"></textarea>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<a href="<?php site_root() ?>/personal-page/"><button class="form-control btn-inverse">PERSONAL PAGE</button></a>
								</div>
								<div class="col-lg-6">
									<a href="<?php site_root() ?>/personal-campaign"><button class="form-control btn-inverse">CAMPAIGN PAGE</button></a>
								</div>
							</div>								
						</div>
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

<script>
$(document).ready(function(){
  $('#createPersonalCampModal').modal('show');
});
</script>
<?php get_footer(); ?>