<?php
/**
 * Single template for Project
 */
get_header();
?>

<section style="padding: 60px 40px; max-width: 900px; margin: 0 auto;">
    <h1><?php the_title(); ?></h1>
    
    <?php
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'large', array(
            'style' => 'width: 100%; height: auto; margin: 20px 0; border-radius: 12px;',
        ) );
    }
    ?>
    
    <div class="project-card" style="background: none; border: none; padding: 0;">
        <?php the_content(); ?>
        
        <?php
        $project_link = get_post_meta( get_the_ID(), 'project_link', true );
        if ( $project_link ) {
            ?>
            <a href="<?php echo esc_url( $project_link ); ?>" target="_blank" class="btn">View Project</a>
            <?php
        }
        ?>
    </div>
</section>

<?php
get_footer();
