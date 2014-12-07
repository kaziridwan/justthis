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
   link_custom_css('/page17.css');
}
add_action('wp_head', 'add_css');

get_header(); ?>
<!-- Page Content page17-->
<div class="container payment-successful-container">
  <img src="<?php bloginfo('template_url'); ?>/img/page17/right.png" alt="">
  <p class="lead">Thanks Jose</p>
  <p>You are going to be a great volunteer.</p>
  <p>Check your email for further instructions.</p>
  <p>Welcome aboard and thanks to join our mission !</p>
</div>


<?php get_footer(); ?>