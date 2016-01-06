<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bowie_Tutoring
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="row">
		<div class="entry-content <?php if ((is_front_page()) || ($pagename == 'subjects') ||  ($pagename == 'college-preparation') || ($pagename == 'advanced-programs') || ($pagename== 'general-tutoring') || ($pagename == 'act-and-other-test-preparation') || ($pagename == 'home') || ($pagename == 'contact-us')) echo 'col-sm-8'; else echo 'col-sm-12' ?>">
			<header>
				<h1 class="header-2"><?php echo $post->post_title ?></h1>
			</header>
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bowie_tutoring' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bowie_tutoring' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->


		<?php if ((is_front_page()) || ($pagename == 'subjects') || ($pagename == 'college-preparation') || ($pagename == 'advanced-programs') || ($pagename== 'general-tutoring') || ($pagename == 'act-and-other-test-preparation') || ($pagename == 'home') || ($pagename == 'contact-us')) : ?>
		<div class="hours <?php if ((is_front_page()) ||  ($pagename == 'subjects')||  ($pagename == 'college-preparation') || ($pagename == 'advanced-programs') || ($pagename== 'general-tutoring') || ($pagename == 'act-and-other-test-preparation') || ($pagename == 'home') || ($pagename == 'contact-us')) echo 'col-sm-4' ?>">
			<h2 class="header-2">Hours:</h2>
			<dl>
				<dt>Monday - Thursday</dt>
				<dd>3:00 PM - 8:00 PM</dd>
				<dt>Friday</dt>
				<dd>3:00 PM - 6:00 PM</dd>
				<dt>Saturday</dt>
				<dd>9:00 AM - 2:00 PM</dd>
			</dl>
			<h2 class="header-2">All Tutoring Costs:</h2>
			<p>Sessions before 6:00 PM - $60 per hour</p>
			<p>Sessions after 6:00 PM - $65 per hour</p>
			<p>Away Sessions within a 5-mile radius - $10 traveling fee</p>
			<p>Away Sessions outside a 5-mile radius will be determined individually</p>
			<p>Test Prep Workbooks - $20 for most standardized tests</p>
		</div>
		<?php endif ?>


	</div>
	<?php if (is_front_page()) : ?>
		<h2 class="header-2">Testimonials</h2>
		<div id="testimonials" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->


		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <?php $i=0 ?>
		    <?php foreach(getTestimonials() as $testimonial) : ?>
		    	<div class="item <?php if ($i==0) echo 'active' ?>">
		      	<p><?php echo $testimonial->post_content ?></p>
		      	<p><span class="testimonial-name">-<?php echo $testimonial->post_title ?></span></p>
		    	</div>
		    	<?php $i++ ?>
		    <?php endforeach ?>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#testimonials" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#testimonials" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	<?php endif ?>

	<footer class="entry-footer">
		<?php bowie_tutoring_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
