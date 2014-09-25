<?php
	get_header();
	the_post();
	$postID = $post->ID;
?>

	<?php if( has_term( 'eventos', 'tipos-de-noticias', $postID ) OR has_term( 'noticias', 'tipos-de-noticias', $postID ) ) { ?>
			<div class="main h-margin columna xmall-12 center block">
				 <section class="evento columna xmall-12 margin-bottom clearfix"><!--EVENTO-->
					<?php the_post_thumbnail( 'full', array('class' => 'margin-bottom columna xmall-12 medium-8 center block') ); ?>
					<div class="evento columna xmall-10 center">
						<h2 class="text-center"><?php the_title(); ?></h2>
						<h3 class="text-center"></h3>
						<p>
							<br />
							<?php the_content(); ?>
						</p>
					</div>
				</section>
			</div><!-- main -->
	<?php } ?>

	<?php if( has_term( 'oportunidades-de-negocio', 'tipos-de-noticias', $postID ) OR has_term( 'noticias', 'tipos-de-noticias', $postID ) ) { ?>
			<div class="main columna xmall-12 medium-8 large-9">
				<section class="full clearfix margin-bottom">
					<article class="oportunidad columna xmall-12 large-10 margin-bottom">
				 		<h2 class="no-margin"><?php the_title(); ?></h2>
				 		<div class="clear"></div>
						<time datetime="<?php the_time('j/n/Y');?>"><?php the_time('j/n/Y');?></time>
				 		<?php the_content(); ?>
				 	</article>
				 </section><!--Oportunidades-->
			</div><!-- main -->
	<?php } ?>

	<?php if( has_term( 'galerias', 'tipos-de-noticias', $postID ) { ?>
			<div class="main h-margin columna xmall-12 center block">
				 <section class="evento columna xmall-12 margin-bottom clearfix"><!--EVENTO-->
					<?php the_post_thumbnail( 'full', array('class' => 'margin-bottom columna xmall-12 medium-8 center block') ); ?>
					<div class="evento columna xmall-10 center">
						<h2 class="text-center"><?php the_title(); ?></h2>
						<h3 class="text-center"></h3>
						<p>
							<br />
							<?php the_content(); ?>
						</p>
					</div>

					<div class=" galeria columna xmall-12">
						<a class="columna xmall-6 medium-4 large-3" href="images/evento_01.jpg" data-lightbox="example-set" data-title="Imagen 1"><img class="example-image" src="images/evento_01.jpg" alt=""/></a>

						<a class="columna xmall-6 medium-4 large-3" href="images/evento_02.jpg" data-lightbox="example-set" data-title="Imagen 2"><img class="example-image" src="images/evento_02.jpg" alt="" /></a>

						<a class="columna xmall-6 medium-4 large-3" href="images/evento_03.jpg" data-lightbox="example-set" data-title="Imagen 3"><img class="example-image" src="images/evento_03.jpg" alt="" /></a>	

						<a class="columna xmall-6 medium-4 large-3" href="images/evento_04.jpg" data-lightbox="example-set" data-title="Imagen 4"><img class="example-image" src="images/evento_04.jpg" alt="" /></a>		
					</div>	
				</section>
			</div><!-- main -->
	<?php } ?>
<?php get_footer(); ?>