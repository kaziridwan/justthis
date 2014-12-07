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
}
add_action('wp_head', 'add_css');

get_header(); ?>
<!-- Page Content page2-->

<!-- section 1 -->
<div class="content-section-a container">
  <div class="row">
    <div class="col-lg-12 learn-button">
      <button class="btn btn-primary btn-lg btn-learn col-lg-2 pull-left">

        <h3>
          <a href="">LEARN</a>
        </h3>
        <h3>
          <a href="">MORE</a>
        </h3>

      </button>
    </div>
    <!-- partner-list -->
    
    
  <div class="partner-list col-lg-12"  id="ge">
      <div class="col-lg-2">
        <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-3.png" alt="partner image"></div>
      <div class="col-lg-9 col-lg-offset-1 partner-info">
        <h1 class="partner-title">Global Education</h1>
        <div class="partner-info">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
          </p>
          <!-- <div class="moreDetails"> -->
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
            </p>
            <h2>Resources</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            </p>
            <div class="pdf-tile">
              <div class="col-lg-4">
                <img src="<?php bloginfo('template_url'); ?>/img/partners/pdf-icon.png" alt="">
                <p>
                  Lorem ipsum dolor sit amet ipsum dolor Lorem ipsum dolor sit amet ipsum dolor
                </p>
              </div>
              <div class="col-lg-4">
                <img src="<?php bloginfo('template_url'); ?>/img/partners/pdf-icon.png" alt="">
                <p>
                  Lorem ipsum dolor sit amet ipsum dolor Lorem ipsum dolor sit amet ipsum dolor
                </p>
              </div>
              <div class="col-lg-4">
                <img src="<?php bloginfo('template_url'); ?>/img/partners/pdf-icon.png" alt="">
                <p>
                  Lorem ipsum dolor sit amet ipsum dolor Lorem ipsum dolor sit amet ipsum dolor
                </p>
              </div>
            </div>

            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            </p>
            <div class="pdf-tile">
              <div class="col-lg-4">
                <img src="<?php bloginfo('template_url'); ?>/img/partners/pdf-icon.png" alt="">
                <p>
                  Lorem ipsum dolor sit amet ipsum dolor Lorem ipsum dolor sit amet ipsum dolor
                </p>
              </div>
              <div class="col-lg-4">
                <img src="<?php bloginfo('template_url'); ?>/img/partners/pdf-icon.png" alt="">
                <p>
                  Lorem ipsum dolor sit amet ipsum dolor Lorem ipsum dolor sit amet ipsum dolor
                </p>
              </div>
              <div class="col-lg-4">
                <img src="<?php bloginfo('template_url'); ?>/img/partners/pdf-icon.png" alt="">
                <p>
                  Lorem ipsum dolor sit amet ipsum dolor Lorem ipsum dolor sit amet ipsum dolor
                </p>
              </div>
            </div>

          <!-- </div> -->
          <!-- <div class="show_hide" data-content="toggle-text">Read More</div> -->

        </div>

      </div>
    </div>
  
  <!-- /reports -->

</div>

</div>
<!-- /section 1 -->

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