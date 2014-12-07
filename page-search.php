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
   link_custom_css('/search.css');
}
add_action('wp_head', 'add_css');
get_header(); ?>
<div class="container">
	<div class="row">
		<div class="content-section section-top section-1-col">
			<div class="content-head">Search</div>
			<div class="content-body">
				<input type="text" class="search-box">
				<button class="btn search-btn-fix"><i class="fa fa-search"></i></button>
			</div>
			<br>
			<div class="col-lg-12">
				<div class="col-lg-1"><button class="btn num-fix"><p>1</p></button></div>
				<div class="col-lg-6">
					<div class="lead">Lorem ipsum Amet anim laborum ut sed sint</div>
					<br>
					<p>
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
					</p>
				</div>
			</div>
			<br>
			<div class="col-lg-12">
				<div class="col-lg-1"><button class="btn num-fix"><p>1</p></button></div>
				<div class="col-lg-6">
					<div class="lead">Lorem ipsum Amet anim laborum ut sed sint</div>
					<br>
					<p>
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
						Lorem ipsum In ut eu laborum sit enim voluptate in dolore cupidatat aute in laboris do fugiat culpa eiusmod.
					</p>
				</div>
			</div>

		</div>
	</div>
</div>
<br><br><br>

<?php get_footer(); ?>