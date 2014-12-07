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
   link_custom_css('/info-page.css');
}
add_action('wp_head', 'add_css');
get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 top-section content-section-a bg-white">
			<h1 class="text-left">Social Media</h1>
			<div class="row">
				<div class="col-lg-6 text-left">
					Twitter
					<a class="twitter-timeline" href="https://twitter.com/feyalegriaus" data-widget-id="538751096072982528">Tweets by @feyalegriaus</a>
					<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
					</script>
				</div>
				<div class="col-lg-6 text-left">
					Facebook
					<br>
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Ffeyalegria.us&amp;width=490&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=true&amp;header=true&amp;height=435" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:490px; height:300px; background: white;" allowTransparency="true">
						
					</iframe>
				</div>
			</div>

		</div>
		
	</div>
</div>


<?php get_footer(); ?>