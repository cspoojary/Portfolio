<?php
/**
 * Single template for Experience
 */
get_header();
?>

<section style="padding: 80px 10%; max-width: 900px; margin: 0 auto;">
    <h1><?php the_title(); ?></h1>
    
    <?php
    $meta = get_post_meta( get_the_ID(), 'experience_meta', true );
    if ( isset( $meta['period'] ) ) {
        echo '<p class="meta">' . esc_html( $meta['period'] ) . '</p>';
    }
    ?>
    
    <div class="card" style="background: none; border: none; padding: 0;">
        <?php the_content(); ?>
    </div>
</section>

<?php
get_footer();
