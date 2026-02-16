<?php
/**
 * Page template
 */
get_header();
?>

<section style="padding: 60px 40px; max-width: 1000px; margin: 0 auto;">
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
                    <?php
                    the_content();
                    ?>
                </div>
            </article>
            <?php
        }
    } else {
        echo '<p>Page not found.</p>';
    }
    ?>
</section>

<?php
get_footer();
