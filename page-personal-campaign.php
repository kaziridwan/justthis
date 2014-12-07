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
   link_custom_css('/campaign.css');
}
add_action('wp_head', 'add_css');
get_header(); ?>
  <!-- campaign section -->
    <div class="content-section-a container-fluid">
        <div class="campaign-section row">
            <!-- campaign content -->
            <div class="col-lg-8 campaign-content">
                <h1 class="campaign-title text-danger">Campo de Pelota en Maracaibo
                </h1>
                <img class="campaign-img" src="<?php bloginfo('template_url'); ?>/img/campaign/img.jpg" alt="">
                
                <div class="personal-camp-info">
                    <div class="upload-img"><i class="fa fa-camera fa-2x"></i></div>
                  <h1 >Campaign of Mr. Juve Hugo Antonio</h1>  
                </div>
                 
                <h1 >Lorem Ipsum</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Vestibulum vulputate lacus id justo interdum pulvinar. 
                    Etiam scelerisque libero eget velit viverra venenatis. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Pellentesque habitant morbi tristique senectus et netus et 
                    malesuada fames ac turpis egestas. Curabitur eu ante at 
                    massa lobortis feugiat. Interdum et malesuada fames ac 
                    ante ipsum primis in faucibus. Phasellus velit dolor, luctus
                    non nunc in, bibendum lacinia ligula.
                </p>
                <h2>Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Vestibulum vulputate lacus id justo interdum pulvinar. 
                    Etiam scelerisque libero eget velit viverra venenatis. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Pellentesque habitant morbi tristique senectus et netus et 
                    malesuada fames ac turpis egestas. Curabitur eu ante at 
                    massa lobortis feugiat. Interdum et malesuada fames ac 
                    ante ipsum primis in faucibus. Phasellus velit dolor, luctus
                    non nunc in, bibendum lacinia ligula.
                </p>
                <div id="map-canvas"></div>
                <h2>Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Vestibulum vulputate lacus id justo interdum pulvinar. 
                    Etiam scelerisque libero eget velit viverra venenatis. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Pellentesque habitant morbi tristique senectus et netus et 
                    malesuada fames ac turpis egestas. Curabitur eu ante at 
                    massa lobortis feugiat. Interdum et malesuada fames ac 
                    ante ipsum primis in faucibus. Phasellus velit dolor, luctus
                    non nunc in, bibendum lacinia ligula.
                </p>
                <h1 class="section-ques">Questions? Email us <a href="mailto:something@something.com">here</a></h1>
            </div>
            <!-- /campaign content -->

            <!-- campaign sidebar -->
            <div class="col-lg-4 campaign-sidebar">
                <!-- project info -->

                <!-- progress bar -->
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width:50%;">
                                     
                  </div>
                  
                </div>
                <div class="progress-info">
                      <b>$2,500 / $5,000 </b>  
                </div>
                <!-- /progress bar -->
                <h4 class="col-lg-6 text-center">26 donors</h4>
                <h4 class="col-lg-6 text-center">35 days left</h4>

                <a href="<?php site_root(); ?>/donate"><button class="btn btn-primary btn-lg donate-btn">$15</button></a>
                <a href="<?php site_root(); ?>/donate"><button class="btn btn-primary btn-lg donate-btn">$150</button></a>
                <a href="<?php site_root(); ?>/donate"><button class="btn btn-primary btn-lg donate-btn">OTHER</button></a>
                <br>
                <a href="<?php site_root(); ?>/donate">PAY THIS ENTIRE PROJECT</a>
                <div class="btn btn-primary btn-lg col-lg-11 btn-personal-camp">
                    <h4>CREATE YOUR</h4>
                    <h4>FUNDRAISING CAMPAIGN</h4>  
                </div>
                <p class="personal-camp-info">By creating a personal campaign you are becoming part of team.</p>
                <!-- /project info -->

                <!-- share on social network -->
                <div class="share-social">
                    <ul>
                       <li>
                            <img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/gplus.png" alt="logo image">
                           <!-- <a href="#" class="fa fa-facebook pull-right"></a> -->
                       </li>
                       <li>
                            <img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/in.png" alt="logo image">
                           <!-- <a href="#" class="fa fa-linkedin pull-right"></a> -->
                       </li>
                       <li>
                            <img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/youtube.png" alt="logo image">
                           <!-- <a href="#" class="fa fa-youtube pull-right"></a> -->
                       </li>
                       <li>
                            <img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" alt="logo image">
                           <!-- <a href="#" class="fa fa-twitter pull-right"></a> -->
                       </li>
                       <li>
                            <img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/fb.png" alt="logo image">
                           <!-- <a href="#" class="fa fa-facebook pull-right"></a> -->
                       </li>
                    </ul>
                </div>
                <!-- /share on social network -->

                <h2 class="text-left text-danger team-name-title pull-left">Team </h2>
                <h2 class="text-left text-danger team-name-description pull-left">Venezolanos Ausentes</h2>
                <!-- donor info -->
                <div class="donor-info-section">
                    <!-- donor cards -->
                    <div class="donor-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb.jpg" alt="donor image" class="donor-img pull-left">
                        <div class="donor-info">                            
                            <p>TEAM LEADER</p>
                            <p>Carlos Garcia - Colombia</p>
                            <p>Orlando, Florida</p>
                            <p>Raised: $380</p>
                        </div>
                    </div>
                    <div class="donor-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb.jpg" alt="donor image" class="donor-img pull-left">
                        <div class="donor-info">                            
                            <p>TEAM LEADER</p>
                            <p>Carlos Garcia - Colombia</p>
                            <p>Orlando, Florida</p>
                            <p>Raised: $380</p>
                        </div>
                    </div>
                    <div class="donor-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb.jpg" alt="donor image" class="donor-img pull-left">
                        <div class="donor-info">                            
                            <p>TEAM LEADER</p>
                            <p>Carlos Garcia - Colombia</p>
                            <p>Orlando, Florida</p>
                            <p>Raised: $380</p>
                        </div>
                    </div>
                    <div class="donor-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb.jpg" alt="donor image" class="donor-img pull-left">
                        <div class="donor-info">                            
                            <p>TEAM LEADER</p>
                            <p>Carlos Garcia - Colombia</p>
                            <p>Orlando, Florida</p>
                            <p>Raised: $380</p>
                        </div>
                    </div>
                    <div class="donor-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb.jpg" alt="donor image" class="donor-img pull-left">
                        <div class="donor-info">                            
                            <p>TEAM LEADER</p>
                            <p>Carlos Garcia - Colombia</p>
                            <p>Orlando, Florida</p>
                            <p>Raised: $380</p>
                        </div>
                    </div>
                    <div class="donor-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb.jpg" alt="donor image" class="donor-img pull-left">
                        <div class="donor-info">                            
                            <p>TEAM LEADER</p>
                            <p>Carlos Garcia - Colombia</p>
                            <p>Orlando, Florida</p>
                            <p>Raised: $380</p>
                        </div>
                    </div>
                    <div class="donor-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb.jpg" alt="donor image" class="donor-img pull-left">
                        <div class="donor-info">                            
                            <p>TEAM LEADER</p>
                            <p>Carlos Garcia - Colombia</p>
                            <p>Orlando, Florida</p>
                            <p>Raised: $380</p>
                        </div>
                    </div>
                    
                    <!-- /donor cards -->
                    
                    <!-- donor small thumbs -->
                    <div class="thumb-section">
                        <h2 class="text-left text-danger pull-left">Donors </h2>
                        <!-- donor list -->
                            <!-- donor -->
                            <div class="small-thumbs">                              
                            <div class="donor-list">
                                <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb-small.png" alt="donor image" class="donor-img pull-left">
                                <div class="donor-name-sm text-left">Lorem ipsum Ut sunt elit id exercitation -$380</div> 
                            </div>
                            <div class="donor-list">
                                <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb-small.png" alt="donor image" class="donor-img pull-left">
                                <div class="donor-name-sm text-left">Lorem ipsum Ut sunt elit id exercitation -$380</div> 
                            </div>
                            <div class="donor-list">
                                <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb-small.png" alt="donor image" class="donor-img pull-left">
                                <div class="donor-name-sm text-left">Lorem ipsum Ut sunt elit id exercitation -$380</div> 
                            </div>
                            <div class="donor-list">
                                <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb-small.png" alt="donor image" class="donor-img pull-left">
                                <div class="donor-name-sm text-left">Lorem ipsum Ut sunt elit id exercitation -$380</div> 
                            </div>
                            <div class="donor-list">
                                <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb-small.png" alt="donor image" class="donor-img pull-left">
                                <div class="donor-name-sm text-left">Lorem ipsum Ut sunt elit id exercitation -$380</div> 
                            </div>
                            <div class="donor-list">
                                <img src="<?php bloginfo('template_url'); ?>/img/campaign/donor-thumb-small.png" alt="donor image" class="donor-img pull-left">
                                <div class="donor-name-sm text-left">Lorem ipsum Ut sunt elit id exercitation -$380</div> 
                            </div>
                            
                                  
                            </div>
                            <!-- /donor -->

                        <!-- /donor list -->        
                    </div>
                    <!-- /donor small thumbs -->
                </div>
                <!-- /donor info -->                    
                
            </div>
            <!-- /campaign sidebar -->
        </div>
    </div>
     <!-- /campaign section -->



    


    <!-- /.banner -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">

    var map;

    function initialize() {
        var mapOptions = {
            zoom: 4,
            scrollwheel: false,
            center: new google.maps.LatLng(23.7001832, -72.6177836)
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);    

</script>
<?php get_footer(); ?>