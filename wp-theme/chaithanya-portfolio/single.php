<?php
/**
 * Single template for custom post types
 */

// Get the post type
$post_type = get_post_type();

// Load appropriate template based on post type
if ( 'project' === $post_type ) {
    include get_template_directory() . '/template-parts/single-project.php';
} elseif ( 'certification' === $post_type ) {
    include get_template_directory() . '/template-parts/single-certification.php';
} elseif ( 'experience' === $post_type ) {
    include get_template_directory() . '/template-parts/single-experience.php';
} else {
    get_header();
    ?>
    <section style="padding: 60px 40px; max-width: 900px; margin: 0 auto;">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            }
        }
        ?>
    </section>
    <?php
    get_footer();
}
