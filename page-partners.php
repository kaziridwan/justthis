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
    <div class="partner-list col-lg-12" id="fy">
      <div class="col-lg-2">
        <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-1.png" alt="partner image"></div>
      <div class="col-lg-8 col-lg-offset-1 partner-info">
        <h1 class="partner-title">Friends of Fe y Alegría in the United States</h1>
        <div class="partner-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat</p>
                  <div class="moreDetails">
          <h3>Header</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
          </p>
        </div>
        <div class="show_hide" data-content="toggle-text">Read More</div>


        </div>
      </div>
    </div>
    <div class="partner-list col-lg-12" id="ip">
      <div class="col-lg-2">
        <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-2.png" alt="partner image"></div>
      <div class="col-lg-9 col-lg-offset-1 partner-info">
        <h1 class="partner-title">Institutional Partnerships</h1>
        <div class="partner-info">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
          </p>
          <a class="read-more" href="<?php site_root(); ?>/partners-institutional">Read More</a>

        </div>
      </div>
    </div>

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
          <a class="read-more" href="<?php site_root(); ?>/partners-global">Read More</a>

        </div>

      </div>
    </div>
    
  <div class="partner-list col-lg-12"  id="cf">
    <div class="col-lg-2">
      <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-4.png" alt="partner image"></div>
    <div class="col-lg-9 col-lg-offset-1 partner-info">
      <h1 class="partner-title">Community Foundation</h1>
      <div class="partner-info">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
        </p>
        <a class="read-more" href="<?php site_root(); ?>/partners-community">Read More</a>
      </div>
    </div>
  </div>
  <div class="partner-list col-lg-12">
    <div class="col-lg-2">
      <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-1.png" alt="partner image"></div>
    <div class="col-lg-9 col-lg-offset-1 partner-info">
      <h1 class="partner-title">Federación Internacional Fe y Alegría</h1>
      <div class="partner-info">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                          nisi ut aliquip ex ea commodo consequat</p>
      </div>
    </div>
  </div>
  <div class="partner-list col-lg-12" id="ma">
    <div class="col-lg-2">
      <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-6.png" alt="partner image"></div>
    <div class="col-lg-9 col-lg-offset-1 partner-info">
      <h1 class="partner-title">Magis Americas</h1>
      <div class="partner-info">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                          nisi ut aliquip ex ea commodo consequat</p>
        <div class="moreDetails">
          <h3>Header</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
          </p>
        </div>
        <div class="show_hide" data-content="toggle-text">Read More</div>


      </div>
    </div>
  </div>
  <div class="partner-list col-lg-12">
    <div class="col-lg-2">
      <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-7.png" alt="partner image"></div>
    <div class="col-lg-9 col-lg-offset-1 partner-info">
      <h1 class="partner-title">Jesuits</h1>
      <div class="partner-info">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                          nisi ut aliquip ex ea commodo consequat</p>
      </div>
    </div>
  </div>
  <div class="partner-list col-lg-12">
    <div class="col-lg-2">
      <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-8.png" alt="partner image"></div>
    <div class="col-lg-9 col-lg-offset-1 partner-info">
      <h1 class="partner-title">Volunteer Groups</h1>
      <div class="partner-info">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                          nisi ut aliquip ex ea commodo consequat</p>
      </div>
    </div>
  </div>

  <!-- plugin generated -->
  <?php $loop = new WP_Query( array( 'post_type' => 'partners', 'posts_per_page' => 10 ) ); ?>

  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <?php $icon = get_field('icon'); ?>
    <div class="partner-list col-lg-12">
      <div class="col-lg-2">
        <img class="partner-img" src="<?php echo $icon; ?>" alt="partner image"></div>
      <div class="col-lg-9 col-lg-offset-1 partner-info">
        <h1 class="partner-title"><?php the_title(); ?></h1>
        <div class="partner-info">
          <?php the_content(); ?>
                  </div>
      </div>
    </div>
  <?php endwhile; ?>  
  <!-- /plugin generated -->
  <!-- /partner-list -->

  <!-- active group list -->
  <div class="active-groups col-lg-12">
    <div class="col-lg-2"></div>
    <div class="col-lg-9 col-lg-offset-1 active-group-info">

      <div class="active-group-searchbar">
        <h1 class="pull-left text-left">List of Active Group</h1>
        <input class="btn btn-lg search-input" type="text" placeholder="Search By Name">
        <button class="btn btn-lg btn-inverse">SEARCH</button>
      </div>
      <!-- select country -->
      <div class="countrylist">
        <table class="table table-borderless">
          <tbody>
            <tr>
              <td>Argentina</td>
              <td>Bolivia</td>
              <td>Brasil</td>
              <td>Chile</td>
              <td>Colombia</td>
            </tr>
            <tr>
              <td>Ecuador</td>
              <td>El Salvador</td>
              <td>Guatemala</td>
              <td>Haití</td>
              <td>Honduras</td>
            </tr>
            <tr>
              <td>Nicaragua</td>
              <td>Panamá</td>
              <td>Paraguay</td>
              <td>Perú</td>
              <td>República Dominicana</td>
            </tr>
            <tr>
              <td>Uruguay</td>
              <td> <strong>Venezuela</strong>
              </td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /select country -->
      <!-- country info -->
      <table class="table table-no-outline">
        <thead>
          <tr>
            <th>Name</th>
            <th>Location of current project</th>
            <th>Members</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Venezolanos Ausentes</td>
            <td>Maraciabo</td>
            <td>20</td>
          </tr>
          <tr>
            <td>Venezolanos Ausentes</td>
            <td>Maraciabo</td>
            <td>20</td>
          </tr>
          <tr>
            <td>Venezolanos Ausentes</td>
            <td>Maraciabo</td>
            <td>20</td>
          </tr>
          <tr>
            <td>Venezolanos Ausentes</td>
            <td>Maraciabo</td>
            <td>20</td>
          </tr>
          <tr>
            <td>Venezolanos Ausentes</td>
            <td>Maraciabo</td>
            <td>20</td>
          </tr>
          <tr>
            <td>Venezolanos Ausentes</td>
            <td>Maraciabo</td>
            <td>20</td>
          </tr>
        </tbody>
      </table>
      <!-- /country info --> </div>
  </div>
  <!-- /active group list -->

  <!-- reports -->
  <div class="reports-section col-lg-12" id="ar">
    <div class="col-lg-2">
      <img class="partner-img" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-9.png" alt="partner image"></div>
    <div class="col-lg-9 col-lg-offset-1 reports-info">
      <h1 class="reports-title">Reports</h1>
      <div class="reports-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
                  <div class="moreDetails">
          <h3>Header</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat
          </p>
        </div>
        <div class="show_hide" data-content="toggle-text">Read More</div>


      </div>
      <table class="table table-borderless reports-table">
        <tbody>
          <tr>
            <td>990 for 2013</td>
            <td>990 for 2012</td>
            <td>990 for 2011</td>
          </tr>
          <tr>
            <td>Audit 2013</td>
            <td>Audit 2012</td>
            <td>Audit 2011</td>
          </tr>
        </tbody>
      </table>
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
  $(document).on("click", ".learn-button" ,function () {
      $('.show_hide').each(function(){
        $(this).click();
      });
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