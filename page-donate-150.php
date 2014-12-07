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
<div class="modal fade" id="donate15Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content donate-form" >
                  <img class="modal-logo" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-1.png" alt="">
                  <p class="">You're giving to</p>

                  <p class="fund-name">
                    Campo de Pelota en Maracaibo
                  </p>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name">
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="$                                              150                                       USD" 
                    class="form-control">
                  </div>
                  
                
               <div class="checkbox">
                <label>
                  <input type="checkbox">donate anonymously</label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox">keep me posted on Fe Y Alegria news</label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox">I agree to <u>terms and conditions</u></label>
              </div>
              <br>
              <div>
              <div class="row">
                <div class="col-lg-6">
                  <a href="<?php site_root() ?>/donate-paypal"><button class="btn-inverse small" style="padding: 15px 22px;"> GIVE BY PAYPAL</button></a>
                </div>
                <div class="col-lg-6">
                  <a href="<?php site_root() ?>/donate-visa"><button class="btn-inverse small">GIVE BY CREDIT CARD</button></a>
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
  $('#donate15Modal').modal('show');
});
</script>
<?php get_footer(); ?>