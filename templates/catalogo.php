<?php
/*
Template Name: Catálogo

@link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*/
get_header(); ?>

<!------------------------------- Contenido de la página ------------------------------->
<!-- Encabezado de la página -->
<?php while ( have_posts() ) : the_post(); ?>
  <section class="principal-paginasinternas">
    <div class="principal-catalogo container">
      <img class="img-fluid" src="<?php the_field('fondoencabezado') ?>"/>
      <div class="titulo-paginasinternas text-center wow slideInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="60">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>
<?php endwhile; wp_reset_postdata(); ?>

<main>
  <section class="contenido-paginasinternas py-4" id="contenido-catalogo">
    <div class="container">
      <div class="container">
        <article class="col-12 row">
          <div class="titulos-pagina-catalogo col-12 col-md-3 titulosections">
            <h3>Imágenes</h3>
          </div>
          <div class="contenido-catalogo-imagenes col-12 col-md-9 row mb-3">
            <?php 
              $args = array(
                          'post_type' => 'page',
                          'post_parent' => 380,
                          'order' => 'ASC'
                        );
            ?>
            <?php $imagenes = new WP_Query($args); ?>
            <?php while($imagenes -> have_posts()): $imagenes -> the_post(); ?>
              <div class="col-12 col-sm-6 col-md-6 text-center">
                <img class="img-fluid" src="<?php the_field('imagen') ?>"/>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
        </article>
      </div>
      
      
      
      <div class="container">
        <article class="col-12 row">
          <div class="titulos-pagina-catalogo col-12 col-md-3 titulosections">
            <h3>Videos</h3>
          </div>
          <div class="contenido-catalogo-imagenes col-12 col-md-9 row mt-2 mb-2">
            <?php 
                $args = array(
                            'post_type' => 'page',
                            'post_parent' => 386,
                            'order' => 'ASC'
                          );
              ?>
              <?php $imagenes = new WP_Query($args); ?>
              <?php while($imagenes -> have_posts()): $imagenes -> the_post(); ?>
                <div class="col-12 col-sm-6">
                  <video src="<?php the_field('video') ?>" width="100%" controls="controls" muted="muted" loop="loop" controlsList="nodownload">Tu navegador no soporta la etiqueta HTML5 video</video>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
          </div>
        </article>
      </div>
      
    </div>
  </section>
</main>
<?php get_footer(); ?>