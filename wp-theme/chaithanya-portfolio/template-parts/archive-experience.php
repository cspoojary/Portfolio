<?php
/**
 * Archive template for Experience
 */
get_header();
?>

<section style="padding: 80px 10%;">
    <h1 style="text-align: center; font-size: 2rem; margin-bottom: 50px; position: relative;">
        Professional Training
    </h1>

    <?php
    $args = array(
        'post_type'      => 'experience',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $meta = get_post_meta( get_the_ID(), 'experience_meta', true );
            ?>
            <div class="card">
                <h3><?php the_title(); ?></h3>
                <p class="meta"><?php echo isset( $meta['period'] ) ? esc_html( $meta['period'] ) : ''; ?></p>
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>No experience found.</p>';
    }
    ?>
</section>

<?php
get_footer();
