<?php
/*
Template for blog
*/
?>
<?php get_header(); ?>

<main>
    <section id="blog" class="page-content">
        <div class="container">
            <?php while(have_posts()) : the_post(); ?>
                <article  <?php post_class('row'); ?>>
                    <div class="col-md-3 post_thumbnail">
                    <?php // Check if the post has a post Thumbnail assigned to it
                        if (has_post_thumbnail()) :
                            the_post_thumbnail('large');
                        endif;
                    ?>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                        </div>
                        <div class="entry-content">
                            <?php //the_content(); // Contenido completo ?>
                            <?php the_excerpt(); // Resumen de la entrada ?>
                            <a href="<?php echo get_permalink(); ?>">
                                <?php _e("Seguir leyendo"); ?>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                </ul>
            </nav>
            <?php if (is_category()) {?>
                <h5 class="entry-title">
                    <?php _e('Categoría') ?> / <?php single_cat_title(); ?>
                </h5>
            <?php }; ?>

            <?php if (is_tag()) {?>
                <h5 class="entry-title">
                    <?php _e('Etiqueta') ?> / <?php single_tag_title(); ?>
                </h5>
            <?php }; ?>

            <?php if (is_author()) {
                $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));    
            ?>
                <h5 class="entry-title">
                    <?php _e('Autor') ?> / <?php $curauth -> user_nicename; ?>
                </h5>
            <?php }; ?>
            <?php if (is_category()) {?>
                <h5 class="entry-title">
                    <?php _e('Entradas del') ?> / <?php single_cat_title(); ?>
                    <?php
                        $year = get_query_var('year');
                        $month = get_query_var('monthnum');
                        $day = get_query_var('day');

                        if ($year > 0) { echo $year; }
                        if ($month > 0) { echo '-' . str_pad($month, 2, 0, STR_PAD_LEFT); }
                        if ($day > 0) { echo '-' . str_pad($day, 2, 0, STR_PAD_LEFT); }
                    ?>
                </h5>
            <?php }; ?>

            
            <?php ?>
            <?php ?>
            <?php ?>
        </div>
    </section>
</main>


<?php get_footer(); ?>