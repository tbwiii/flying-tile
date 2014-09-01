<?php get_header(); ?>
	<section class="content-page">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post() ?>
				<?php the_title(); ?>
				<?php the_content(); ?>
			<?php endwhile ?>
		<?php endif ?>
	</section>
<?php get_footer(); ?>