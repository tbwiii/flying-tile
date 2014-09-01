<?php get_header(); ?>
	<section class="content-search">
		<?php if ( have_posts() ): ?>
			<ul class="search-results">
			<?php while ( have_posts() ) : the_post() ?>
				<li>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</li>
			<?php endwhile ?>
			</ul>
		<?php else: ?>
			<h1>Sorry</h1>
			<p>We couldn't find what you were looking for.</p>
		<?php endif ?>
	</section>
<?php get_footer(); ?>