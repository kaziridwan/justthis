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

get_header('home'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- Header -->
		<div class="intro-header --padding-null">

			<div class="container" style="border: 1px solid white">

				<div class="row no-margin">
					<div class="country"><a href="<?php site_root(); ?>/country/venezuela/">VENEZUELA</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/colombia/">COLOMBIA</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/bolivia/">BOLIVIA</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/peru/">PERU</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/dominican-republic/">DOMINICAN REPUBLIC</a></div>
				</div>
				<div class="row no-margin">
					<div class="country"><a href="<?php site_root(); ?>/country/nicaragua/">NICARAGUA</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/ecuador/">ECUADOR</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/chile/">CHILE</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/brasil/">BRASIL</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/paraguay/">PARAGUAY</a></div>
				</div>

				<div class="row no-margin">
					<div class="country"><a href="<?php site_root(); ?>/country/guatemala/">GUATEMALA</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/el-salvador/">EL SALVADOR</a></div>
					<div class="country"><a href="http://pixelizard.com/feyalegria/country/haiti/">HAITI</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/argentina/">ARGENTINA</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/honduras/">HONDURAS</a></div>
				</div>

				<div class="row no-margin">
					<div class="country"><a href="<?php site_root(); ?>/country/panama/">PANAMA</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/uruguay/">URUGUAY</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/federation/">FEDERATION</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/art-fund/">ART FUND</a></div>
					<div class="country"><a href="<?php site_root(); ?>/country/emergency-issues/">EMERGENCY ISSUES</a></div>
				</div>
			</div>
			<!-- /.container -->

		</div>
		<!-- /.intro-header -->

		<!-- Page Content -->

		<div class="content-section-a">
			<p class="heading">Schools that transform the world</p>

			<div class="items">
				<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/img/school.png" alt="" width="55px">
					<p>Schools</p>
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/img/sponsor.png" alt="" width="55px">
					<p>Sponsors</p>
				</div>

			</div>
		</div>

		<div class="content-section-b" id="map-canvas"></div>

		<div class="content-section-c hidden-sm hidden-xs">
			<div class="container">
				<div class="row leading-section" >
					<p class="heading">
						1,900 public schools, 2,100 job training
						<br/>
						and social programs,
						<br/>
						1,496,000 students, 60 years of history
					</p>
					<div class="row">
						<button>
							LEARN
							<br/>
							MORE
						</button>
						<button>
							GET
							<br/>
							INVOLVED
						</button>
					</div>
					<p class="sub-heading">
						In the United States we create awarenewss,
						<br/>
						build partnerships, and share our knowledge on global social justice
					</p>
					<div class="row">
						<button>
							INSTITUTIONAL
							<br/>
							PARTNERSHIP
						</button>
						<button>
							GLOBAL
							<br/>
							EDUCATION
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="content-section-d hidden-sm hidden-xs">
			<div class="container">
				<a href="<?php site_root(); ?>/news"><h2> News & Updates</h2></a>

				<div class="row">
					<div class="col-lg-6">
						<div class="article">
							<img src="<?php bloginfo('template_url'); ?>/img/child.png" alt="" class="img img-responsive">
							<h2>Loren ipsum dolor sit amet</h2>
							<p>
								Lorem ipsum Laborum anim nostrud ut veniam eu in irure eiusmod consectetur consequat Ut Duis do enim et et dolore nulla commodo non aliquip cupidatat ullamco Duis quis fugiat dolor laboris aliqua culpa nisi sit laboris sunt.
							</p>
							<p>
								ullamco Duis quis fugiat dolor laboris aliqua culpa nisi sit laboris sunt.
							</p>
							<img src="<?php bloginfo('template_url'); ?>/img/meeting.png" alt="" class="img img-responsive"></div>
					</div>
					<div class="col-lg-6">
						<div class="article">
							<img src="<?php bloginfo('template_url'); ?>/img/old_man.png" alt="" class="img img-responsive">
							<h2>Loren ipsum dolor sit amet</h2>
							<p>
								Lorem ipsum Laborum anim nostrud ut veniam eu in irure eiusmod consectetur consequat Ut Duis do enim et et dolore nulla commodo non aliquip cupidatat ullamco Duis quis fugiat dolor laboris aliqua culpa nisi sit laboris sunt.
								<br/>
								ullamco Duis quis fugiat dolor laboris aliqua culpa nisi sit laboris sunt.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="content-section-e hidden-sm hidden-xs">
			<div class="container">
				<p>Join our mailing list</p>
				<input type="text" class="subscribe_email" placeholder="Your email address here">
				<button>SIGN UP</button>
			</div>
		</div>

		<!-- /.banner -->

	</main>
	<!-- #main -->
</div>
<!-- #primary -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.js"></script>
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