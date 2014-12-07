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
   link_custom_css('/donate-info.css');
}
add_action('wp_head', 'add_css');

get_header(); ?>
     <!-- Page Content page5a-->

    <!-- section 1 -->
    <div class="content-section-a container">
        <div class="row">
          <!-- donate-list -->
          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
              <button class="btn btn-primary btn-lg btn-head pull-left">
              <h4>GET</h4> 
              <h4>INVOLVED</h4>
            </button>
            </div>
            <div class="col-lg-9 partner-info">
                <div class="donate-op col-lg-2">
                  <div class="donate-icon"><img src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-1.png" alt=""></div>
                  <div class="donate-op-title text-center-">Donate</div>
                </div>
                <div class="donate-op col-lg-2">
                  <div class="donate-icon"><img src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-2.png" alt=""></div>
                  <div class="donate-op-title text-center-">Fundraise</div>
                </div>
                <div class="donate-op col-lg-2">
                  <div class="donate-icon"><img src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-3.png" alt=""></div>
                  <div class="donate-op-title text-center-">More</div>
                </div>
                <div class="donate-op col-lg-2">
                  <div class="donate-icon"><img src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-4.png" alt=""></div>
                  <div class="donate-op-title text-center-">Volunteer</div>
                </div>
                <div class="donate-op col-lg-2">
                  <div class="donate-icon"><img src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-5.png" alt=""></div>
                  <div class="donate-op-title text-center-">Social Media</div>
                </div>
            </div>
          </div>

          <div class="partner-list col-lg-12">
            <div class="col-lg-2">
              <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-1.png" alt="partner image">
            </div>
            <div class="col-lg-9 col-lg-offset-1 partner-info">
                <h1 class="partner-title">
                  Donate 
                  <button class="btn btn-danger header-btn" data-toggle="modal" data-target="#myModal">DONATE</button>
                </h1>
                <div class="partner-info">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                </div>              
            </div>
          </div>

          <div class="partner-list col-lg-12">
            <div class="col-lg-9 col-lg-offset-3">
              <h1><a href="./general-fund">General Fund</a></h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat
              </p>
            </div>
            <div class="col-lg-9 col-lg-offset-3">
              <h1>Projects by country</h1>
              <p>
                <div class="col-lg-6 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat
                </div>
                  <button class="btn btn-lg btn-inverse pull-right">SEARCH</button>
                <input class="btn btn-lg search-input pull-right" type="text" placeholder="COUNTRY NAME">
              </p>
            </div>
          </div>
          
          <div class="partner-list col-lg-12">
            <div class="col-lg-2">
              <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-2.png" alt="partner image">
            </div>
            <div class="col-lg-9 col-lg-offset-1 partner-info">
                <h1 class="partner-title">
                  Fundraise
                </h1>
                <div class="partner-info">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                </div>              
            </div>
          </div>

          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-4">
              <h1>Select a Project</h1>
            </div> 
            <div class="col-lg-5">
              <h1></h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat
              </p>
            </div>
          </div>
          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-4">
              <h1>Join a Team</h1>
            </div> 
            <div class="col-lg-5">
              <h1></h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat
              </p>
            </div>
          </div>
          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
              <h1></h1>               
            </div>
            <div class="col-lg-1"></div>  
            <div class="col-lg-5">
              <h1>Search Projects or Teams</h1>
              <p>
                <input class="btn btn-lg search-input" type="text" placeholder="Project or Team Name">
                  <button class="btn btn-lg btn-inverse">SEARCH</button>
              </p>
            </div>
          </div>
          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-4">
              <h1>Create a Campaign</h1>
            </div> 
            <div class="col-lg-5">
              <h1></h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat
              </p>
            </div>
          </div>      

          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
              <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-3.png" alt="partner image">
            </div>
          <div class="col-lg-8 partner-info">
                <h1 class="partner-title">
                  Other Forms of Donation
                </h1>
                <div class="partner-info">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                </div>              
            </div>
          </div>
          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-4">
              <h1>Check</h1>
            </div> 
            <div class="col-lg-5">
              <h1></h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat
              </p>
            </div>
          </div>
          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-4">
              <h1><img src="<?php bloginfo('template_url')?>/img/donate-info/paypal-gw.png" ></img></h1>
            </div> 
            <div class="col-lg-5">
              <h1></h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat
              </p>
            </div>

            <div class="col-lg-9 col-lg-offset-3">
            <div class="moreDetails">
              <img class="paypal-gw-img" src="<?php bloginfo('template_url'); ?>/img/donate-info/paypal-gw-ins.png" alt="">
            </div>
              <div class="show_hide" data-content="toggle-text">Read More</div>   
            </div>

          </div>

          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-4">
              <h1><img src="<?php bloginfo('template_url')?>/img/donate-info/amazon-smile.png"></h1>
            </div> 
            <div class="col-lg-5">
              <h1></h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat
              </p>
            </div>

          </div>

          <div class="partner-list col-lg-12">
            <div class="col-lg-2">
              <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-4.png" alt="partner image">
            </div>
            <div class="col-lg-9 col-lg-offset-1 partner-info">
                <h1 class="partner-title">
                  Become a Volunteer 
                  <button class="btn btn-danger header-btn" data-toggle="modal" data-target="#myModal">SIGN UP</button>
                </h1>
                <div class="partner-info">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                </div>              
            </div>
          </div>

          <div class="partner-list col-lg-12">
            <div class="col-lg-3">
              <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/donate-info/thumb-5.png" alt="partner image">
            </div>
            <div class="col-lg-8 partner-info">
                <h1 class="partner-title">
                  Social Media
                </h1>
                <div class="partner-info social-tile">
                  <table class="table-borderless">
                    <tbody>
                      <tr>
                        <td><img src="<?php bloginfo('template_url'); ?>/img/social/fb.png" alt=""><a href="https://www.facebook.com/feyalegriaus">Facebook</a></td>
                        <td><img src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" alt=""><a href="https://twitter.com/feyalegriaus">Twitter</a></td>
                        <td><img src="<?php bloginfo('template_url'); ?>/img/social/gplus.png" alt=""><a href="https://plus.google.com/+FeyalegriaUs">Google+</a></td>
                      </tr>
                      <tr>
                        <td><img src="<?php bloginfo('template_url'); ?>/img/social/youtube.png" alt=""><a href="https://www.youtube.com/channel/UC4WYKg0m8ANEw6_l0sD-Xdg">Youtube</a></td>
                        <td><img src="<?php bloginfo('template_url'); ?>/img/social/pinterest.png" alt=""><a href="https://www.pinterest.com/">Pinterest</a></td>
                        <td><img src="<?php bloginfo('template_url'); ?>/img/social/in.png" alt=""><a href="https://www.linkedin.com/company/friends-of-fe-y-alegr%C3%ADa-in-the-united-states">Linkedin</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>              
            </div>
          </div>

        </div>                  
        <!-- /donate-list -->         
          

        </div>
     <!-- /section 1 -->


<div class="content-section-e">
  <div class="container">                        
        <p>Join our mailing list</p>
        <input type="text" class="subscribe_email" placeholder="Your email address here">
        <button>SIGN UP</button>                                           
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $(".moreDetails").hide();
  $(document).on("click", ".show_hide" ,function () {
      var txt = $(".moreDetails").is(':visible') ? 'Read More' : 'Read Less';
      $(this).text(txt);
      $(this).prev('.moreDetails').slideToggle(200);
  });

  var hash = location.href.substring(location.href.indexOf('#')+1);
  if (location.href.indexOf("#") != -1) {     
      go = $('#'+hash).offset().top-120;

      $('html, body').animate({
        scrollTop: go
      }, 2000);
      setTimeout(function(){
        $('#'+hash).find(".show_hide").delay(4000).click();        
      }, 1500);
  }
});
</script>
<?php get_footer(); ?>

