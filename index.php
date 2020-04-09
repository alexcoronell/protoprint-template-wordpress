<?php $pageName = "Inicio"; ?>
<?php get_header(); ?>

<!--------------------- Sección Principal - Slider Principal --------------------->
    <section id="principal">
      <div class="carousel slide" id="carouselPrincipal" data-ride="carousel">

      <?php $args = array(
                    'post_type' => 'page',
                    'post_parent' => 312,
                    'order' => 'ASC'
                  );
                ?>
      <?php $sliderPrincipal = new WP_Query($args); ?>
      <?php $i = 0; ?>
      <?php $sliderPrincipal = new WP_Query($args); ?>
      <?php $cuenta = $sliderPrincipal -> found_posts(); ?>
    

        <!-- Indicadores -->
        <ol class="carousel-indicators">
          <li class="active" data-target="#carouselPrincipal" data-slide-to="0"></li>
          <?php for($j = 1; $j < $cuenta; $j++) { ?>
          <li data-target="#carouselPrincipal" data-slide-to="<?php echo $j; ?>"></li>
      <?php } ?>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
          <?php while($sliderPrincipal -> have_posts()): $sliderPrincipal -> the_post(); ?>
            <div class="carousel-item <?php echo $i == 0 ? 'active' : ''; ?>">
              <!-- <img class="d-block img-fluid" src="img/01-impresiondigital.jpg"/> -->
              <?php the_post_thumbnail('full', array('class' => 'd-block img-fluid')); ?>
            </div>
          <?php $i++; endwhile; wp_reset_postdata(); ?>
        </div>

        <!-- Controls -->
        <?php if($sliderPrincipal -> found_posts): ?>
          <a class="carousel-control-prev" href="#carouselPrincipal" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Anterior</span></a><a class="carousel-control-next" href="#carouselPrincipal" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Siguiente</span></a>
        <?php endif; ?>
      </div>
    </section>


    <!--------------------- Sección Quienes Somos --------------------->
    <?php $quienesSomos = new WP_Query('page_id=24'); ?>
    <?php while($quienesSomos -> have_posts()): $quienesSomos -> the_post(); ?>
        <section id="quienessomos">
          <div class="container">
            <div class="row">
              <div class="titulosections col-12 col-md-3">
                <h2><?php the_title(); ?></h2>
              </div>
              <div class="col-12 col-md-9 contenido wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="60">
                <p><?php the_field('contenido'); ?></p>
              </div>
            </div>
          </div>
        </section>
    <?php endwhile; wp_reset_postdata(); ?>

    <!--------------------- Sección Servicios --------------------->
    <main>
      <section id="servicios">
        <div class="container">
          <div class="row">
            <div class="titulosections col-12 col-md-3">
              <?php $servicios = new WP_Query('page_id=73'); ?>
              <?php while($servicios -> have_posts()): $servicios -> the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="col-12 col-md-9 contenido-servicios">
              <div class="container">
                <div class="row">

                <?php $args = array(
                    'post_type' => 'page',
                    'post_parent' => 73,
                    'order' => 'ASC'
                  );
                ?>
                <?php $serviciosContent = new WP_Query($args); ?>
                <?php while($serviciosContent -> have_posts()): $serviciosContent -> the_post(); ?>
                    <div class="col-12 col-sm-6 col-md-4 imagenes-servicios-seccion">
                      <div class="container wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="60"><img class="img-fluid" src="<?php the_field('imagen'); ?>"/>
                        <div class="titulos-servicios"><a href="#modal" data-toggle="modal" data-target="#Modal<?php the_field('modalid'); ?>">
                            <h3><?php the_title(); ?></h3></a>
                        </div>
                      </div>
                    </div>

                    <!-- Modal -->
                    <div id=Modal<?php the_field('modalid'); ?> class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body container">
                            <div class="row">
                              <div class="col-12 col-md-4"><img class="img-fluid" src="<?php the_field('imagen'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/></div>
                              <div class="col-12 col-md-8">
                                <p><?php the_field('contenido'); ?></p>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div></div>

                <?php endwhile; wp_reset_postdata(); ?>
                                  
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
      </section>
    </main>




<!--------------------- Sección Servicios --------------------->
    <section id="infopromociones">
      <div class="container">
        <div class="row">
          <div class="titulosections col-12 col-md-3">
            <?php $infopromociones = new WP_Query('page_id=124'); ?>
            <?php while($infopromociones -> have_posts()): $infopromociones -> the_post(); ?>
              <h2><?php the_title(); ?></h2>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
          <div class="col-12 col-md-9 text-center">
            <div class="infopromociones-slider p-0 p-md-1">
              
              <?php $args = array(
                    'post_type' => 'page',
                    'post_parent' => 124,
                    'order' => 'ASC'
                  );
              ?>
              <?php $infopromocionesContent = new WP_Query($args); ?>
              <?php while($infopromocionesContent -> have_posts()): $infopromocionesContent -> the_post(); ?>
                <div><img class="img-fluid" src="<?php the_field('imagen'); ?>"/></div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>


<!--------------------- Sección Contacto --------------------->
    <section id="contacto">
      <div class="container">
        <div class="row">
          <div class="titulosections col-12 col-md-3">
            <h2>Contacto</h2>
          </div>
          <div class="col-12 col-md-9 container">
            <div class="row">
              <div class="col-12 cajaformulario container">
                <form class="row form-horizontal" id="contactoForm" action="ajaxSubmit.php" method="POST">
                  <div class="col-12 text-center wow flash" data-wow-duration=".5s" data-wow-delay="0.2s" data-wow-offset="60">
                    <h4>Cuéntanos en qué te podemos ayudar</h4>
                  </div>
                  <div class="col-12 col-md-4 form-group wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="60">
                    <input class="form-control" id="nombre" type="text" name="nombre" placeholder="Tu nombre:" required="required" data-toggle="tooltip" data-placement="top" title="Nombre"/>
                  </div>
                  <div class="col-12 col-md-4 form-group wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="60">
                    <input class="form-control" id="telefono" type="text" name="telefono" placeholder="Tu teléfono:" required="required" data-toggle="tooltip" data-placement="top" title="Teléfono"/>
                  </div>
                  <div class="col-12 col-md-4 form-group wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="60">
                    <input class="form-control" id="email" type="email" name="email" placeholder="Tu email:" required="required" data-toggle="tooltip" data-placement="top" title="Email"/>
                  </div>
                  <div class="form-group col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s" data-wow-offset="60">
                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Tu mensaje" required="required" data-toggle="tooltip" data-placement="top" title="Mensaje"></textarea>
                  </div>
                  <div class="form-group col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="60">
                    <button class="btn btn-primary boton-formulario" type="submit">Enviar</button>
                  </div>
                  <div class="offset-2 col-8 mb-2" id="correcto">El mensaje se envió correctamente</div>
                  <!-- Empiezan los mapas-->
                </form>
              </div>
              <div class="col-12 caja-mapas container">
                <div class="row">
                  <div class="col-12 col-md-6 anima1">
                    <div class="mapainteractivo text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="1.2s" data-wow-offset="60"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3335.0511718332837!2d-75.56932643457532!3d6.254958767773654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428fc4179b3b1%3A0x4b16809c9761eb24!2sCra.%2054%20%2354-72%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1580213923737!5m2!1ses-419!2sco" allowfullscreen=""></iframe>
                      <h5>Sede Centro</h5>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 anima2">
                    <div class="mapainteractivo text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="1.4s" data-wow-offset="60"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2888325557083!2d-75.60645648590676!3d6.225596528283532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429ec65f66eed%3A0x3bd8cd0103094042!2sCra.%2082b%20%2320-32%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1580215123134!5m2!1ses-419!2sco" allowfullscreen=""></iframe>
                      <h5>Sede Belén</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>   