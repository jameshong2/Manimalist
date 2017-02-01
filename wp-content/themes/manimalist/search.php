<?php get_header(); ?>

	<main role="main" class="container">
		<!-- section -->
		<section class="row">

			<div class="col-sm-8">

				<div class="row">

					<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

				</div>
					
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>



			</div>

			<section class="col-sm-4 sidebar-content">

				<?php get_sidebar(); ?>
			
			</section>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
