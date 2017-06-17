<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yoko_underscore
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row container" role="contentinfo">
		<div class="col-md-12 text-center">
			<div class="footer_line center-block"></div>
			&copy;&nbsp;YOKO SATO
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>


<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.lazyload.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/smooth-scroll.min.js"></script>
<script>
jQuery(function($){
    $("img.lazy").lazyload({
            effect: 'fadeIn',
            effectspeed: 1400,
            event : "5secDelay"
        });
    });

    $(window).bind("load", function() {
        var timeout = setTimeout(function() {
            $("img.lazy").trigger("5secDelay")
        }, 100);

		smoothScroll.init() ;
});
</script>


</body>
</html>
