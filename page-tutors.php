<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bowie_Tutoring
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if (getFaculty() != '' ) : ?>
			<div class="row">
				<div class="entry-content col-sm-12">
					<header>
						<h1 class="header-2">Our Faculty</h1>
					</header>
				</div>
			</div>
			<div class="tutors">
				<?php $i=0; ?>
				<?php $d = count(getFaculty()); ?>
				<?php foreach (getFaculty() as $faculty ) : ?>
					<?php if (($i % 3) == 0) echo '</div><div class="tutors">' ?>
					<figure class="col-sm-4 tutor">
							<?php if (facultyImage($faculty->ID) == '') : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/BowiePlaceholder.jpg" class="img-responsive img-center" alt="Placeholder Image">
							<?php else : ?>
								<?php echo facultyImage($faculty->ID) ?>
							<?php endif ?>
						<figcaption>
							<h1 class="figure-header"><?php echo $faculty->post_title ?></h1>
							<h2 class="figure-sub-header"><?php echo facultyPosition($faculty->ID) ?></h2>
							<?php if (facultyInfo($faculty->ID) != '' ) : ?><p><?php echo facultyInfo($faculty->ID) ?></p><?php endif ?>
						</figcaption>
					</figure>
					<?php $i++ ?>
				<?php endforeach ?>
			</div>
		<?php endif ?>
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row">
					<div class="entry-content col-sm-12">
						<header>
							<h1 class="header-2 tutor-head"><?php echo $post->post_title ?></h1>
						</header>
						<?php
							the_content();
						?>
					</div><!-- .entry-content -->
				</div>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php if (getTutors() != '' ) : ?>
			<div class="tutors">
				<?php $j=0; ?>
				<?php $c = count(getTutors()); ?>
				<?php foreach (getTutors() as $tutor ) : ?>
					<?php if (($j % 3) == 0) echo '</div><div class="tutors">' ?>
					<figure class="col-sm-4 tutor">
							<?php if (tutorImage($tutor->ID) == '') : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/BowiePlaceholder.jpg" class="img-responsive img-center" alt="Placeholder Image">
							<?php else : ?>
								<?php echo tutorImage($tutor->ID) ?>
							<?php endif ?>
						<figcaption>
							<h1 class="figure-header"><?php echo $tutor->post_title ?></h1>
							<h2 class="figure-sub-header"><?php echo tutorSchool($tutor->ID) ?></h2>
							<p><?php echo tutorInfo($tutor->ID) ?></p>
						</figcaption>
					</figure>
					<?php $j++ ?>
				<?php endforeach ?>
			</div>
		<?php endif ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
