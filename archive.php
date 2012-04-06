<?php get_header(); ?>
<!-- Contenido ................................. -->

<div id="content" class="container">
<div id="front" class="column_main">

<?php if (have_posts()) : ?>
<?php $count = 0; ?>

	<?php /* If this is a category archive */ if (is_category()) { ?>
	<div class="archivo"><h1><?php echo single_cat_title(); ?></h1>
	<?php echo category_description(); ?></div>

	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	<div class="archivo"><h1>Etiqueta &#8216;<?php single_tag_title(); ?>&#8217;</h1></div>

<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<div class="archivo"><h1>Archivos diarios</h1>Artículos del <?php the_time('j') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></div>

	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<div class="archivo"><h1>Archivos mensuales</h1>Artículos de <?php the_time('F') ?> de <?php the_time('Y') ?></div>

	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<div class="archivo"><h1>Archivos anuales</h1>Artículos del <?php the_time('Y'); ?></div>

	<?php /* If this is a search */ } elseif (is_search()) { ?>
		<div class="archivo"><h1>Resultados de la búsqueda</h1></div>

	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<div class="archivo"><h1>Archivos de despeinados.com</h1></div>

<?php } ?>

<?php while (have_posts()) : the_post(); ?>
<?php $count++; ?>
 
<div <?php post_class(); ?>>

<h2><?php the_category(', '); ?></h2>

<div class="bubble"><a href="<?php the_permalink() ?>#idc-container-parent" title="<?php comments_number('Dejá tu comentario','1 comentario','% comentarios'); ?> en '<?php the_title(); ?>'"><?php comments_number('0','1','%'); ?></a></div>

<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
<div class="meta">Por <?php the_author_posts_link(); ?>, el <?php the_time('j') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?> - <?php echo '<ul class="addtoany_list">'; if( function_exists('ADDTOANY_SHARE_SAVE_ICONS') ) ADDTOANY_SHARE_SAVE_ICONS( array("html_wrap_open" => "<li>", "html_wrap_close" => "</li>") ); if( function_exists('ADDTOANY_SHARE_SAVE_BUTTON') ) ADDTOANY_SHARE_SAVE_BUTTON( array("html_wrap_open" => "<li>", "html_wrap_close" => "</li>") ); echo '</ul>'; ?> <?php edit_post_link('Editar', '<em>', '</em>'); ?></div>

<div id="entry"><?php the_content('Seguir leyendo &raquo;'); ?></div>

<div class="clear"></div>
<div id="info">

<div class="info_meta">
<?php if (function_exists('sociable_html')) { 
  echo sociable_html(); 
} ?></div>

<div class="info_meta_right">
<a class="comentarios" href="<?php the_permalink() ?>#idc-container-parent" title="<?php comments_number('Dejá tu comentario','1 comentario','% comentarios'); ?> en '<?php the_title(); ?>'"><?php comments_number('Dejá tu comentario &rarr;','Sumá tu comentario &rarr;','Sumá tu comentario &rarr;'); ?></a>
</div>

</div> <!-- Cierro Info -->

</div> <!-- Fin de post_class -->
<?php if ($count == 2) : ?>
<!-- MagianEntrePost -->
<div id="entreposteos">
<div class="ad">
<script type='text/javascript'>
GA_googleFillSlot("AllpagesEntrePost300x250");
</script>
</div>
<div class="otrosad">
<iframe src="http://www.facebook.com/plugins/likebox.php?id=113344322026850&amp;width=300&amp;connections=12&amp;stream=false&amp;header=false&amp;height=253" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:253px;" allowTransparency="true"></iframe>
</div>
</div><!-- Fin MagianEntrePost -->
<div class="clear"></div>
<?php endif; ?>

<?php if ($count == 4) : ?>
<!-- Publicidad --><div class="ads-468x60"><script type="text/javascript">GA_googleFillSlot("IndexAfterPost468x60");</script></div><!-- Fin publicidad -->
<?php endif; ?>
			
	<?php endwhile; ?>
					<div class="clear"></div>

<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></p>
</div> <!-- END -->		
 
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

<?php endif; ?>
</div> <!-- Cierro Contenido -->
<?php get_footer(); ?>