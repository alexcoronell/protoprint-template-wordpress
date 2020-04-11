<?php
/*
Template Name: Servicios

@link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*/
get_header(); ?>

<!------------------------------- Contenido de la página ------------------------------->
<!-- Encabezado de la página -->
<?php while ( have_posts() ) : the_post(); ?>
  <section class="principal-paginasinternas">
    <div class="principal-servicios container">
      <img class="img-fluid" src="<?php the_field('fondoencabezado') ?>"/>
      <div class="titulo-paginasinternas text-center wow slideInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="60">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>


  <main>
    <section class="contenido-paginasinternas py-4" id="contenido-servicios">
      <div class="container">
        
      <?php 
        $args = array(
                    'post_type' => 'page',
                    'post_parent' => 73,
                    'order' => 'ASC'
                  );
      ?>
        <?php $serviciosContent = new WP_Query($args); ?>
        <?php while($serviciosContent -> have_posts()): $serviciosContent -> the_post(); ?>
        
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="60">
          <article class="col-12 row">
            <div class="titulos-pagina-servicios col-12 col-md-3 titulosections">
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="imagenes-pagina-servicios col-12 col-sm-7 col-md-5"><img class="img-fluid" src="<?php the_field('imagen'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
            </div>
            <div class="contenidos-paginas-servicios col-12 col-sm-5 col-md-4">
              <p><?php the_field('contenido'); ?></p>
            </div>
          </article>
        </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </section>
  </main>
<?php endwhile; wp_reset_postdata(); ?>
<?php get_footer(); ?>