<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bowie_Tutoring
 */

?>

	</div><!-- #content -->
	<div class="pre-footer">
		<div class="container">
			<div class="row">
				<div id="instagram-feed" class="col-sm-8">
					<h4 class="header-2">Instagram</h4>
					<div id="instafeed" class="row">
					</div>
				</div>
				<div id="calendar" class="col-sm-4">
					<h4 class="header-2">Upcoming Events</h4>
					<?php the_widget('Tribe__Events__List_Widget'); ?>
				</div>
			</div>
		</div>
	</div>
	<footer id="colophon" role="contentinfo">
		<div class="text-center">
			<p>Copyright &copy; 2016 | The Bowie Center | 2550 Ridgeway Road, Memphis, TN 38119</p>
			<p>P: (901) 474-1081 | F: (901) 474-1083</p>
			<p>E: tutoring@bowiereading.com</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: '219769686',
        accessToken: '219769686.8bcbf8f.13922aa210d34149ab8c5cc639b5683f',
        limit: 6,
        template: '<a href="{{link}}"><div class="col-sm-4 col-xs-6 instagram-img-contain"><img src="{{image}}" class="img-responsive instafeed-img"></div></a>',
        resolution: 'standard_resolution'
    });
    userFeed.run();
</script>

<!-- Google Analytics Business -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71231530-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
