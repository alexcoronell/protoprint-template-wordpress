<footer>
      <?php $datosEmpresa = new WP_Query('page_id=167'); ?>
      <?php while($datosEmpresa -> have_posts()): $datosEmpresa -> the_post(); ?>
          <article id="footer1">
            <div class="container">
              <div class="row">
                <div class="col-12 col-sm-6 col-md-4 text-center text-sm-left">
                  <h4>Contacta con nosotros</h4>
                  <ul>
                    <li>Telf: <?php the_field('telefono1'); ?></li>
                    <li>Telf: <?php the_field('telefono2'); ?></li>
                    <li><a href="mailto:<?php the_field('email'); ?>" target="_blank">Mándanos un email <br><?php the_field('email'); ?></a></li>
                  </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-4 text-center text-sm-left">
                  <h4>Dónde estamos</h4>
                  <ul>
                    <li><?php the_field('ubicacion1'); ?></li>
                    <li><?php the_field('ubicacion2'); ?></li>
                  </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-4 text-center text-sm-left">
                  <h4>Horarios</h4>
                  <ul>
                    <li>Lunes a Viernes de <?php the_field('horario_de_lunes_a_viernes'); ?></li>
                    <li>Sábados de <?php the_field('horario_sabados'); ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </article>
          <article id="footer2">
          
            <div class="container">
              <div class="row">
                <div class="col-12 col-md-4 text-center text-md-left">
                  <h4>Nuestras redes sociales</h4>
                </div>
                <div class="col-12 col-md-4">
                  <?php $args = array(
                        'post_type' => 'page',
                        'post_parent' => 180,
                        'order' => 'ASC'
                      );
                      ?>
                      <?php $redessocialescontent = new WP_Query($args); ?>
                      
                        <ul class="redessociales">
                        <?php while($redessocialescontent -> have_posts()): $redessocialescontent -> the_post(); ?>
                          <li>
                          <?php $url = get_field('url') ?> 
                          <?php $icono = get_field('icon') ?> 
                            <?php  if ($url !="") { ?>
                              <a href="<?php echo $url; ?>" target="_blank"><i class="<?php the_field('awesome_class'); ?>" aria-hidden="true" data-toggle="tooltip" data-placement="top" title=<?php the_title(); ?>></i></a>
                            <?php } else { ?>
                              <i class="<?php the_field('awesome_class'); ?>" aria-hidden="true" data-toggle="tooltip" data-placement="top" title=<?php the_title(); ?>></i>
                            <?php } ?>
                          </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <ul class="redessociales llamar text-center">
                    <li><a href="tel:+573138885427"><i class="fa fa-phone-square" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Llámanos al 313 888 5427"></i></a><span>Llámanos</span></li>
                  </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <ul class="redessociales whatsapp text-center">
                    <li><a href="https://api.whatsapp.com/send?phone=573138885427&amp;text=Hola!%20Quiero%20tener%20más%20información!"><i class="fa fa-whatsapp" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Escríbenos al Whatsapp"></i></a><span>Escríbenos al Whatsapp!!</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <article class="text-center" id="footer3">
            <ul>
              <li>
                <p>&copy Impresión Digital - Todos los derechos reservados - 2020</p>
              </li>
            </ul>
          </article>
          <article class="text-center" id="footer4"><a data-scroll="data-scroll" href="#top-pagina">
              <p>Volver arriba</p></a></article>
          <article class="text-center" id="footer5">
            <p>Desarrollado en Wordpress por <a href="http://www.alexcoronell.mipropia.com/" target="_blank">Alex Coronell</a></p>
            
          </article>
    </footer>
    <?php wp_footer(); ?>
    <!-- INICIO DE WOW PARA LAS ANIMACIONES-->
    <script type="text/javascript">new WOW().init();</script>
  </body>
</html>