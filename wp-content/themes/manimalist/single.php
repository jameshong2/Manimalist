<?php get_header(); ?>

	<!-- section -->
		<section class="row single-thumb">

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

		</section>

	<main role="main" class="container">
		

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<section class="row">

			<!-- article -->
			<article class="col-sm-8" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post title -->
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /post title -->

				<!-- post details -->
				<span class="date"><?php the_time('j F, Y'); ?> <!--<?php the_time('g:i a'); ?>--></span> - <span class="author"><?php the_author_posts_link(); ?></span><br><br>
				
				<!--<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
				<!-- /post details -->

				<span class="post-content"><?php the_content(); // Dynamic Content ?></span>

				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

				<!--<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>-->

				<!--<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>-->


				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

				<?php // comments_template(); ?>

			</article>
			<!-- /article -->

			<section class="col-sm-4 sidebar-content">

				<?php get_sidebar(); ?>
			
			</section>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
