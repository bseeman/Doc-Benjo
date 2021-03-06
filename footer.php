<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package SKT Gravida

 */

?>

<footer id="footer">

	<div class="site-aligner">

    		<div class="widget-column">

            <div class="cols"><h2><?php echo get_theme_mod('contact_title',__('Contact Gravida','gravida')); ?></h2>

                <?php if( get_theme_mod('contact_desc') ) { ?>

                    <p><?php echo get_theme_mod('contact_desc',__('If you have any questions don\'t hesitate to contact us','gravida')); ?></p>

                <?php } ?>

                <?php if( get_theme_mod('contact_add')){ ?>

                    <div class="add-icon"></div><!-- add-icon --><div class="add-content"><?php echo get_theme_mod('contact_add',__('Dummy Donec Rutrum, 1234 N Duis lacinia vel.','gravida')); ?></div><!-- add-content --><div class="clear"></div>

                <?php } ?>

                <?php if( get_theme_mod('contact_no')){ ?>

                    <div class="phone-icon"></div><!-- phone-icon --><div class="phone-content"><?php echo get_theme_mod('contact_no',__('+123 456 7890','gravida')); ?></div><!-- phone-content --><div class="clear"></div>

                <?php } ?>

                <?php if( get_theme_mod('contact_mail')){ ?>

                    <div class="mail-icon"></div><!-- mail-icon --><div class="mail-content"><a href="mailto:<?php echo get_theme_mod('contact_mail','contact@company.com'); ?>"><?php echo get_theme_mod('contact_mail','contact@company.com'); ?></a></div><!-- mail-content --><div class="clear"></div>

                <?php } ?>

            </div><!-- cols -->

       </div><!-- widget-column -->

       <div class="widget-column">

       	

                <div class="cols"><h2>Things I think are cool</h2>
					<p> <a href="http://www.tothestars.media" target="_blank">To The Stars, Inc.</a> </p><br />
					<p> <a href="http://www.5centcoffee.com" target="_blank">5 Cent Coffee</a> </p>
               

                </div><!-- cols -->

        

        </div><!-- widget-column -->

        <div class="widget-column">

            <div class="cols"><h2>Sports teams</h2>
            <p> <a href="http://ducks.nhl.com/" target="_blank">Anaheim Ducks</a> </p><br />
					<p> <a href="http://www.nba.com/warriors/" target="_blank">Golden State Warriors</a> </p>

            	

	

                </div><!-- cols -->

        </div><!-- widget-column -->

        <div class="widget-column last">

            <div class="cols"><h2><?php _e('Follow Me','gravida'); ?></h2>

            		<div class="social">

                        <?php if ( get_theme_mod('fb_link') != "") { ?>

                         <a target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link','#facebook')); ?>" title="Facebook" ><div class="fb icon"></div><span><?php _e('Facebook','gravida'); ?></span></a>

                         <?php } ?>

                        <?php if ( get_theme_mod('twitt_link') != "") { ?>

                         <a target="_blank" href="<?php echo esc_url(get_theme_mod('twitt_link','#twitter')); ?>" title="Twitter" ><div class="twitt icon"></div><span><?php _e('Twitter','gravida'); ?></span></a>

                         <?php } ?>

                         <?php if ( get_theme_mod('gplus_link') != "") { ?>

                         <a target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link','#gplus')); ?>" title="Google Plus" ><div class="gplus icon"></div><span><?php _e('Google +','gravida'); ?></span></a>

                         <?php } ?>

                         <?php if ( get_theme_mod('linked_link') != "") { ?>

                         <a target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link','#linkedin')); ?>" title="Linkedin" ><div class="linkedin icon"></div><span><?php _e('Linkedin','gravida'); ?></span></a>

                         <?php } ?>

                         

                </div><!-- social -->

            </div><!-- cols -->

        </div><!-- widget-column --><div class="clear"></div>

	</div><!-- site-aligner -->

</footer>

<div id="copyright">

	<div class="site-aligner">

    	<div class="left"><?php echo gravida_credit(); ?></div>

    	<div class="right"><?php echo get_theme_mod('footer_right', __('<a href="#">Home</a> | <a href="#">Contact Us</a> | <a href="#">Sitemap</a>','gravida')); ?></div>

        <div class="clear"></div>

    </div>

</div><!-- copyright -->

</div><!-- wrapper -->

<?php wp_footer(); ?>



</body>

</html>