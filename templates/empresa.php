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
          <?php the_content(); ?>
        </article>
            
        <?php 
        $args = array(
                    'post_type' => 'page',
                    'post_parent' => 24,
                    'order' => 'ASC'
                  );
      ?>
        <?php $empresaContent = new WP_Query($args); ?>
        <?php while($empresaContent -> have_posts()): $empresaContent -> the_post(); ?>

        <article class="col-12 col-sm-6 col-md-4 contenidosMisionVisionValores">
          <button id="boton-<?php the_field('titulosincaracteres'); ?>" class="titulos-quienessomos text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="1.8s" data-wow-offset="60">
            <h4><?php the_title() ?></h4>
          </button>
          <div class="contenido<?php the_field('titulosincaracteres'); ?>">
            <?php the_content(); ?>
          </div>
        </article>

        <?php endwhile; wp_reset_postdata(); ?>


      </div>
    </div>
  </section>
</main>
<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>