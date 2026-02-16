<?php
/**
 * Archive template for Certifications
 */
get_header();
?>

<section style="max-width: 900px; margin: 60px auto; padding: 20px;">
    <h2 style="text-align: center; font-size: 2rem; margin-bottom: 50px; position: relative;">
        Certifications
    </h2>

    <?php
    $args = array(
        'post_type'      => 'certification',
        'posts_per_page' => -1,
    );
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $org = get_post_meta( get_the_ID(), 'organization', true );
            $year = get_post_meta( get_the_ID(), 'year', true );
            ?>
            <div class="card">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'medium', array(
                        'style' => 'width: 260px; height: 160px; object-fit: cover; border-radius: 12px; border: 2px solid aqua;',
                    ) );
                }
                ?>
                <div>
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo esc_html( $org ); ?></p>
                    <span><?php echo esc_html( $year ); ?></span>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>No certifications found.</p>';
    }
    ?>
</section>

<?php
get_footer();
