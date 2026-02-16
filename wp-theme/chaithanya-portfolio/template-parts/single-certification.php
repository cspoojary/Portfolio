<?php
/**
 * Single template for Certification
 */
get_header();
?>

<section style="max-width: 900px; margin: 60px auto; padding: 20px;">
    <h2><?php the_title(); ?></h2>
    
    <div class="card">
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'large', array(
                'style' => 'width: 260px; height: 160px; object-fit: cover; border-radius: 12px; border: 2px solid aqua;',
            ) );
        }
        ?>
        <div>
            <?php
            $org = get_post_meta( get_the_ID(), 'organization', true );
            $year = get_post_meta( get_the_ID(), 'year', true );
            if ( $org ) {
                echo '<p>' . esc_html( $org ) . '</p>';
            }
            if ( $year ) {
                echo '<span>' . esc_html( $year ) . '</span>';
            }
            ?>
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php
get_footer();
