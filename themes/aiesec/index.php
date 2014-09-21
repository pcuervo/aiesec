<?php get_header(); ?>
	<div class="main columna xmall-12 medium-8 large-9">
		<section class="relevantes clearfix"><!--RELEVANTES-->
			<?php
				$argsRelevantes = array(
									'post_type' => 'noticias',
									'tax_query' => array(
										array(
											'taxonomy' => 'tipos-de-noticias',
											'field'    => 'slug',
											'terms'    => 'eventos',
										)
									),
									'posts_per_page' => 1
								);
				$queryRelevantes = new WP_Query($argsRelevantes);
				if ( $queryRelevantes->have_posts() ) : while( $queryRelevantes->have_posts() ) : $queryRelevantes->the_post() ?>
					<img class="span margin-bottom" src="<?php echo THEMEPATH; ?>images/aniversario-guanajuato-aiesec.jpg" alt="">
					<div class="columna xmall-12">
						<h2><?php the_title(); ?></h2>
						<div class="clear"></div>
						<!--<span>Categoría</span>
						<time datetime="2014-05-15">15-05-14</time>-->
						<?php the_content(); ?>
					</div>
					<a href="<?php the_permalink(); ?>" class="boton right">Leer más</a>
				<?php
				endwhile; endif; wp_reset_postdata();
			?>
		 </section><!--RELEVANTES-->
		 <section class="full eventos clearfix"><!--Eventos-->
			<div class="margin-bottom">
			 	<h2 class="columna xmall-4">Eventos</h2>
			 	<a href="<?php echo site_url( 'eventos' ); ?>" class="columna xmall no-medium boton right margin-bottom"> <i class="fa fa-plus"></i></a>
			 	<a href="<?php echo site_url( 'eventos' ); ?>" class="columna no-xmall medium boton right margin-bottom"> Ver todos los eventos</a>
			</div>
			<div class="clear"></div>
			<?php
			$argsRelevantes = array(
								'post_type' => 'noticias',
								'tax_query' => array(
									array(
										'taxonomy' => 'tipos-de-noticias',
										'field'    => 'slug',
										'terms'    => 'eventos',
									)
								),
								'posts_per_page' => 3
							);
			$queryRelevantes = new WP_Query($argsRelevantes);
			if ( $queryRelevantes->have_posts() ) : while( $queryRelevantes->have_posts() ) : $queryRelevantes->the_post() ?>
		 		<article class="clearfix columna xmall-12 medium-6 large-4 margin-bottom">
			 		<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail( 'medium', array('class' => 'block margin-bottom') ); ?></a>
			 		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			 		<div class="clear"></div>
					<time datetime="2014-05-15"><?php echo get_post_meta($post->ID, '_fecha_inicio_meta', true); ?></time>
					<time datetime="2014-05-15"><?php echo get_post_meta($post->ID, '_fecha_final_meta', true); ?></time>
					<span class="right">Categoría</span>
			 		<p><?php the_excerpt(); ?></p>
			 		<hr>
			 		<a href="<?php the_permalink(); ?>" class="columna xmall leer-mas right"><i class="fa fa-plus"></i> Leer más...</a>
		 	</article>
		 	<?php endwhile; endif; wp_reset_postdata(); ?>
		 </section><!--Eventos-->

		 <section class="full clearfix margin-bottom"><!--Noticias-->
			<div class="clearfix margin-bottom">
			 	<h2 class="columna xmall-8">Oportunidades de Negocio</h2>
			 	<a href="noticias.html" class="columna xmall no-medium boton right margin-bottom"> <i class="fa fa-plus"></i></a>
			 	<a href="oportunidades-de-negocio.html" class="columna no-xmall medium boton right margin-bottom"> Ver más</a>
			</div>
			<article class="oportunidad columna xmall-12 large-6 margin-bottom">
			 		<h3 class="no-margin">Japanese bussines developer</h3>
			 		<div class="clear"></div>
					<time datetime="2014-05-15">10-09-14</time>
			 		<p>Atender y desarrollar las cuentas existentes en Japón.
			 		</p>
			 		<a href="" class="columna xmall leer-mas right"><i class="fa fa-plus"></i> Leer más...</a>
		 	</article>
		 	<article class="oportunidad columna xmall-12 large-6 margin-bottom">
			 		<h3 class="no-margin">Clasificador</h3>
			 		<div class="clear"></div>
					<time datetime="2014-05-15">09-09-14</time>
			 		<p>Clasificación arancelaria de mercancías, cálculo de  impuestos al comercio exterior, IGI, IVA, IEPS.
			 		</p>
			 		<a href="" class="columna xmall leer-mas right"><i class="fa fa-plus"></i> Leer más...</a>
		 	</article>
		 </section><!--Oportunidades-->
	</div><!-- main -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>