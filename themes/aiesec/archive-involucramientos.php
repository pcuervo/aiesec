<?php get_header(); ?>
	<div class="main h-margin columna xmall-12 medium-8 large-9">
		<section class="columna xmall-12 clearfix margin-bottom">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<div class="columna xmall-12 medium-10 margin-bottom">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					<hr>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		 </section>
	</div><!-- main -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>