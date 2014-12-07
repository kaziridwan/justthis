<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head>
 * section and everything up till
 * <div id="content">
	*
 * @package Fe Y Alegria
 */
?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>
		>
<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>
		">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>
		">
		<!-- Bootstrap Core CSS -->
		<?php link_custom_css('/bootstrap.css') ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<!-- Custom CSS -->
		<?php link_custom_css('/landing-page.css') ?>
		<?php link_custom_css('/header.css') ?>
		<?php link_custom_css('/donate-modal.css') ?>
		<?php link_custom_css('/footer.css') ?>

		<?php link_custom_css('/header-responsive.css') ?>
		<!-- Custom Fonts -->
		<link href="<?php bloginfo('template_url'); ?>
		/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<?php wp_head(); ?></head>

<body <?php body_class(); ?>
		>
		<div id="page" class="hfeed site">
			<!-- 
	<a class="skip-link screen-reader-text" href="#content">
			<?php //_e( 'Skip to content', 'fe-y-alegria' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php //echo esc_url( home_url( '/' ) ); ?>
						" rel="home">
						<?php //bloginfo( 'name' ); ?></a>
				</h1>
				<h2 class="site-description">
					<?php //bloginfo( 'description' ); ?></h2>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle">
					<?php //_e( 'Primary Menu', 'fe-y-alegria' ); ?></button>
				<?php //wp_nav_menu( array( 'theme_location' =>'primary' ) ); ?></nav>
			<!-- #site-navigation 
	</header>
			<!-- #masthead 

	<div id="content" class="site-content">
			-->
			<!-- Modal -->
			<div class="modal fade" id="myModalDefault" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content donate-form" >
						<img class="modal-logo" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-1.png" alt="">
						<p class="sub-heading">You're giving to</p>

						<p class="fund-name">
							Fe Y
							<br/>
							Alegria
						</p>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon left-addon">$</div>
								<input class="form-control" type="email">
								<div class="input-group-addon right-addon">USD</div>
							</div>
						</div>

						<div class="form-group">
							<div class="btn-group btn-group-justified">
								<div class="btn-group">
									<input class="form-control" type="text" style="border-radius : 3px 0px 0px 3px" placeholder="First name"></div>
								<div class="btn-group">
									<input class="form-control" type="text" style="border-radius : 0px 3px 3px 0px" placeholder="Last name"></div>
							</div>
						</div>

						<div class="form-group">
							<textarea class="form-control" id="" cols="30" rows="4" placeholder="Leave a comment"></textarea>
						</div>

						<div class="checkbox">
							<label>
								<input type="checkbox">donate anonymously</label>
						</div>

						<div class="checkbox">
							<label>
								<input type="checkbox">keep me posted on charity:water news</label>
						</div>

						<div class="form-group">
							<img alt="" src="<?php bloginfo('template_url'); ?>/img/page11/give_by_master_card.png" class="pull-left" />
							<a href="./donate-paypal"><img alt="" src="<?php bloginfo('template_url'); ?>/img/page11/give_by_paypal.png" class="pull-right" /></a>
						</div>

						<p class="give_by_check">
							<a href="/donation-form">GIVE BY CHECK</a>
						</p>
					</form>
				</div>
			</div>
		</div>
		<!-- /modal -->
		<!-- modal_language_select -->
		<div class="modal fade" id="select-language" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content language-form" >
					<img class="modal-logo" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-1.png" alt="">
						
					<p class="h3 text-center">Select your preferred Language</p>						
					<br>
					<button class="btn btn-lg form-control btn-lang">ENGLISH</button>	
					<br>
					<button class="btn btn-lg form-control btn-lang">ESPANOL</button>	
					<br>						
				</div>
			</div>
		</div>
		<!-- /modal_language_select -->

		<!-- misc modals -->
			<!-- donate basic -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content donate-form" >
						<img class="modal-logo" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-1.png" alt="">
						<p class="sub-heading">You're giving to</p>

						<p class="fund-name">
							Fe Y
							Alegria
						</p>
						<div class="form-group">
							<input type="text" placeholder="Email" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Credit Card" class="form-control">
						</div>	
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<input type="text" class="form-control" placeholder="MM/YY">
								</div>
								<div class="col-lg-6">
									<input type="text" class="form-control" placeholder="CVC">
								</div>
							</div>								
						</div>

						<!-- <div class="checkbox">
							<label>
								<input type="checkbox">donate anonymously</label>
						</div> -->
						<p class="info">
							lorem ipsum doler sit amut la la bla bla dishting dishting
							ting lorem ipsum doler sit amut la la bla bla dishting dishting
							ting lorem ipsum doler sit amut la la bla bla dishting dishting
							ting
						</p>
						<div class="form-group">
							<input type="submit" value="GIVE $10.00" class="form-control btn-inverse">
						</div>
					</form>
				</div>
			</div>
		</div>


		<div class="modal fade" id="myModalStatic" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content donate-form" >
						<img class="modal-logo" src="<?php bloginfo('template_url'); ?>/img/partners/thumb-1.png" alt="">
						<p class="sub-heading">You're giving to</p>

						<p class="fund-name">
							Fe Y
							Alegria
						</p>
						<div class="form-group">
							<input type="text" placeholder="Email" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Credit Card" class="form-control">
						</div>	
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<input type="text" class="form-control" placeholder="MM/YY">
								</div>
								<div class="col-lg-6">
									<input type="text" class="form-control" placeholder="CVC">
								</div>
							</div>								
						</div>

						<!-- <div class="checkbox">
							<label>
								<input type="checkbox">donate anonymously</label>
						</div> -->
						<p class="info">
							lorem ipsum doler sit amut la la bla bla dishting dishting
							ting lorem ipsum doler sit amut la la bla bla dishting dishting
							ting lorem ipsum doler sit amut la la bla bla dishting dishting
							ting
						</p>
						<div class="form-group">
							<input type="submit" value="GIVE $10.00" class="form-control btn-inverse">
						</div>
					</form>
				</div>
			</div>
		</div>
			<!-- /donate basic -->
		<!-- sign up -->
		<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content donate-form" >
						<img class="sign-up-banner" src="<?php bloginfo('template_url'); ?>/img/sign-up-banner.png" alt="">
						<p>lorem ipsum lorem ipsum doler sit amut la la bla bla dishting dishting
							ting lorem ipsum doler sit amut la la bla bla dishting dishting
							ting lorem ipsum doler sit amut la la bla bla dishting dishting
							ting</p>
						Email Address
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
						First Name
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
						Last Name
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
						Country of Origin
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
						City (in the US)
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
		      			State (in the US)
		      			<div class="form-group">
							<input type="text" class="form-control">
						</div>
						Want to help us with your time or money?
						<div class="radio">
							<label>
								<input name="donate" type="radio">Yes, contact me now
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="donate" type="radio">Not now, may be later
							</label>
						</div>
						Format Preferred	
						<div class="radio">
							<label>
								<input name="preference" type="radio">HTML
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="preference" type="radio">Text
							</label>
						</div>
						<input type="submit" value="Subscribe" class="btn btn-inverse">
						
					</form>
				</div>
			</div>
		</div>
		<!-- /sign up -->

		<!-- sign in -->
		<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content donate-form" >
						<img class="sign-up-banner" src="<?php bloginfo('template_url'); ?>/img/sign-up-banner.png" alt="">
						
						Email Address
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
						Password
						<div class="form-group">
							<input type="password" class="form-control">
						</div>
						<div class="checkbox">
							<label>
								<input name="donate" type="checkbox">Remember Me
							</label>
						</div>
						<br>
						<a href="">Resend Password</a>
						<br><br>
						<input type="submit" value="Sign In" class="btn btn-inverse">
						
					</form>
				</div>
			</div>
		</div>
		<!-- /sign in -->		

		<!-- /misc modals -->
		<!-- NAVIGATION -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-left col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img data-toggle="collapse" data-target="#menu-bar" class="menu-icon" src="<?php bloginfo('template_url'); ?>/img/menu-icon.png" alt="menu icon"></img>
							<div id="menu-options" class="collapse out">
								<table class="table table-hover">
									<tbody>
										<tr>
											<td><a href="<?php site_root(); ?>/index.php"><h5>Home</h5></a></td>
										</tr>
										<tr>
											<td><a href="<?php site_root(); ?>/about-us"><h5>About Us</h5></a></td>
										</tr>
										<tr>
											<td><a href="<?php site_root(); ?>/contact-us"><h5>Contact Us</h5></a></td>
										</tr>
										<tr>
											<td><a href="<?php site_root(); ?>/blog"><h5>Blog</h5></a></td>
										</tr>
									</tbody>
								</table>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<a href="<?php site_root(); ?>/">
							<img class="logo-header hidden-xxs" src="<?php bloginfo('template_url'); ?>/img/logo.jpg" alt="logo image">
							<img class="logo-header visible-xxs" src="<?php bloginfo('template_url'); ?>/img/logo-sm.jpg" alt="logo image">
						</a>
					</div>
				</div>
			</div>
			<div class="navbar-right col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<a href="<?php site_root(); ?>/donate-info"><button class="btn btn-danger pull-right header-btn">DONATE</button></a>
						<!-- <button class="btn btn-danger pull-right header-btn" data-toggle="modal" data-target="#myModal">DONATE</button> -->
						<a class="hidden-sm hidden-xs" href="<?php site_root(); ?>/search"><button class="btn btn-default fa fa-search pull-right header-btn search-btn"></button></a>
 						<a class="hidden-sm hidden-xs" href="<?php site_root(); ?>/partners"><button class="btn btn-primary pull-right header-btn">LEARN</button></a>
						<button class="btn btn-white pull-right header-btn hidden-sm hidden-xs" data-toggle="modal" data-target="#signIn">SIGN IN</button>
					</div>
					<div class="col-lg-12 col-md-12 hidden-sm hidden-xs top-social-lang-menu">
						<ul>
							<li>
 						<span class="pull-right curr-lang" data-toggle="modal" data-target="#select-language">ENGLISH</span>
 					</li>
 					<!-- <li>
 					<a href="https://www.youtube.com/channel/UC4WYKg0m8ANEw6_l0sD-Xdg" >
 					<img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/youtube.png" alt="logo image"></a>
 					
 					</li> -->
 					
 					<li>
 					<a href="https://www.linkedin.com/company/friends-of-fe-y-alegr%C3%ADa-in-the-united-states" >
 						<img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/in.png" alt="logo image"></a>
 					<!-- <a href="#" class="fa fa-linkedin pull-right"></a>
 					-->
 					</li>
 					<li>
 						<a href="https://plus.google.com/+FeyalegriaUs" >
 							<img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/gplus.png" alt="logo image"></a>
 						<!-- <a href="#" class="fa fa-facebook pull-right"></a>
 					-->
 					</li>
 					<li>
 					<a href="https://twitter.com/feyalegriaus" >
 					<img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" alt="logo image"></a>
 					<!-- <a href="#" class="fa fa-twitter pull-right"></a>
 					-->
 					</li>
 					<li>
 					<a href="https://www.facebook.com/feyalegriaus" >
 					<img class="social-icons pull-right" src="<?php bloginfo('template_url'); ?>/img/social/fb.png" alt="logo image"></a>
 					<!-- <a href="#" class="fa fa-facebook pull-right"></a>
 					-->
 					</li>
	</ul>
</div>
</div>
</div>
</div>
</nav>

<!-- menu-bar -->
<div class="menu-bar-acc collapse out" id="menu-bar" >
	<ul>
		<li><a class="ghosted" href="<?php site_root(); ?>/partners" >LEARN</a></li>
		<li><a href="<?php site_root(); ?>/partners-institutional" >PARTNERSHIP</a></li>
		<li><a href="<?php site_root(); ?>/partners-global" >EDUCATION</a></li>
		<li><a href="<?php site_root(); ?>/partners-community" >FOUNDATION</a></li>
		<li><a class="ghosted" href="<?php site_root(); ?>/" >HELP</a></li>
		<li><a href="<?php site_root(); ?>/donate-info#fund" >FUNDRAISE</a></li>
		<li><a href="<?php site_root(); ?>/donate-info#donate" >DONATE</a></li>
		<li><a href="<?php site_root(); ?>/donate-info#volunteer" >VOLUNTEER</a></li>
		<li><a class="ghosted" href="<?php site_root(); ?>/" >COUNTRIES</a></li>
	</ul>
</div>
<!-- /menu-bar -->
<!-- /NAVIGATION -->

<script>
	$(document).ready(function(){
		$(document).on('click', '.menu-icon', function(){
			if($('.intro-header').hasClass('padding-null')){
				setTimeout(function(){$('.intro-header').removeClass('padding-null');},360)
			}else{
				setTimeout(function(){$('.intro-header').addClass('padding-null');},0)
			}

			if($('.content-section-a').hasClass('padding-null')){
				setTimeout(function(){$('.content-section-a').removeClass('padding-null');},360)
			}else{
				setTimeout(function(){$('.content-section-a').addClass('padding-null');},0)
			}
		});
	});
</script>