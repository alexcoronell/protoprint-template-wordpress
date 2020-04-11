<?php
/*
Template Name: Blog
*/
get_header(); ?>

<!------------------------------- Contenido de la página ------------------------------->
<!-- Encabezado de la página -->
<?php while ( have_posts() ) : the_post(); ?>
  <section class="principal-paginasinternas">
    <div class="principal-blog container">
      <img class="img-fluid" src="<?php the_field('fondoencabezado') ?>"/>
      <div class="titulo-paginasinternas text-center wow slideInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="60">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>
<?php endwhile; wp_reset_postdata(); ?>

<main>
<section class="contenido-paginasinternas py4" id="contenido-blog">

      <?php
        $args = array (
          'post_per-page' => 10,
          'category_name' => 'blog'
        );
      ?>
      <?php $entradas = new WP_Query($args) ?>
      <?php while($entradas -> have_posts()) : $entradas -> the_post(); ?>
      
      <div class="container pr-0 pl-0">
      <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="60">
        <article class="col-12 row ml-0">
          <div class="titulos-entrada col-12 p-2 mr-0">
            <a href="<?php echo get_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
            </a>
          </div>
          <div class="imagen-destacada-entradas col-12 col-md-3 py-2">
            <?php if( has_post_thumbnail()) :
                the_post_thumbnail('medium', array('class' => 'img-fluid'));
                endif
              ?>
          </div>
          <div class="contenido-entrada col-12 col-md-9 py-2 text-justify">
              <?php //the_content(); ?>
              <?php the_excerpt(); ?>   
              <button class="btn btn-primary">
                  <a href="<?php echo get_permalink(); ?>">
                  <?php _e('Seguir leyendo...') ?>
                  </a>
            </button>         
          </div>
        </article>
      </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>

  </section>
</main>


<?php get_footer(); ?>