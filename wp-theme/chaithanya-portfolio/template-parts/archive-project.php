<?php
/**
 * Archive template for Projects
 */
get_header();
?>

<section style="padding: 60px 40px;">
    <h1 style="text-align: center; font-size: 28px; margin-bottom: 40px; position: relative;">
        Projects
    </h1>

    <div class="grid">
        <?php
        $args = array(
            'post_type'      => 'project',
            'posts_per_page' => -1,
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                ?>
                <div class="project-card">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
                    <a href="<?php the_permalink(); ?>">View Project</a>
                </div>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo '<p>No projects found.</p>';
        }
        ?>
    </div>
</section>

<?php
get_footer();
