<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
	<div id="content" class="container">
		<div class="column_main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="archivo"><h1>Archivos despeinados</h1>
Nuestros archivos organizados cronológicamente</div>
<div id="entry"><?php the_content(); ?></div>

<?php endwhile; endif; ?>


</div> <!-- Cierro Column Main -->

<?php get_sidebar(); ?> <!-- Llamada de la barra lateral -->
<div class="hr_top"></div>

<div class="column_left_b"> <!-- PRIMERA COLUMNA -->
<?php query_posts('showposts=1&offset=3&cat=364'); ?> 
				<?php while (have_posts()) : the_post(); ?>
				<h2><?php the_category(', '); ?><i> - <a href="<?php the_permalink() ?>#idc-container-parent" title="<?php comments_number('Dejá tu comentario','1 comentario','% comentarios'); ?> en '<?php the_title(); ?>'"><?php comments_number('Sin comentarios','1 comentario','% comentarios'); ?></a></i></h2>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
<?php the_excerpt(); ?>
<h2 class="leermas"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Seguir leyendo &rarr;</a></h2>
<?php endwhile; ?> 
</div> <!-- FIN -->

<div class="column_center_b"> <!-- SEGUNDA COLUMNA -->
<?php query_posts('showposts=1&offset=3&cat=24'); ?> 
				<?php while (have_posts()) : the_post(); ?>
				<h2><?php the_category(', '); ?><i> - <a href="<?php the_permalink() ?>#idc-container-parent" title="<?php comments_number('Dejá tu comentario','1 comentario','% comentarios'); ?> en '<?php the_title(); ?>'"><?php comments_number('Sin comentarios','1 comentario','% comentarios'); ?></a></i></h2>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
<?php the_excerpt(); ?>
<h2 class="leermas"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Seguir leyendo &rarr;</a></h2>
<?php endwhile; ?> 
</div> <!-- FIN -->

<div class="column_right"> <!-- TERCERA COLUMNA -->
<?php query_posts('showposts=1&offset=3&cat=23'); ?> 
				<?php while (have_posts()) : the_post(); ?>
				<h2><?php the_category(', '); ?><i> - <a href="<?php the_permalink() ?>#idc-container-parent" title="<?php comments_number('Dejá tu comentario','1 comentario','% comentarios'); ?> en '<?php the_title(); ?>'"><?php comments_number('Sin comentarios','1 comentario','% comentarios'); ?></a></i></h2>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
<?php the_excerpt(); ?>
<h2 class="leermas"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Seguir leyendo &rarr;</a></h2>
<?php endwhile; ?>
</div> <!-- FIN -->

<div class="hr_top"></div>

</div> <!-- Cierro Contenido -->
<?php get_footer(); ?>