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
   link_custom_css('/page5.css');
}
add_action('wp_head', 'add_css');

get_header(); ?>
     <!-- Page Content page5-->

    <div class="container">
        <div class="donation-proceed-container">
            <p class="subheading">
              You're giving to
            </p>
            <p class="heading">
              General Fund of 
              <?php 
                if($_GET['of'] == '')
                {
                  echo "Fe y Alegría";
                }else{
                  echo $_GET['of'];
                }

               ?>
            </p>

            <p class="signin-info">
              Please <a href="">sign in</a> if you´d like to link this donation to <br/>
            your profile and see where your money goes.
            </p>
            <br>
            <p class="subheading">
              <input type="checkbox">
              By sending your check, you are agreeing with the terms and conditions
            </p>
            <div class="row info-sections">
              <div class="col-lg-6 section-left">
                  <p class="heading">
                    Put this in the memo of your check so we can <br/>
                    track it to the correct campaign.
                  </p>
                  <div class="card">
                    <p>MYCW-55047</p>
                  </div>
              </div>
              <div class="col-lg-6 section-right">
                <p class="heading">
                  Then, send away! You´ll receive an official tax <br/>
                  receipt 3-4 weeks after your check is processed.
                </p>

                  <div class="card">
                      <p>
                          Friends of Fe y Alegria/ <br/>
                          Magis America <br/>
                          1016 16th St NW, Ste400, <br/>
                          Washington, DC 20036
                      </p>
                  </div>
              </div>
            </div>

            <button>Back to this <br/>Campaign</button>

        </div>
    </div>
     <!-- /section 1 -->

<?php get_footer(); ?>