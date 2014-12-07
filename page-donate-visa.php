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
   link_custom_css('/donate-visa.css');
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
                    <?php 
                      if($_GET['of'] == '')
                      {
                        echo "Campo de Pelota en Maracaibo";
                      }else{
                        echo "<small>General Fund of</small> <br>".$_GET['of'];
                      }

                     ?>
                  </p>
                  <div class="form-group">
                    <input type="text" placeholder="$                                                                                         USD" 
                    class="form-control"></div>
                  <div class="form-group">
                    <input type="text" placeholder="Credit Card" class="form-control">
                    <img src="<?php bloginfo('template_url');?>/img/donate-info/visa-icon.png" class="visa-icon" alt="">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <input type="text" class="form-control" placeholder="MM/YY"></div>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" placeholder="CVC"></div>
                    </div>
                  </div>

                  <p class="text-center">Lorem ipsum Velit nulla eu elit fugiat dolor consequat laboris pariatur adipisicing elit ea aute anim mollit sit Duis.</p>

              

              <div class="form-group">
                    <input type="submit" value="DONATE" class="form-control btn-inverse"></div>
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