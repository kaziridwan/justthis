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
   link_custom_css('/page13.css');
}
add_action('wp_head', 'add_css');

get_header(); ?>
     <!-- Page Content page13-->
<div class="container">
        <div class="paypal-login-container">
            <img class="banner-paypal" src="<?php bloginfo('template_url'); ?>/img/page13/child_banner.png" />

            <div class="paypal-form-container container">
                <div class="row">
                  <div class="col-lg-6">
                      <div class="form-header row">
                        <img src="<?php bloginfo('template_url'); ?>/img/page13/paypal.jpeg" alt="" class="pull-left" width="150px" height="70px">

                        <div class="cart pull-right">
                          <p>
                            <i class="fa fa-shopping-cart"></i> $45.00 <i class="fa fa-chevron-down"></i>
                          </p>
                        </div>
                      </div>

                      <div class="col-lg-12 paypal-form">
                          <label for="">
                              Pay with Paypal
                          </label>

                          <form role="form">
                            <div class="form-group">
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="josbello@hotmail.com">
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Log in to Paypal</button>
                            <p style="text-align : center; font-size : 16px; margin-botom : 0px;"><a href="">forgot your password ?</a></p>
                            <div class="form-group or-devider">
                              <hr width="42%"><p style="padding : 5px; padding-left : 15px; padding-right: 15px">or</p> <hr width="42%">  
                            </div>
                            
                            <button type="submit" class="btn btn-inverse">Log in to Paypal</button>
                          </form>
                        </div>

                      </div>


                      <div class="col-lg-6 form-badge">
                          <h3>New. Faster. Easier</h3>
                          <p >
                            Welcome to the PayPal checkout! <br/>
                            The security your rely on now even faster <br/>
                            It's everything checkout should be.
                          </p>
                          <img src="<?php bloginfo('template_url'); ?>/img/page13/paypalimage.png" alt="">
                      </div>
                  </div>

                </div>

            </div>
        </div>  


<?php get_footer(); ?>