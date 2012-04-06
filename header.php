<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<!--
   #####  ######  ####  #####  ###### # #    #   ##   #####   ####   ####  
   #    # #      #      #    # #      # ##   #  #  #  #    # #    # #      
   #    # #####   ####  #    # #####  # # #  # #    # #    # #    #  ####  
   #    # #           # #####  #      # #  # # ###### #    # #    #      # 
   #    # #      #    # #      #      # #   ## #    # #    # #    # #    # 
   #####  ######  ####  #      ###### # #    # #    # #####   ####   ####  
-->   
<head>
<title><?php if (is_home()) : ?>Pensamientos Despeinados | actualidad, internet, medios, periodismo, deportes, curiosidades<?php else : ?><?php wp_title('', 'false'); ?> | Pensamientos Despeinados<?php endif; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="generator" content="WordPress" />
<meta name="description" content="actualidad, internet, medios, periodismo, deportes, curiosidades" />
<meta name="keywords" content="actualidad, citas, cultura, humor, deportes, internet, medios, publicidad, periodismo, tecnología, juegos, software libre, web, cibercultura, comunicación, curiosidades, vida cotidiana, despeinados" />
<meta name="author" content="despeinados.com" />
<meta http-equiv="content-language" content="es" />
<meta name="organization" content="despeinados.com" />
<meta name="locality" content="ES, Argentina" />

<!-- CSS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" /><!--[if IE 7]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/iestyle.css" />
<![endif]-->	
<!--[if lt IE 6]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie6style.css" />
<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/s/pngfix.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ui-core.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ui-theme.css" type="text/css" />
<!-- Fin CSS -->

<!-- Encabezado WP -->
<?php
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-ui-core');
wp_enqueue_script('jquery-ui-tabs'); 
wp_head();
wp_get_archives('type=monthly&format=link');
?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<!-- Fin encabezado WP -->

<!-- Feeds  -->
<link rel="alternate" type="application/rss+xml" title="Despeinados RSS 2.0" href="http://feeds.feedburner.com/despeinados" />
<link rel="alternate" type="text/xml" title="Despeinados RSS .92" href="http://feeds.feedburner.com/despeinados" />
<link rel="alternate" type="application/atom+xml" title="Despeinados Atom" href="http://feeds.feedburner.com/despeinados" />
<link rel="alternate" type="application/rss+xml" title="Despeinados Twitter Feed" href="http://twitter.com/statuses/user_timeline/61371621.rss" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" type="image/png" href="/favicon.png">
<!-- Fin Feeds -->

<!-- Google para la birra -->
<script type="text/javascript" src="http://partner.googleadservices.com/gampad/google_service.js">
</script>
<script type="text/javascript">
  GS_googleAddAdSenseService("ca-pub-0739395377806826");
  GS_googleEnableAllServices();
</script>
<script type="text/javascript">
  GA_googleAddSlot("ca-pub-0739395377806826", "DespeinadosTop300x250");
  GA_googleAddSlot("ca-pub-0739395377806826", "AllpagesEntrePost300x250");
  GA_googleAddSlot("ca-pub-0739395377806826", "IndexAfterPost468x60");
  GA_googleAddSlot("ca-pub-0739395377806826", "DespeinadosAfterPost468x60");
  GA_googleAddSlot("ca-pub-0739395377806826", "DespeinadosAfterPost468x60_1");
  GA_googleAddSlot("ca-pub-0739395377806826", "DespeinadosLeft125x125");
  GA_googleAddSlot("ca-pub-0739395377806826", "DespeinadosRight125x125");
</script>
<script type="text/javascript">
  GA_googleFetchAds();
</script>
<!-- Fin Google compró un cajón -->

<!-- Facebook Open Graph protocol -->
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:image" content="http://www.despeinados.com/wp-content/themes/despeinados_02/i/logo_fondoazul.jpg" />
<meta property="og:site_name" content="Despeinados.com" />
<meta property="fb:admins" content="1273956631,1131808071,1452963473" />
<meta property="og:description" content="<?php the_excerpt(); ?>" />
<meta property="fb:page_id" content="113344322026850" />
<meta property="og:email" content="mesaredonda@despeinados.com"/>
<meta property="og:locality" content="Argentina"/>
<meta property="og:author" content="despeinados.com"/>
<!-- Fin Facebook Open Graph protocol -->

</head>
<body>
<div id="header">
<dl class="fondo">
	<dd><a class="LINK0" title="Portada | Inicio" href="http://www.despeinados.com/"></a></dd>
	<dd><a class="LINK1" title="Portada | Inicio" href="http://www.despeinados.com/"></a></dd>

<div id="wp_quotes"> 
<div class="wp_quotes_quote">Cosas que nos llaman poderosamente la atención.</div> 
</div> 

<!-- Búsqueda --> 
<form action="http://www.despeinados.com/search/" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-0739395377806826:5cf790-uhwm" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="31" />
    <input type="submit" name="sa" value="Buscar" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com.ar/cse/brand?form=cse-search-box&amp;lang=es"></script> 
<!-- Fin Búsqueda -->

</dl></div> <!-- Fin header -->
<div class="clear"></div>

<div id="secciones"> <!-- Menú de navegación -->
<div id="categories">
<ul class="nav superfish">
<li class="cat-item cat-item-12"><a href="http://www.despeinados.com/category/actualidad/" title="Actualidad del mundo, el país, la Patagonia y el AltoValle.">Actualidad</a>
</li>
	<li class="cat-item cat-item-33"><a href="http://www.despeinados.com/category/breves/" title="Notas breves, también llamadas asides, mini-artículos o miniblog en la blogósfera.">Breves</a>
<ul class='children'>
	<li class="cat-item cat-item-22"><a href="http://www.despeinados.com/category/breves/citas-y-frases-celebres/" title="Eso, citas y frases célebres.">Citas</a>
</li>
	<li class="cat-item cat-item-1576"><a href="http://www.despeinados.com/category/breves/breves-datos/" title="Números, estadísticas, cantidades, porcentajes y probabilidades interesantes.">Datos</a>
</li>
	<li class="cat-item cat-item-1597"><a href="http://www.despeinados.com/category/breves/pastillas/" title="Dosis de información recetada en pastillas.">Pastillas</a>
</li>
</ul>
</li>
	<li class="cat-item cat-item-27"><a href="http://www.despeinados.com/category/capital-cultural/" title="Libros, cine, fotografía, teatro, arte y todo lo relacionado con la cultura.">Cultura</a>
</li>
	<li class="cat-item cat-item-23"><a href="http://www.despeinados.com/category/curiosidades/" title="Cosas que nos llaman poderosamente la atención.">Curiosidades</a>
<ul class='children'>
	<li class="cat-item cat-item-1642"><a href="http://www.despeinados.com/category/curiosidades/humor-curiosidades/" title="Cosas que nos resultan divertidas y nos hacen reir.">Humor</a>
</li>
</ul>
</li>
	<li class="cat-item cat-item-21"><a href="http://www.despeinados.com/category/deportes/" title="El mundo de los deportes.">Deportes</a>
</li>
	<li class="cat-item cat-item-364"><a href="http://www.despeinados.com/category/internet/" title="Comunicación y cultura digital, Internet y lo virtual.">Internet</a>
</li>
	<li class="cat-item cat-item-25"><a href="http://www.despeinados.com/category/medios-publicidad/" title="Diarios, revistas, radio, TV y publicidad. Todo en un solo lugar.">Medios</a>
<ul class='children'>
	<li class="cat-item cat-item-1568"><a href="http://www.despeinados.com/category/medios-publicidad/publicidad-medios-publicidad/" title="Publicidad, creatividad, marketing y campañas.">Publicidad</a>
</li>
</ul>
</li>
	<li class="cat-item cat-item-24"><a href="http://www.despeinados.com/category/periodismo-comunicacion/" title="Periodismo y Comunicación Social">Periodismo</a>
</li>
	<li class="cat-item cat-item-1369"><a href="http://www.despeinados.com/category/tecnologia/" title="Software libre, gadgets, juegos y herramientas.">Tecnología</a>
<ul class='children'>
	<li class="cat-item cat-item-1766"><a href="http://www.despeinados.com/category/tecnologia/software-libre-tecnologia/" title="Software, Open Source, Linux, Ubuntu y herramientas libres">Software libre</a>
</li>
	<li class="cat-item cat-item-39"><a href="http://www.despeinados.com/category/tecnologia/juegos-y-diversion/" title="Juegos en la web, chistes, historias divertidas y cualquier cosa entretenida.">Juegos</a>
</li>
</ul>
</li>
	<li class="cat-item cat-item-19"><a href="http://www.despeinados.com/category/vida-cotidiana/" title="Universidad, trabajo, familia, dilemas cotidianos, aventuras y tiempo libre.">Vida Cotidiana</a>
</li>
</ul>
</div></div> <!-- Fin Menú de navegación -->