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

get_header('country'); ?>


<?php

$schools = get_posts(array(
				'numberposts' => -1,
				'post_type' => 'school',
				'meta_key' => 'choose_country',
				'meta_value' => get_the_ID()
			));
$country_image = get_field('country_image');


?>
 <!-- Page Content -->
    <div class="main-container">
        
        <div class="container">


            <div class="section-lead">
                <h2 class="country-name"><?php the_title(); ?></h2>    
                <img src="<?php echo $country_image; ?>" alt="" class="img img-responsive">
            </div>



            <div class="row country-lead-thumbs">
                <div class="col-lg-4 thumb1">
                	<p>
                    <?php 
                    	global $post;
                    	echo $post->post_content;
                    ?>
                    </p>
                </div>
                <div class="col-lg-4 thumb2">
                    <h2>
                        Public Schools : <?php echo count($schools); ?>
                    </h2>
                    <h2>
                        Training Program : 242
                    </h2>

                    <h2>
                        Social Program : 242
                    </h2>
                    <h2>
                        Students : 340,000
                    </h2>
                    <h2>
                        Funded : 1954
                    </h2>

                    <button class="gen-fund-btn"><a href="./general-fund/">GENERAL FUND</a></button>
                </div>
                <?php $location = get_field('country_location'); ?>

                <div class="col-lg-4 thumb3">
                    <div class="acf-map" style="height : 250px;">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" >
						<?php
			$schools = get_posts(array(
				'numberposts' => -1,
				'post_type' => 'school',
				'meta_key' => 'choose_country',
				'meta_value' => get_the_ID()
			));

			$loc = array();
			foreach ($schools as $school) {
				$loc[] = get_post_meta( $school->ID, 'school_location');
			}
		?>
		<?php foreach ($loc as $l) { ?>
			<div class="marker" data-lat="<?php echo $l[0]['lat']; ?>" data-lng="<?php echo $l[0]['lng']; ?>">
			</div>
		<?php } ?>
						</div>
					</div>
                </div>
            </div>


            <div class="row country-secondary-section">

                <div class="col-lg-3 thumb">
                    <img src="http://placehold.it/300x300" alt="" class="img img-responsive">
                    <h3><a href="campaign/">Campo de Pelota en Maracaibo</a></h3>
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
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            80,00/100,00
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 thumb">
                    <img src="http://placehold.it/300x300" alt="" class="img img-responsive">
                    <h3><a href="campaign/">Sala de Cuidado Infantil</a></h3>
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
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            80,00/100,00
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 thumb">
                    <img src="http://placehold.it/300x300" alt="" class="img img-responsive">
                    <h3><a href="campaign/">10 Becas para Curso de Costurera.</a></h3>
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
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            80,00/100,00
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 thumb">
                    <img src="http://placehold.it/300x300" alt="" class="img img-responsive">
                    <h3><a href="campaign/">25 Uniformes de Campeonato</a></h3>
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
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            80,00/100,00
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>




<?php get_footer(); ?>



