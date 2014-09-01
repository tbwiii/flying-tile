<?php get_header(); ?>
	<section class="content-home">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post() ?>
				<article>
					<h1><?php the_title(); ?></h1>
					<section class="post-content">
						<?php the_content(); ?>
					</section>
				</article>
			<?php endwhile ?>
		<?php endif ?>
	</section>
<?php get_footer(); ?>