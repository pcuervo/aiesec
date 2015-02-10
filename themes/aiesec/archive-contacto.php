<?php get_header(); ?>
	<div class="main h-margin columna directorio xmall-12 center block">
		<h2>Contacto</h2>
		<p>Contacta al Vice Presidente del área de Alumni de la entidad local más cercana, para que te dé mayor información.</p>
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<section class=" clearfix">
				<div class="columna xmall-12">
					<h3><?php the_title(); ?></h3>
					<div class="columna xmall-6">
						<p><i class="fa fa-user"></i> <?php echo get_post_meta($post->ID, '_datos_nombre_meta', true); ?></p>
						<p> <i class="fa fa-envelope"></i> <?php echo get_post_meta($post->ID, '_datos_email_meta', true); ?></p>
					</div>
				</div>
			</section><!--persona-->
		<?php endwhile; endif; ?>
	</div><!-- main -->
<?php get_footer(); ?>