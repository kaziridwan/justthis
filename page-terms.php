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
		<div class="content-section section-top section-1-col">
			<div class="content-head">Term and Conditions</div>
			<div class="content-body">
				As required by law, all assets contributed to funds held by the Magis Americas, 
				and its project Friends of Fe y Alegría in the United States, become irrevocable 
				gifts to Magis Americas, and legal control and responsibility for such assets 
				rest with Magis Americas. Assets contributed to Friends of Fe y Alegría in the 
				United States are subject to Magis Americas’ variance power, as set forth in the
				organization’s bylaws. Variance power gives Magis Americas the authority to
				modify any restriction or condition on the distribution of funds for any 
				specified charitable purposes or to specified organizations. In the event that
				a distribution cannot be made to a specified organization or project, Magis 
				Americas will select an alternate grantee to receive the funds.
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>