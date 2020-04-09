<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-117852050-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
      dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-117852050-1');
    </script>
    <!-- Google Tag Manager-->
    <script>
      (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-NW4HXJZ');
    </script>
    <!-- End Google Tag Manager--><meta name="description" content="Realizamos todo tipo de trabajos de impresión, artes gráficas, diseño digital y diseño y desarrollo web">
<meta name="keywords" content="Impresión Digital, Diseño Web, Diseño Gráfico, Gran Formato, Diseño, Konica, Impresión Laser, Impresión Konica, Desarrollo Web, Pretroquelado, Etiquetas, Impresión, Plotter, Protoprint, Impresión centro, Impresión Belén, Belén, Centro de Medellín, Laser, Bootstrap, HTML5, CSS3, HTML, CSS, Responsive Web Design, equipos para impresion digital, plotter de impresion gran formato, impresora etiquetas, impresion de volantes, impresion volantes, publicidad, tarjetas de presentacion, volantes, impresora, flyers, tarjetas personales, impresion gran formato, publicidad imprenta digital, impresion tarjetas presentacion, impresion digital urgente, impresion facturas, negocio impresion digital, pagina web">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Impresión Digital | <?php echo "$pageName"; ?></title><link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    

    <?php wp_head(); ?>
  </head>
  <body class="Inicio">
    <div id="top-pagina"></div>
    
    <!-------------------- FONDO CARGANDO -------------------->
    <?php $fondoCargando = new WP_Query('page_id=310'); ?>
    <?php while($fondoCargando -> have_posts()): $fondoCargando -> the_post(); ?>
        <div id="fondo-cargando">
          <?php the_post_thumbnail('full'); ?>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>

    
    <!-------------------- FONDO ANIMADO DE LA PAGINA -------------------->
    <?php
        $args = array(
          'post_type' => 'page',
          'post_parent' => 51
        );
      ?>
      <?php $i = 1; ?>
      <?php $fondoAnimado = new WP_Query($args); ?>
      <?php $count = $fondoAnimado -> found_posts(); ?>

      <?php while($fondoAnimado -> have_posts()): $fondoAnimado -> the_post(); ?>
          <div id="fondo<?php echo $i; ?>" style="background-image: url(<?php the_field('imagen'); ?>)"></div>
      <?php $i++; endwhile; wp_reset_postdata(); ?>

    <!-------------------- HEADER -------------------->
    <header class="cabecera">
      <div class="encabezado">
        <div class="areamenu">
          <div class="mostrar-menu" id="boton-menu">
            <p><span>&#8801;</span><br/>Menú</p>
          </div>
          <div class="ocultar-menu ocultar-boton-menu ocultomobile" id="boton-cerrar-menu">
            <p><span>X</span></p>
          </div>
          <nav class="menu menu-oculto">

            <!-- Logo en el menu mobile -->
            <?php $quienesSomos = new WP_Query('page_id=24'); ?>
            <?php while($quienesSomos -> have_posts()): $quienesSomos -> the_post(); ?>
              <div class="logo img-fluid">
                <img src="<?php the_field('logo'); ?>" alt="Protoprint" title="Protoprint"/>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>


            <?php
              $menu_name = 'menu_principal';
              $locations = get_nav_menu_locations();
              $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
              $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
            ?>

                  
          <?php if( !empty( $menuitems ) ): ?>
            <?php $i = 1; ?>
            <?php foreach ( $menuitems as $item ): ?>
              <div class="enlaces-menu" id="enlace<?php echo $i; ?>"><a href="<?php bloginfo('template_url'); ?><?php echo $item->url; ?>"><?php echo $item->post_title; ?></a></div>
              <?php $i++ ?>
            <?php endforeach; ?>
            <?php else: // Caso contrario mostramos un mensaje indicando que el menú no tiene elementos
    ?>
             <p class="msg msg--error">El menú no tiene enlaces cargados.</p>
            <?php endif; ?>
            <div class="esconder-menu">&#215;</div>
          </nav>
        </div>
        <h1>Impresión Digital</h1>
      </div>
    </header>