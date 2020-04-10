<?php
/*
Template Name: Empresa

@link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*/
get_header(); ?>


<!------------------------------- Contenido de la página ------------------------------->
<!-- Encabezado de la página -->
<?php while ( have_posts() ) : the_post(); ?>
<section class="principal-paginasinternas">
  <div class="principal-quienessomos container">
    <img class="img-fluid" src="<?php the_field('fondoencabezado') ?>"/>
    <div class="titulo-paginasinternas text-center wow slideInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="60">
      <h2><?php the_title(); ?></h2>
  </div></div>

</section>


 


    <!-- Sección principal de la página -->
<main>
  <section class="contenido-paginasinternas pb-4" id="contenido-quienessomos">
    <div class="container">
      <div class="row">
        <article class="col-12 col-sm-6 col-md-4 imagen-quienessomos my-md-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="1.4s" data-wow-offset="60"><img src="<?php the_field('logo') ?>" alt="Logo de Protoprint" title="Protoprint"/></article>
        <article class="col-12 col-sm-6 col-md-8 mt-md-4 wow fadeIn" data-wow-duration="5s" data-wow-delay="1.6s" data-wow-offset="60">
          <h3 class="tituloprincipal-quienessomos"><?php the_field('tituloseccion') ?></h3>
          <p><?php the_field('contenido') ?></p>
        </article>
            
        <article class="col-12 col-sm-6 col-md-4 contenidosMisionVisionValores">
          <button id=boton-mision class="titulos-quienessomos text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="1.8s" data-wow-offset="60">
            <h4><?php the_field('seccion01') ?></h4>
          </button>
          <div class=contenidoMision>
            <p><?php the_field('contenidoseccion01') ?></p>
          </div>
        </article>

        <article class="col-12 col-sm-6 col-md-4 contenidosMisionVisionValores">
          <button id=boton-vision class="titulos-quienessomos text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="1.8s" data-wow-offset="60">
            <h4><?php the_field('seccion02') ?></h4>
          </button>
          <div class=contenidoVision>
            <p><?php the_field('contenidoseccion02') ?></p></div>
        </article>
            
          
        <article class="col-12 col-sm-6 col-md-4 contenidosMisionVisionValores">
          <button id=boton-valores class="titulos-quienessomos text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="1.8s" data-wow-offset="60">
            <h4><?php the_field('seccion03') ?></h4>
          </button>
          <div class=contenidoValores>
            <p><?php the_field('contenidoseccion03') ?></p></div>
        </article>
      </div>
    </div>
  </section>
</main>
<?php endwhile; wp_reset_postdata(); ?>