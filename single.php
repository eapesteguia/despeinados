<?php get_header(); ?>
	<div id="content" class="container">
		<div class="column_main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div <?php post_class(); ?>>

<h2><?php the_category(', '); ?></h2>

<div class="bubble"><a href="<?php the_permalink() ?>#idc-container-parent" title="<?php comments_number('Dejá tu comentario','1 comentario','% comentarios'); ?> en '<?php the_title(); ?>'"><?php comments_number('0','1','%'); ?></a></div>

<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1><div class="meta">Por <?php the_author_posts_link(); ?>, el <?php the_time('j') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?> - <?php echo '<ul class="addtoany_list">'; if( function_exists('ADDTOANY_SHARE_SAVE_ICONS') ) ADDTOANY_SHARE_SAVE_ICONS( array("html_wrap_open" => "<li>", "html_wrap_close" => "</li>") ); if( function_exists('ADDTOANY_SHARE_SAVE_BUTTON') ) ADDTOANY_SHARE_SAVE_BUTTON( array("html_wrap_open" => "<li>", "html_wrap_close" => "</li>") ); echo '</ul>'; ?> <?php edit_post_link('Editar', '<em>', '</em>'); ?></div>

<div id="entry"><?php the_content(); ?></div>

<div class="clear"></div>
<div id="info2">

<div class="info_meta">
<?php if (function_exists('ic_BeSocial_Buttons')) { ?>
<?php ic_BeSocial_Buttons(); ?>
<?php } ?></div>

<div class="info_meta_right_single">
<a class="comentarios" href="<?php the_permalink() ?>#idc-container-parent" title="<?php comments_number('Dejá tu comentario','1 comentario','% comentarios'); ?> en '<?php the_title(); ?>'"><?php comments_number('Dejá tu comentario &rarr;','Sumá tu comentario &rarr;','Sumá tu comentario &rarr;'); ?></a>
</div>

</div> <!-- Cierro Info -->
</div> <!-- Fin de post_class -->

<div class="megusta">
<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;layout=standard&amp;show_faces=false&amp;width=620&amp;action=like&amp;font&amp;colorscheme=light&amp;height=34" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:620px; height:34px;" allowTransparency="true"></iframe>
</div>

<div id="bordesin">
<?php the_tags( '<div class="meta">Tags: ', ', ', '</div>'); ?></div>

<!-- Publicidad -->
<div class="ads-468x60">
<script type="text/javascript">
  GA_googleFillSlot("DespeinadosAfterPost468x60");
</script></div>
<!-- Publicidad -->

<div id="postposteos">
<div class="ad">
<!-- Artículos relacionados -->
<div class="nexo"><h1>Relacionadas</h1>
<div class="meta">Otras notas relacionadas con «<?php the_title(); ?>»</div>
<div class="relacionados">
<?php if (function_exists('st_related_posts')): ?>
<?php st_related_posts(); ?>
<?php endif; ?>
</div></div>
<!-- artículos relacionados -->
</div>
<div class="otrosad">
<iframe src="http://www.facebook.com/plugins/likebox.php?id=113344322026850&amp;width=300&amp;connections=12&amp;stream=false&amp;header=false&amp;height=253" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:253px;" allowTransparency="true"></iframe>
</div>
</div>
<div class="clear"></div>


<!-- Comentarios | IntenseDetabe -->
<?php comments_template(); ?>

<!-- Publicidad -->
<div class="ads-468x60">
<script type='text/javascript'>
GA_googleFillSlot("DespeinadosAfterPost468x60_1");
</script></div>
<!-- Publicidad -->

<?php endwhile; else: ?><h1>Ups, parece que hubo un error.</h1><?php endif; ?>
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
<?php query_posts('showposts=1&offset=3&cat=21'); ?> 
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