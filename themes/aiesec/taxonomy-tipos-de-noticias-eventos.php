<?php get_header(); ?>
	<div class="main h-margin columna xmall-12 medium-8 large-9">
		<section class="clearfix"><!--EVENTOS-->
			<?php if( have_posts() ) : while( have_posts() ) : the_post();
				date_default_timezone_set("Mexico/General");
				$fechaFinal = get_post_meta($post->ID, '_fecha_final_meta', true);
				$hoy = date("m/d/Y");
				if ( $hoy < $fechaFinal ){
			?>
				<div class="columna xmall-10 medium-6 large-4 evento-bloque margin-bottom">
					<a href="evento.html">
						<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail( 'thumbnail', array('class' => 'block margin-bottom') ); ?></a>
						<div class="margin-bottom">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<time datetime="<?php echo get_post_meta($post->ID, '_fecha_inicio_meta', true);?>">De: <?php echo get_post_meta($post->ID, '_fecha_inicio_meta', true); ?></time>
							<br />
							<time datetime="<?php echo get_post_meta($post->ID, '_fecha_final_meta', true); ?>">a: <?php echo get_post_meta($post->ID, '_fecha_final_meta', true); ?></time>
						</div>
					</a>
				</div>
			<?php } endwhile; endif; wp_reset_postdata(); ?>
			<div class="clear"></div>
		</section><!--EVENTOS-->
	</div><!-- main -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>