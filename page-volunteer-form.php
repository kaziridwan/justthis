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
   link_custom_css('/volunteer-form.css');
}
add_action('wp_head', 'add_css');

get_header(); ?>
     <!-- Page Content page5a-->

    <!-- section 1 -->
    <div class="content-section-a container">
        <div class="row">          
          <!-- partner-list -->
          <div class="partner-list col-lg-12">
            <div class="col-lg-2">
              <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-4.png" alt="partner image">
            </div>
            <div class="col-lg-9 col-lg-offset-1 partner-info">
                <h1 class="partner-title">
                  Sign Up to Volunteer
                </h1>                           
            </div>
          </div>

          </div>
          
          <!-- /partner-list -->
                    
          <!-- /form legal -->    

          <!-- form -->
          <form action="" method="post" class="form-horizontal " role="form">
            <div class="form-group">
              <label for="card-no" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-3">
                <input type="text" placeholder="First Name" class="form-control" id="card-no">
              </div>
              <div class="col-sm-3">
                <input type="text" placeholder="Last Name" class="form-control" id="card-no">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">Phone</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">Address</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">City</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">State</label>
              <div class="col-sm-4">
                <input type="email" class="form-control" id="x">
              </div>
              <div class="col-sm-2">
                <input type="email" placeholder="Zip Code" class="form-control text-center" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label">Year of Birth</label>
              
              <div class="col-sm-2">
                <input type="email" class="form-control" id="x">
              </div>
            </div>
            <!-- legals/offers -->
            <div class="col-lg-offset-2 text-left title-last-sec">What would You Like to do?</div>
            <br>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label"></label>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> Graphic design creation 
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> Social Media management
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label"></label>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> Phone, videos and editing 
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> Research project 
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-3 control-label"></label>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> Computer stuff: excel, word etc. 
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="checkbox">
                  <label class="pull-left text-left">
                    <input type="checkbox" class="checkbox-lg"> Phone banking and customer services 
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
    </div>
     <!-- /section 1 -->


<?php get_footer(); ?>