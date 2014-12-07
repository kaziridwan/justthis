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
get_header(); ?>
     <!-- Page Content page5-->
<div class="container">
  <div class="paypal-donate-container">
      <img class="banner-donate" src="<?php bloginfo('template_url'); ?>/img/page11/child_banner.png" />
  </div>
</div>  

<script>
$(document).ready(function(){
  $('#myModalStatic').modal('show');
});
</script>
<?php get_footer(); ?>