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
			<div class="content-head">Privacy Policy</div>
			<div class="content-body">
				<div>
					OUR COMMITMENT TO PRIVACY
				</div>
				<p>
					charity: water knows that you care how information about you is used and shared, and we appreciate you trusting that we will do so carefully and sensibly. To better protect your privacy, we provide this Privacy Policy explaining our online information practices and the choices you can make about the way your information is collected and used on this website. The information below explains our policy regarding your privacy and the www.charitywater.org website. By visiting <a href="http://www.charitywater.org/">www.charitywater.org</a>, you are accepting the practices described in this Privacy Notice.
				</p>
				<p>
					Our www.feyalegria.us website is maintained by Magis Americas, Inc, with headquarters at 1016 16th St NW, Ste400, Washington, DC 20036 , U.S.
				</p>
				<div>
					WHAT PERSONALLY IDENTIFIABLE INFORMATION IS COLLECTED ON THIS SITE?
				</div>
				<p>
					When you visit our website, you may provide us with personal information (such as name, address, e-mail address, telephone numbers and/or credit/debit card information) that you knowingly choose to disclose, which is collected on an individual basis for various purposes. These purposes include registering to receive e-mail newsletters or other materials, requesting further information from us about projects and services, donating to us, ordering merchandise, making requests, submitting a form on our website, or simply asking a question. We receive and store any information you enter on our website or give us in any other way. We ask for personal information so that we can fulfill your request and return your message. This information is retained and used in accordance with existing laws, rules, regulations, and other policies. charity: water does not collect personal information from you unless you provide it to us. If you choose not to provide any of that information, we may not be able to fulfill your request or complete your order, but you will still be free to browse the other sections of the websites owned and administered by Magis Americas, Inc. This means that you can visit our site without telling us who you are or revealing any personally identifiable information about yourself.
				</p>
				<div>
					LEGAL DISCLAIMER
				</div>
				<p>
					We may disclose personal information when required by law or in the good-faith belief that such action is necessary in order to conform to the edicts of the law or comply with legal process served on charity: water.
				</p>
				<div>
					FOR MORE INFORMATION
				</div>
				<p>
					If you have any questions, concerns or comments about privacy at our charitywater.org website, please send us a description of your concern via e-mail to <a href="mailto:support@feyalegria.us">support@feyalegria.us</a> or call the main telephone number at (212) 777-8930.
				</p>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>