<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Fe Y Alegria
 */
?>

	</div><!-- #content -->

<!-- 	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php //echo esc_url( __( 'http://wordpress.org/', 'fe-y-alegria' ) ); ?>"><?php //printf( __( 'Proudly powered by %s', 'fe-y-alegria' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php //printf( __( 'Theme: %1$s by %2$s.', 'fe-y-alegria' ), 'Fe Y Alegria', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info
	</footer><!-- #colophon 
</div><!-- #page -->
<footer class="hidden-sm hidden-xs">
    <div class="container">
    
        <div class="row">
            <div class="section">
                <p class="heading">
                    <b>Contact</b>
                </p>
                <ul>
                    <li>Contact info</li>
                    <li>(212)777-8930</li>
                    <li><a data-toggle="collapse" data-target="#subscribe-mail" >Mailing list</a></li>
                    <div id="subscribe-mail" class="collapse out">
                        <table class="table table-borderless table-hover">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="input col-lg-6" placeholder="First">
                                        <input type="text" class="input col-lg-6" placeholder="Last">
                                        <input type="text" class="input col-lg-9" placeholder="Email">
                                        <button type="text" class="btn col-lg-3">Join</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </ul>
            </div>
            <div class="section">
                <p class="heading">
                    <b>About us</b>
                </p>
                <ul>
                    <li><a href="<?php site_root(); ?>/partners#ar" rel="m_PageScroll2id">Annual report</a></li>
                    <li><a href="<?php site_root(); ?>/partners#ma" rel="m_PageScroll2id">Magis Americas</a></li>
                    <li><a href="<?php site_root(); ?>/partners#fy" rel="m_PageScroll2id">Fey Algeria</a></li>
                </ul>
            </div>
            <div class="section">
                <p class="heading">
                    <b>Programs</b>
                </p>
                <ul>
                    <li><a href="<?php site_root(); ?>/partners#ip">Institutional Partnership</a></li>
                    <li><a href="<?php site_root(); ?>/partners#ge">Global Education</a></li>
                    <li><a href="<?php site_root(); ?>/partners#cf">Community Foundation</a></li>
                </ul>
            </div>
            <div class="section">
                <p class="heading">
                    <b>Social Media</b>
                </p>
                <ul>
                    <li><a href="https://www.facebook.com/feyalegriaus">Facebook</a></li>
                    <li><a href="http://twitter.com/feyalegriaus">Twitter</a></li>
                    <li><a href="http://google.com/+feyalegriaus">Google+</a></li>
                    <!-- <li><a href="https://www.youtube.com/channel/UC4WYKg0m8ANEw6_l0sD-Xdg">Youtube</a></li> -->
                </ul>
            </div>
            <div class="section">
                <p class="heading">
                    <b>Get involved</b>
                </p>
                <ul>
                    <li><a href="<?php site_root(); ?>/donate-info">Fundraise</a></li>
                    <li><a href="<?php site_root(); ?>/donate-info">Donate</a></li>
                    <li><a href="<?php site_root(); ?>/donate-info">Volunteer</a></li>
                </ul>
            </div>
        </div>


        <div class="row leading">
            <p>
                Friends of Fe y Alegría is a project of Magis Americas 
                and the International Federation Fe y Alegría
            </p>
        </div>

        <div class="row copyright">
            <p>
                <a href="">Jesuits</a>• <a href="<?php site_root() ?>/privacy-policy">privacy policy</a> • <a href="<?php site_root() ?>/terms">terms and condition</a> • ©2014 

            </p>
        </div>
    </div>
</footer>
<!-- jQuery Version 1.11.0 -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
