<?php get_header(); ?>
	<div class="main columna xmall-12 medium-8 large-9">
		 <section class="full clearfix margin-bottom"><!--Noticias-->
			<h2 class="columna xmall-8">Oportunidades de Negocio</h2>
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article class="oportunidad columna xmall-12 large-10 margin-bottom">
			 		<h3 class="no-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			 		<div class="clear"></div>
					<time datetime="<?php the_time('j/n/Y');?>"><?php the_time('j/n/Y');?></time>
			 		<?php the_excerpt(); ?>
			 		<a href="<?php the_permalink(); ?>" class="columna xmall leer-mas right"><i class="fa fa-plus"></i> Leer más...</a>
			 	</article>
		 	<?php endwhile; endif; wp_reset_postdata(); ?>
		 </section><!--Oportunidades-->
	</div><!-- main -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>