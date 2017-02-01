<?php get_header(); ?>

	<div class="main-slider row">
		<?php echo do_shortcode('[smartslider3 slider=1]'); ?>
	</div>

	<main role="main" class="container">

		<div class="row">

			<!-- section -->
			<section class="col-sm-8 main-content">

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




