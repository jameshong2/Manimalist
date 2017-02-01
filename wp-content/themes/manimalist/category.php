<?php get_header(); ?>

	<main role="main" class="container droptop">

		<div class="row">

			<!-- section -->
			<section class="col-sm-8">

				<div class="row">

					<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

				</div>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->

			<section class="col-sm-4 sidebar-content">

				<?php get_sidebar(); ?>

			</section>

		</div>

	</main>

<?php get_footer(); ?>




