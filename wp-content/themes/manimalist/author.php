<?php get_header(); ?>

	<main role="main" class="container droptop">
		<!-- section -->
		<section class="row">

			<div class="col-sm-8">

				<div class="row">

					<?php if (have_posts()): the_post(); ?>

						<h1><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>

				</div>

				<?php if ( get_the_author_meta('description')) : ?>

				<?php echo get_avatar(get_the_author_meta('user_email')); ?>

					<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

					<?php echo wpautop( get_the_author_meta('description') ); ?>

				<?php endif; ?>

				<?php rewind_posts(); while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a class="col-sm-4 thumb-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<div class="overlay"></div>
								<?php the_post_thumbnail(array(200,200)); // Declare pixel size you need inside the array ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<div class="col-sm-8">

							<!-- post title -->
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<h2><?php the_title(); ?></h2>
							</a>
							<!-- /Post title -->

							<!-- post details -->
							<?php the_time('j F, Y'); ?></span>
							<!-- /post details -->

							<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

							<!--<br class="clear">-->

							<?php edit_post_link(); ?>

						</div>

						<div class="col-sm-12">
							<div class="col-sm-12 post-sep"></div>
						</div>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>

					<?php get_template_part('pagination'); ?>

			</div>

			<div class="col-sm-4 sidebar-content">

				<?php get_sidebar(); ?>

			</div>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
