<?php get_header(); ?>
<!-- Contenido ................................. -->

<div id="content" class="container">
<div id="front" class="column_main">

<div id="entry"> 
<h1>Ups! No encontrado (404)</h1>

<p>Lo sentimos mucho, pero lo que estás tratando de buscar no está en <a href="http://www.despeinados.com">Pensamientos Despeinados</a>. Podés realizar una búsqueda, revisar <a href="http://www.despeinados.com/archivos">nuestros archivos</a> o curiosear en <a href="http://www.despeinados.com/etiquetas">nuestras etiquetas</a></p>

<p><form action="http://www.despeinados.com/search/" id="cse-search-box0">
  <div>
    <input type="hidden" name="cx" value="partner-pub-0739395377806826:5cf790-uhwm" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="31" />
    <input type="submit" name="sa" value="Buscar" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com.ar/cse/brand?form=cse-search-box&amp;lang=es"></script></p>

<br/>
<div class="etiquetas">
<?php if (function_exists('st_tag_cloud')): ?>
<?php st_tag_cloud(); ?>
<?php endif; ?>	
</div>

<div id="postposteos">
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

</div></div> <!-- END -->	
 
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