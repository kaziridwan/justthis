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
$public_schools = get_field('public_schools');
$training_program = get_field('training_program');
$social_program = get_field('social_program');
$students = get_field('students');
$funded = get_field('funded');
$banner = get_field('banner');


function add_css()
{
   link_custom_css('/campaign.css');
   link_custom_css('/countries.css');
}
add_action('wp_head', 'add_css');
get_header(); ?>
 <!-- Page Content -->
    <div class="main-container">
        
        <div class="container">


            <div class="section-lead">
                <h2 class="country-name"><?php the_title() ?></h2>    
                <img src="<?php bloginfo('template_url'); ?>/img/countries/lead.png" alt="" class="img img-responsive">
            </div>



            <div class="row country-lead-thumbs">
                <div class="col-lg-4 thumb1">
                    <p>
                        <?php $loop = new WP_Query( array( 'post_type' => 'country', 'posts_per_page' => 1 ) ); ?>

                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; ?> 

                    </p>
                </div>
                <div class="col-lg-4 thumb2">
                    <!-- share on social network -->
                    <div class="share-social">
                        <ul>
                           <li>
                                <img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/in.png" alt="logo image">
                               <!-- <a href="#" class="fa fa-linkedin pull-right"></a> -->
                           </li>
                           <li>
                                <img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/gplus.png" alt="logo image">
                               <!-- <a href="#" class="fa fa-facebook pull-right"></a> -->
                           </li>
                           
                           <li>
                                <img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/fb.png" alt="logo image">
                               <!-- <a href="#" class="fa fa-facebook pull-right"></a> -->
                           </li>
                           <li>
                                <img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" alt="logo image">
                               <!-- <a href="#" class="fa fa-twitter pull-right"></a> -->
                           </li>
                        </ul>
                    </div>
                    <!-- /share on social network -->
                    <h2>
                        Public Schools : <?php echo $public_schools ?>
                    </h2>
                    <h2>
                        Training Program : <?php echo $training_program ?>
                    </h2>
                    <h2>
                        Social Program : <?php echo $social_program ?>
                    </h2>
                    <h2>
                        Students : <?php echo $students ?>
                    </h2>
                    <h2>
                        Funded : <?php echo $funded ?>
                    </h2>
                    
                    <a href="<?php site_root() ?>/general-fund"><button class="gen-fund-btn btn-lg"><h3>GENERAL FUND</h3></button></a>
                </div>
                <div class="col-lg-4 thumb3" >
                    <div id="map-canvas"></div>
                </div>
            </div>


            <div class="row country-secondary-section">

                <div class="col-lg-3 thumb">
                    <img src="http://placehold.it/300x300" alt="" class="img img-responsive">
                    <h3><a href="<?php site_root(); ?>/campaign/"><b>Campo de Pelota en Maracaibo</b></a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla nisi eu felis ultriciesmolestie. Nullaa mattisurna. Phasellusnon mi metus.
                    </p>
                    <ul>
                        <li>Place: Maracaibo, Zulia</li>
                        <li>Team: Venezolanos Ausentes</li>
                        <li>Type: Infrastructure</li>
                    </ul>
                    <div class="foot row">
                        <p class="pull-left">35 days left</p>
                        <p class="pull-right">24 donors</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                           
                        </div>
                    </div>
                    <div class="progress-info">
                      <b>$2,500 / $5,000 </b>  
                    </div>
                </div>


                <div class="col-lg-3 thumb">
                    <img src="http://placehold.it/300x300" alt="" class="img img-responsive">
                    <h3><a href="<?php site_root(); ?>/campaign/"><b>Sala de Cuidado Infantil</b></a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla nisi eu felis ultriciesmolestie. Nullaa mattisurna. Phasellusnon mi metus.
                    </p>
                    <ul>
                        <li>Place: Maracaibo, Zulia</li>
                        <li>Team: Venezolanos Ausentes</li>
                        <li>Type: Infrastructure</li>
                    </ul>
                    <div class="foot row">
                        <p class="pull-left">3 days left</p>
                        <p class="pull-right">24 donors</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                            </div>
                    </div>
                    <div class="progress-info">
                      <b>$4,000 / $5,000 </b>  
                    </div>
                </div>
                <div class="col-lg-3 thumb">
                    <img src="http://placehold.it/300x300" alt="" class="img img-responsive">
                    <h3><a href="<?php site_root(); ?>/campaign/"><b>10 Becas para Curso de Costurera.</b></a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla nisi eu felis ultriciesmolestie. Nullaa mattisurna. Phasellusnon mi metus.
                    </p>
                    <ul>
                        <li>Place: Maracaibo, Zulia</li>
                        <li>Team: Venezolanos Ausentes</li>
                        <li>Type: Infrastructure</li>
                    </ul>
                    <div class="foot row">
                        <p class="pull-left">4 days left</p>
                        <p class="pull-right">24 donors</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                            </div>
                    </div>
                    <div class="progress-info">
                      <b>$2,500 / $5,000 </b>  
                    </div>
                </div>
                <div class="col-lg-3 thumb">
                    <img src="http://placehold.it/300x300" alt="" class="img img-responsive">
                    <h3><a href="<?php site_root(); ?>/campaign/"><b>25 Uniformes de Campeonato</b></a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla nisi eu felis ultriciesmolestie. Nullaa mattisurna. Phasellusnon mi metus.
                    </p>
                    <ul>
                        <li>Place: Maracaibo, Zulia</li>
                        <li>Team: Venezolanos Ausentes</li>
                        <li>Type: Infrastructure</li>
                    </ul>
                    
                    <div class="foot row">
                        <p class="pull-left">28 days left</p>
                        <p class="pull-right">24 donors</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            </div>
                    </div>
                    <div class="progress-info">
                      <b>$3,000 / $5,000 </b>  
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- jQuery Version 1.11.0 -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <!-- /.banner -->
<script type="text/javascript">
        
        var map;
        
        function initialize() {
            var mapOptions = {
                zoom: 4,
                scrollwheel: false,
                center: new google.maps.LatLng(23.7001832, -72.6177836),
                height: 500
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);

</script>
<?php get_footer(); ?>