<?php get_header(); the_post(); ?>
	<div class="main h-margin columna xmall-12 medium-8 large-9">
		<section class="clearfix margin-bottom"><!--OBJETIVOS-->
			<?php the_post_thumbnail( 'large', array('class' => 'margin-bottom') ); ?>
			<p class="margin-bottom"><em>AIESEC (Asociación Internacional de Estudiantes en Ciencias Económicas y Comerciales)</em> es la mayor organización del mundo gestionada por jóvenes que provee a sus miembros de una experiencia de desarrollo integrada compuesta de oportunidades de liderazgo, programa internacional de intercambios y la participación en un ambiente global de aprendizaje.</p>
		</section><!--OBJETIVOS-->
		<hr class="margin-bottom">
		<section class="clearfix margin-bottom">
			<div class="columna xmall-12">
				<h3>AIESEC Alumni México [AAM] </h3>
				<p class="margin-bottom">Somos todos aquellos que contribuimos al desarrollo de AIESEC en México como miembros activos, o participando en prácticas internacionales.</p>
				<div class="full no-xmall medium">
					<?php the_content(); ?>
				</div>
		</section>
	</div><!-- main -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>