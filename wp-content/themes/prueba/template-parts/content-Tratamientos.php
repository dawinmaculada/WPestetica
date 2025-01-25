<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package qualyderm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header mt-3" style="text-align: center;">
        <H1 style="text-align: center; margin:50px">Tratamientos corporales</H1>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <div class="grid-container" style="display: grid; grid-template-columns: repeat(4, 1fr); margin:50px;">
            <?php
            $args = array(
                'post_type' => 'tratamientos', // Cambia este slug por el de tu CPT
                'posts_per_page' => -1, // Mostrar todos
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <div class="grid-item" style="margin: 20px; border: 1px solid #ccc; padding: 15px; border-radius: 10px; text-align: center;">
                    <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail" style="margin-bottom: 35px;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium', array( 'style' => 'max-width: 90%; height: auto; border-radius: 10px;' ) ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <h3 class="post-title" style="font-size: 1.25em; margin-bottom: 10px;">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p class="post-excerpt" style="font-size: 0.9em; color: #666;">
                            <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="read-more" style="display: inline-block; margin-top: 10px; padding: 10px 15px; background-color: #0073aa; color: #fff; text-decoration: none; border-radius: 5px;">
                            Ver tratamientos
                        </a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p style="grid-column: span 4; text-align: center;">No hay tratamientos disponibles.</p>
                <?php
            endif;
            ?>
        </div>
    </div><!-- .entry-content -->
</article>
