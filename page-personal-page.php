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
   link_custom_css('/partners.css');
   link_custom_css('/page5a.css');
   link_custom_css('/personal-page.css');
}
add_action('wp_head', 'add_css');
get_header(); ?>
     <!-- Page Content page5-->
<div class="container">
  <div class="paypal-donate-container">
      <img class="banner-donate" src="<?php bloginfo('template_url'); ?>/img/page11/child_banner.png" />
  </div>
	<div class="row">          
          <!-- partner-list -->
          <div class="partner-list col-lg-12 col-lg-offset-1">
           
          </div>

          </div>
          
          <!-- /partner-list -->
                    
          <!-- /form legal -->    

          <!-- form -->
          <div class="upload-img"><i class="fa fa-camera fa-2x"></i></div>
          <form action="" method="post" class="form-horizontal col-lg-offset-2" role="form">
            <div class="form-group">
              <label for="card-no" class="col-sm-3 control-label">card number</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="card-no">
              </div>
            </div>
            <div class="form-group">
              <label for="exp-month" class="col-sm-3 control-label">expiration date</label>
              <div class="col-sm-1">
                <select class="form-control col-sm-1 col-lg-1" name="exp-month" id="exp-month">
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                </select>
              </div>
              <div class="col-sm-2">
                <select class="form-control col-sm-1 col-lg-1" name="exp-month" id="exp-month">
                  <option value="7">2014</option>
                  <option value="8">2015</option>
                  <option value="9">2016</option>
                </select>
              </div>
              <label for="cvv" class="col-sm-1 control-label">CVV <span>?</span></label>
              <div class="col-sm-2">
                <input class="form-control"type="text" id="cvv">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">name</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">email</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label"><span>*optional</span>phone</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">email</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">billing address</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x" placeholder="line 1">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">billing address</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x" placeholder="line 2">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">city</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">country</label>
              <div class="col-sm-6">
                <select class="form-control" name="country" >
                  <option value="7">United States</option>
                  <option value="8">United Kingdom</option>
                  <option value="9">United Arab Emirates</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">state / province</label>
              
              <div class="col-sm-4">
                <select class="form-control" name="" id="">
                  <option value="7">NY</option>
                  <option value="8">**</option>
                  <option value="9">**</option>
                </select>
              </div>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="x" placeholder="zip code">
              </div>
            </div>
            <!-- legals/offers -->
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label"></label>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> I would like to make this a recurring monthly donation 
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> I would like to make this a recurring monthly donation 
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label"></label>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> I would like to make this a recurring monthly donation 
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> I would like to make this a recurring monthly donation 
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label"></label>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> I would like to make this a recurring monthly donation 
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> I would like to make this a recurring monthly donation 
                  </label>
                </div>
              </div>
            </div>
            <br>
            <!-- / legals/offers -->
            <input type="submit" class="btn btn-lg btn-primary" value="Sign Up">
            
          </form>
          <!-- / -->

        </div>
        
<?php get_footer(); ?>