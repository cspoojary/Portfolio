<?php
/**
 * Archive template for custom post types
 */

// Get the post type
$post_type = get_post_type();

// Load appropriate template based on post type
if ( 'project' === $post_type ) {
    include get_template_directory() . '/template-parts/archive-project.php';
} elseif ( 'certification' === $post_type ) {
    include get_template_directory() . '/template-parts/archive-certification.php';
} elseif ( 'experience' === $post_type ) {
    include get_template_directory() . '/template-parts/archive-experience.php';
} else {
    get_header();
    ?>
    <section style="padding: 60px 40px; max-width: 900px; margin: 0 auto;">
        <h1><?php post_type_object( $post_type )->labels->name; ?></h1>
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <div style="margin-bottom: 30px; padding: 20px; background: rgba(255,255,255,0.05); border-radius: 12px;">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                </div>
                <?php
            }
        }
        ?>
    </section>
    <?php
    get_footer();
}
