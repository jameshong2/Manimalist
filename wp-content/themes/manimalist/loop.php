<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a class="col-sm-4 thumb-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="overlay"></div>
				<?php the_post_thumbnail(array(220,220)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<div class="col-sm-8">

			<!-- post title -->
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<h2><?php the_title(); ?></h2>
			</a>
			<!-- /post title -->

			<!-- post details -->
			<?php the_time('j F, Y'); ?></span>
			<!-- /post details -->

			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

			<!--<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read more...</a>-->

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
