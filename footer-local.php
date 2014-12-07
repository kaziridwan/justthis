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


<footer>
    <div class="container">
        <div class="row">
            <div class="section">
                <p class="heading">
                    Contact
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
                    About us
                </p>
                <ul>
                    <li><a href="../partner-details">Annual report</a></li>
                    <li><a href="../partner-details">Magis America</a></li>
                    <li><a href="../partner-details">Fey Algeria</a></li>
                </ul>
            </div>
            <div class="section">
                <p class="heading">
                    Programs
                </p>
                <ul>
                    <li><a href="../partners">Institutional Partnership</a></li>
                    <li><a href="../partners">Global Education</a></li>
                    <li><a href="../partners">Community Foundation</a></li>
                </ul>
            </div>
            <div class="section">
                <p class="heading">
                    Social Media
                </p>
                <ul>
                    <li><a href="https://www.facebook.com/feyalegriaus">Facebook</a></li>
                    <li><a href="http://twitter.com/feyalegriaus">Twitter</a></li>
                    <li><a href="http://google.com/+feyalegriaus">Google+</a></li>
                    <li><a href="https://www.youtube.com/channel/UC4WYKg0m8ANEw6_l0sD-Xdg">Youtube</a></li>
                </ul>
                </ul>
            </div>
            <div class="section">
                <p class="heading">
                    Get involved
                </p>
                <ul>
                    <li><a href="../donate-info">Fundraise</a></li>
                    <li><a href="../donate-info">Donate</a></li>
                    <li><a href="../donate-info">Volunteer</a></li>
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
                <a href="http://www.pixelizard.com/">Pixelizard</a>• <a href="../privacy-policy">privacy policy</a> • <a href="../terms">terms and condition</a> • ©2014 

            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- jQuery Version 1.11.0 -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
        
        // var map;
        
        // function initialize() {
        //     var mapOptions = {
        //         zoom: 4,
        //         scrollwheel: false,
        //         center: new google.maps.LatLng(23.7001832, -72.6177836)
        //     };
        //     map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
        // }
        // google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</body>
</html>
