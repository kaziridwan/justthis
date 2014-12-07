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
}
add_action('wp_head', 'add_css');

get_header(); ?>
     <!-- Page Content page5a-->

    <!-- section 1 -->
    <div class="content-section-a container">
        <div class="row">
          <div class="col-lg-12 learn-button">
            <button class="btn btn-primary btn-lg btn-learn col-lg-2 pull-left">
              <h3>LEARN</h3> 
              <h3>MORE</h3>
            </button>
          </div>
          <!-- partner-list -->
          <div class="partner-list col-lg-12">
            <div class="col-lg-2">
              <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/page5/donate.jpg" alt="partner image">
            </div>
            <div class="col-lg-9 partner-info">
                <h1 class="partner-title">
                  Friends of Fe y Alegría in the United States
                </h1>
                <div class="partner-info">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                </div>              
            </div>
          </div>
          <div class="partner-list col-lg-12">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-3">
              <h1><a href="./general-fund">General Fund</a></h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat
              </p>
            </div>
            <div class="col-lg-1"></div>  
            <div class="col-lg-6">
              <h1>Projects by country</h1>
              <p>
                <input class="btn btn-lg search-input" type="text" placeholder="Search By Name">
                  <button class="btn btn-lg btn-inverse">SEARCH</button>
              </p>
            </div>


            </div>
          </div>
          
          <!-- /partner-list -->
          
          <!-- form legal -->
          <div class="legal">
            You're donating <span class="text-success">$40,000</span> by credit card
            <p>Give by check</p>
          </div>
          <br>
          
          <!-- /form legal -->    

          <!-- form -->
          <form action="" method="post" class="form-horizontal " role="form">
            <div class="form-group">
              <label for="card-no" class="col-sm-2 control-label">card number</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="card-no">
              </div>
            </div>
            <div class="form-group">
              <label for="exp-month" class="col-sm-2 control-label">expiration date</label>
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
              <label for="x" class="col-sm-2 control-label">name</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label">email</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label"><span>*optional</span>phone</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label">email</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label">billing address</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x" placeholder="line 1">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label">billing address</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x" placeholder="line 2">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label">city</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="x">
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label">country</label>
              <div class="col-sm-6">
                <select class="form-control" name="country" >
                  <option value="7">United States</option>
                  <option value="8">United Kingdom</option>
                  <option value="9">United Arab Emirates</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label">state / province</label>
              
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
              <label for="x" class="col-sm-2 control-label"></label>
              <div class="col-sm-6">
                <div class="checkbox">
                  <label class="pull-left">
                    <input type="checkbox" class="checkbox-lg"> I would like to make this a recurring monthly donation 
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label"></label>
              <div class="col-sm-6">
                <div class="checkbox">
                  <label class="pull-left">
                    <input type="checkbox" class="checkbox-lg"> keep me posted lorem ipsum
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="x" class="col-sm-2 control-label"></label>
              <div class="col-sm-6">
                <div class="checkbox">
                  <label class="pull-left">
                    <input type="checkbox" class="checkbox-lg"> I agree to <a href="#">terms and conditions</a>
                  </label>
                </div>
              </div>
            </div>
            <!-- / legals/offers -->
            .
            <div class="form-group col-lg-8">
              <br>
              <input type="submit" class="btn btn-lg btn-success" value="SUBMIT DONATION">
            </div>
          </form>
          <!-- / -->

        </div>
    </div>
     <!-- /section 1 -->


<?php get_footer(); ?>