<?php get_header(); ?>
	<div class="main h-margin columna xmall-12 center block">
		<section class="clearfix"><!--EVENTOS-->
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<div class="columna xmall-10 medium-6 large-4 evento-bloque margin-bottom">
					<a href="evento.html">
						<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail( 'thumbnail', array('class' => 'block margin-bottom') ); ?></a>
						<div class="margin-bottom">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<time datetime="<?php the_time('j/n/Y');?>"><?php the_time('j/n/Y');?></time>
						</div>
					</a>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		<div class="clear"></div>
		<div class="next-page">
	 		<a class="active" href="">1</a>
	 		<a href="">2</a>
	 		<a href="">3</a>
	 		<a href="">4</a>
	 		<a href="">></a>
	 	</div>

		</section><!--EVENTOS-->
	</div><!-- main -->
<?php get_footer(); ?>