<div id="sidebar">

<?php if (is_home()) { ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> <!-- Llamada a los widgets -->

<div class="follow-despeinados">
<ul>
<li>
<a href="http://feeds.feedburner.com/despeinados"><img title="RSS de Pensamientos Despeinados" alt="RSS" src="<?php bloginfo('template_directory'); ?>/i/feed_top.png"/></a>
</li>
<li>
<a href="https://twitter.com/despeinados"><img title="Seguinos en Twitter [@despeinados]" alt="Twitter" src="<?php bloginfo('template_directory'); ?>/i/twitter_top.png"/></a>
</li>
<li>
<a href="http://www.facebook.com/despeinadoscom"><img title="Seguinos en Facebook" alt="Facebook" src="<?php bloginfo('template_directory'); ?>/i/facebook_top.png"/></a>
</li>
<li>
<a href="http://feedburner.google.com/fb/a/mailverify?uri=despeinados&amp;loc=es_ES"><img title="Recibí las actualizaciones por mail" alt="Mail" src="<?php bloginfo('template_directory'); ?>/i/email_top.png"/></a>
</li>
</ul>
<span>Seguinos por la web: <?php if( class_exists('Add_to_Any_Subscribe_Widget') ) { Add_to_Any_Subscribe_Widget::display(); } ?></span>
<p><a href="http://www.despeinados.com/que-somos/" title="Acerca de Despeinados.com | ¿Qué somos?">Acerca de</a> | <a href="http://www.despeinados.com/archivos/" title="Archivo de Despeinados.com">Archivos</a> | <a href="http://www.despeinados.com/contacto/" title="Comunicate con nosotros!">Contacto</a> | <a href="http://www.despeinados.com/contacto/" title="Queremos escucharte!">Sugerencias</a></p>
</div>
<div class="clear"></div>

<!--300x250-->
<div class="ads-300x250">
<script type="text/javascript">GA_googleFillSlot("DespeinadosTop300x250");</script>
</div><!--Fin 300x250-->

<div class="box-bordecomun">
<div class="titulares_twitter">En TWITTER &raquo;</div>
<?php if (function_exists('tweet_blender_widget')): ?>
<?php
tweet_blender_widget(array(
    'unique_div_id' => 'tweetblender-t1',
    'sources' => '@eapesteguia,@sespino,@nicomalpede,@despeinados',
    'refresh_rate' => 0,
    'tweets_num' => 2,
    'view_more_url' => 'http://www.despeinados.com/twitter/'
)); ?>
<?php endif; ?>
</div>
<div class="clear"></div>

<!-- Tabs Populares -->
<div id="masvisto">
<div id="tabs" class="ui-tabs">
	<ul>
		<li><a href="#tabs-1">Ultimas publicadas</a></li>
		<!-- <li><a href="#tabs-2">+ Comentadas</a></li> -->
		<li><a href="#tabs-3">Destacadas</a></li>
	</ul>
	<div id="tabs-1" class="ui-tabs-hide">
<?php if (function_exists('query_posts')): ?>
<ul class="popular">
<?php query_posts('showposts=10&offset=7'); ?>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
	</div>
	<div id="tabs-2" class="ui-tabs-hide">
<?php if (function_exists('mdv_most_commented')): ?>
<ul class="popular">
		<?php mdv_most_commented(10, '<li>', '</li>', false, '', true); ?>
</ul>
<?php endif; ?>
    </div>
	<div id="tabs-3" class="ui-tabs-hide">
<ul class="popular">
<li><a href="http://www.despeinados.com/30/04/2006/%C2%BFpor-que-estudiar-comunicacion-social/" title="¿Por qué estudiar Comunicación Social?">¿Por qué estudiar Comunicación Social?</a></li><li><a href="http://www.despeinados.com/04/09/2007/abebe-bikila-la-leyenda-de-los-pies-descalzos/" title="Abebe Bikila, la leyenda de los pies descalzos">Abebe Bikila, la leyenda de los pies descalzos</a></li><li><a href="http://www.despeinados.com/28/05/2007/estudiantes-de-periodismo-%C2%BFpor-que-un-blog-2/" title="Estudiantes de periodismo: ¿Por qué un blog?">Estudiantes de periodismo: ¿Por qué un blog?</a></li><li><a href="http://www.despeinados.com/28/02/2008/de-un-valle-a-otro-contando-un-viaje-i/" title="De un valle a otro, contando un viaje (I)">De un valle a otro, contando un viaje (I)</a></li><li><a href="http://www.despeinados.com/30/04/2006/%C2%BFpor-que-estudiar-comunicacion-social/" title="Pato: la historia del Deporte Nacional">Pato: la historia del Deporte Nacional</a></li><li><a href="http://www.despeinados.com/03/07/2007/nuestro-derecho-de-acceso-a-la-informacion-publica-publicidad-oficial-en-neuquen/" title="Publicidad oficial en Neuquén">Publicidad oficial en Neuquén</a></li><li><a href="http://www.despeinados.com/18/12/2007/torball-un-deporte-del-que-pocos-hablan/" title="Torball: un deporte del que pocos hablan">Torball: un deporte del que pocos hablan</a></li><li><a href="http://www.despeinados.com/05/08/2008/papel-electronico-usos-y-funcionamiento/" title="Papel electrónico: experiencias en la prensa">Papel electrónico: experiencias en la prensa</a></li><li><a href="http://www.despeinados.com/15/10/2007/cambio-climatico-en-argentina/" title="Cambio climático en Argentina">Cambio climático en Argentina</a></li><li><a href="http://www.despeinados.com/09/04/2007/movilizacion-dolor-y-repudio-en-neuquen/" title="Movilización, dolor y repudio en Neuquén">Movilización, dolor y repudio en Neuquén</a></li>
</ul>

	</div>
</div>
</div><!-- End Populares -->

<!-- Tabs Comentarios -->
<div id="masvisto">
<div id="tabss" class="ui-tabs">
	<ul>
		<li><a href="#tabs-4">Ultimos comentarios</a></li>
                <!-- <li><a href="#tabs-5">Top Comentaristas</a></li> -->
	</ul>
	<div id="tabs-4" class="ui-tabs-hide">
<?php if (function_exists('get_recent_comments')) { ?>
<ul class="popular">
<?php get_recent_comments(); ?>
</ul>
<?php } ?>
</div>

<div id="tabs-5" class="ui-tabs-hide">
<ul class="popular">
Ups! No ta' más, se jue!
</ul>
</div>
	
</div>
</div><!-- End Comentarios -->

<div class="box-bordecomun">
<div class="titulares">Hablamos de estos temas</div>
<?php wp_tag_cloud('smallest=10&largest=18&number=20&format=flat&orderby=name&order=RAND'); ?>
</div>
<div class="clear"></div>

<!--125x125 x2-->
<div class="ads-125x125">
<ul>
<li><script type="text/javascript">GA_googleFillSlot("DespeinadosLeft125x125");</script></li>
<li><script type="text/javascript">GA_googleFillSlot("DespeinadosRight125x125");</script></li>
</ul>
</div><!--Fin 125x125-->
<div class="clear"></div>

<div class="box-bordecomun">
<div class="titulares">Nos gusta estar en contacto. Charlemos.</div>
<ul class="hablemos">
<li>
Nicolás Malpede — <a class="twitter" rel="nofollow" title="@nicomalpede en Twitter" href="http://www.twitter.com/nicomalpede">Twitter</a> | <a class="facebook" rel="nofollow" title="Nico en Facebook" href="http://www.facebook.com/nicomalpede">Facebook</a>
</li>
<li>
Sebastián Espiño — <a class="twitter" rel="nofollow" title="@sespino en Twitter" href="http://www.twitter.com/sespino">Twitter</a> | <a class="facebook" rel="nofollow" title="Seba en Facebook" href="http://www.facebook.com/sebastian.espino">Facebook</a>
</li>
<li>
Ezequiel Apesteguia — <a class="twitter" rel="nofollow" title="@eapesteguia en Twitter" href="http://www.twitter.com/eapesteguia">Twitter</a> | <a class="facebook" rel="nofollow" title="Eze en Facebook" href="http://www.facebook.com/eapesteguia">Facebook</a>
</li>
</ul>
</div>
<div class="clear"></div>


<?php endif; ?><?php } ?>

<?php if(is_single() || is_page() || is_archive()){ ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> <!-- Llamada a los widgets -->

<div class="follow-despeinados">
<ul>
<li>
<a href="http://feeds.feedburner.com/despeinados"><img title="RSS de Pensamientos Despeinados" alt="RSS" src="<?php bloginfo('template_directory'); ?>/i/feed_top.png"/></a>
</li>
<li>
<a href="https://twitter.com/despeinados"><img title="Seguinos en Twitter [@despeinados]" alt="Twitter" src="<?php bloginfo('template_directory'); ?>/i/twitter_top.png"/></a>
</li>
<li>
<a href="http://www.facebook.com/despeinadoscom"><img title="Seguinos en Facebook" alt="Facebook" src="<?php bloginfo('template_directory'); ?>/i/facebook_top.png"/></a>
</li>
<li>
<a href="http://feedburner.google.com/fb/a/mailverify?uri=despeinados&amp;loc=es_ES"><img title="Recibí las actualizaciones por mail" alt="Mail" src="<?php bloginfo('template_directory'); ?>/i/email_top.png"/></a>
</li>
</ul>
<span>Seguinos por la web: <?php if( class_exists('Add_to_Any_Subscribe_Widget') ) { Add_to_Any_Subscribe_Widget::display(); } ?></span>
<p><a href="http://www.despeinados.com/que-somos/" title="Acerca de Despeinados.com | ¿Qué somos?">Acerca de</a> | <a href="http://www.despeinados.com/archivos/" title="Archivo de Despeinados.com">Archivos</a> | <a href="http://www.despeinados.com/contacto/" title="Comunicate con nosotros!">Contacto</a> | <a href="http://www.despeinados.com/contacto/" title="Queremos escucharte!">Sugerencias</a></p>
</div>
<div class="clear"></div>

<!--300x250-->
<div class="ads-300x250">
<script type="text/javascript">GA_googleFillSlot("DespeinadosTop300x250");</script>
</div><!--Fin 300x250-->

<!-- Tabs Populares -->
<div id="masvisto">
<div id="tabs" class="ui-tabs">
	<ul>
		<li><a href="#tabs-1">Ultimas publicadas</a></li>
		<!-- <li><a href="#tabs-2">+ Comentadas</a></li> -->
		<li><a href="#tabs-3">Destacadas</a></li>
	</ul>
	<div id="tabs-1" class="ui-tabs-hide">
<?php if (function_exists('query_posts')): ?>
<ul class="popular">
<?php query_posts('showposts=10&offset=7'); ?>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
	</div>
	<div id="tabs-2" class="ui-tabs-hide">
<?php if (function_exists('mdv_most_commented')): ?>
<ul class="popular">
		<?php mdv_most_commented(10, '<li>', '</li>', false, '', true); ?>
</ul>
<?php endif; ?>
    </div>
	<div id="tabs-3" class="ui-tabs-hide">
<ul class="popular">
<li><a href="http://www.despeinados.com/30/04/2006/%C2%BFpor-que-estudiar-comunicacion-social/" title="¿Por qué estudiar Comunicación Social?">¿Por qué estudiar Comunicación Social?</a></li><li><a href="http://www.despeinados.com/04/09/2007/abebe-bikila-la-leyenda-de-los-pies-descalzos/" title="Abebe Bikila, la leyenda de los pies descalzos">Abebe Bikila, la leyenda de los pies descalzos</a></li><li><a href="http://www.despeinados.com/28/05/2007/estudiantes-de-periodismo-%C2%BFpor-que-un-blog-2/" title="Estudiantes de periodismo: ¿Por qué un blog?">Estudiantes de periodismo: ¿Por qué un blog?</a></li><li><a href="http://www.despeinados.com/28/02/2008/de-un-valle-a-otro-contando-un-viaje-i/" title="De un valle a otro, contando un viaje (I)">De un valle a otro, contando un viaje (I)</a></li><li><a href="http://www.despeinados.com/30/04/2006/%C2%BFpor-que-estudiar-comunicacion-social/" title="Pato: la historia del Deporte Nacional">Pato: la historia del Deporte Nacional</a></li><li><a href="http://www.despeinados.com/03/07/2007/nuestro-derecho-de-acceso-a-la-informacion-publica-publicidad-oficial-en-neuquen/" title="Publicidad oficial en Neuquén">Publicidad oficial en Neuquén</a></li><li><a href="http://www.despeinados.com/18/12/2007/torball-un-deporte-del-que-pocos-hablan/" title="Torball: un deporte del que pocos hablan">Torball: un deporte del que pocos hablan</a></li><li><a href="http://www.despeinados.com/05/08/2008/papel-electronico-usos-y-funcionamiento/" title="Papel electrónico: experiencias en la prensa">Papel electrónico: experiencias en la prensa</a></li><li><a href="http://www.despeinados.com/15/10/2007/cambio-climatico-en-argentina/" title="Cambio climático en Argentina">Cambio climático en Argentina</a></li><li><a href="http://www.despeinados.com/09/04/2007/movilizacion-dolor-y-repudio-en-neuquen/" title="Movilización, dolor y repudio en Neuquén">Movilización, dolor y repudio en Neuquén</a></li>
</ul>

	</div>
</div>
</div><!-- End Populares -->

<!-- Tabs Comentarios -->
<div id="masvisto">
<div id="tabss" class="ui-tabs">
	<ul>
		<li><a href="#tabs-4">Ultimos comentarios</a></li>
                <!-- <li><a href="#tabs-5">Top Comentaristas</a></li> -->
	</ul>
	<div id="tabs-4" class="ui-tabs-hide">
<?php if (function_exists('get_recent_comments')) { ?>
<ul class="popular">
<?php get_recent_comments(); ?>
</ul>
<?php } ?>
</div>

<div id="tabs-5" class="ui-tabs-hide">
<ul class="popular">
Ups! No ta' más, se jue!
</ul>
</div>
	
</div>
</div><!-- End Comentarios -->

<div class="box-bordecomun">
<div class="titulares">Hablamos de estos temas</div>
<?php wp_tag_cloud('smallest=10&largest=18&number=20&format=flat&orderby=name&order=RAND'); ?>
</div>
<div class="clear"></div>

<!--125x125 x2-->
<div class="ads-125x125">
<ul>
<li><script type="text/javascript">GA_googleFillSlot("DespeinadosLeft125x125");</script></li>
<li><script type="text/javascript">GA_googleFillSlot("DespeinadosRight125x125");</script></li>
</ul>
<div class="clear"></div>
</div><!--Fin 125x125-->

<div class="box-bordecomun">
<div class="titulares">Nos gusta estar en contacto. Charlemos.</div>
<ul class="hablemos">
<li>
Nicolás Malpede — <a class="twitter" rel="nofollow" title="@nicomalpede en Twitter" href="http://www.twitter.com/nicomalpede">Twitter</a> | <a class="facebook" rel="nofollow" title="Nico en Facebook" href="http://www.facebook.com/nicomalpede">Facebook</a>
</li>
<li>
Sebastián Espiño — <a class="twitter" rel="nofollow" title="@sespino en Twitter" href="http://www.twitter.com/sespino">Twitter</a> | <a class="facebook" rel="nofollow" title="Seba en Facebook" href="http://www.facebook.com/sebastian.espino">Facebook</a>
</li>
<li>
Ezequiel Apesteguia — <a class="twitter" rel="nofollow" title="@eapesteguia en Twitter" href="http://www.twitter.com/eapesteguia">Twitter</a> | <a class="facebook" rel="nofollow" title="Eze en Facebook" href="http://www.facebook.com/eapesteguia">Facebook</a>
</li>
</ul>
</div>
<div class="clear"></div>

<?php endif; ?><?php } ?>


<?php if(is_404()){ ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> <!-- Llamada a los widgets -->

<div class="follow-despeinados">
<ul>
<li>
<a href="http://feeds.feedburner.com/despeinados"><img title="RSS de Pensamientos Despeinados" alt="RSS" src="<?php bloginfo('template_directory'); ?>/i/feed_top.png"/></a>
</li>
<li>
<a href="https://twitter.com/despeinados"><img title="Seguinos en Twitter [@despeinados]" alt="Twitter" src="<?php bloginfo('template_directory'); ?>/i/twitter_top.png"/></a>
</li>
<li>
<a href="http://apps.facebook.com/blognetworks/blog/pensamientos_despeinados/"><img title="Seguinos en Facebook" alt="Facebook" src="<?php bloginfo('template_directory'); ?>/i/facebook_top.png"/></a>
</li>
<li>
<a href="http://feedburner.google.com/fb/a/mailverify?uri=despeinados&amp;loc=es_ES"><img title="Recibí las actualizaciones por mail" alt="Mail" src="<?php bloginfo('template_directory'); ?>/i/email_top.png"/></a>
</li>
</ul>
<span>Seguinos por la web: <?php if( class_exists('Add_to_Any_Subscribe_Widget') ) { Add_to_Any_Subscribe_Widget::display(); } ?></span>
<p><a href="http://www.despeinados.com/que-somos/" title="Acerca de Despeinados.com | ¿Qué somos?">Acerca de</a> | <a href="http://www.despeinados.com/archivos/" title="Archivo de Despeinados.com">Archivos</a> | <a href="http://www.despeinados.com/contacto/" title="Comunicate con nosotros!">Contacto</a> | <a href="#" onclick="UserVoice.Popin.show(); return false;" title="Queremos escucharte!">Sugerencias</a></p>
</div>
<div class="clear"></div>

<!-- Tabs Populares -->
<div id="masvisto">
<div id="tabs" class="ui-tabs">
	<ul>
		<li><a href="#tabs-1">Ultimas</a></li>
		<li><a href="#tabs-2">+ Comentadas</a></li>
		<li><a href="#tabs-3">Destacadas</a></li>
	</ul>
	<div id="tabs-1" class="ui-tabs-hide">
<?php if (function_exists('query_posts')): ?>
<ul class="popular">
<?php query_posts('showposts=10'); ?>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
	</div>
	<div id="tabs-2" class="ui-tabs-hide">
<?php if (function_exists('mdv_most_commented')): ?>
<ul class="popular">
		<?php mdv_most_commented(10, '<li>', '</li>', false, '', true); ?>
</ul>
<?php endif; ?>
    </div>
	<div id="tabs-3" class="ui-tabs-hide">
<ul class="popular">
<li><a href="http://www.despeinados.com/30/04/2006/%C2%BFpor-que-estudiar-comunicacion-social/" title="¿Por qué estudiar Comunicación Social?">¿Por qué estudiar Comunicación Social?</a></li><li><a href="http://www.despeinados.com/04/09/2007/abebe-bikila-la-leyenda-de-los-pies-descalzos/" title="Abebe Bikila, la leyenda de los pies descalzos">Abebe Bikila, la leyenda de los pies descalzos</a></li><li><a href="http://www.despeinados.com/28/05/2007/estudiantes-de-periodismo-%C2%BFpor-que-un-blog-2/" title="Estudiantes de periodismo: ¿Por qué un blog?">Estudiantes de periodismo: ¿Por qué un blog?</a></li><li><a href="http://www.despeinados.com/28/02/2008/de-un-valle-a-otro-contando-un-viaje-i/" title="De un valle a otro, contando un viaje (I)">De un valle a otro, contando un viaje (I)</a></li><li><a href="http://www.despeinados.com/30/04/2006/%C2%BFpor-que-estudiar-comunicacion-social/" title="Pato: la historia del Deporte Nacional">Pato: la historia del Deporte Nacional</a></li><li><a href="http://www.despeinados.com/03/07/2007/nuestro-derecho-de-acceso-a-la-informacion-publica-publicidad-oficial-en-neuquen/" title="Publicidad oficial en Neuquén">Publicidad oficial en Neuquén</a></li><li><a href="http://www.despeinados.com/18/12/2007/torball-un-deporte-del-que-pocos-hablan/" title="Torball: un deporte del que pocos hablan">Torball: un deporte del que pocos hablan</a></li><li><a href="http://www.despeinados.com/05/08/2008/papel-electronico-usos-y-funcionamiento/" title="Papel electrónico: experiencias en la prensa">Papel electrónico: experiencias en la prensa</a></li><li><a href="http://www.despeinados.com/15/10/2007/cambio-climatico-en-argentina/" title="Cambio climático en Argentina">Cambio climático en Argentina</a></li><li><a href="http://www.despeinados.com/09/04/2007/movilizacion-dolor-y-repudio-en-neuquen/" title="Movilización, dolor y repudio en Neuquén">Movilización, dolor y repudio en Neuquén</a></li>
</ul>

	</div>
</div>
</div><!-- End Populares -->

<?php endif; ?><?php } ?>

</div> <!-- Sidebar -->
<div class="clear"></div>