<?php
/**
 * Header file for Chaithanya Portfolio theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header class="navbar">
        <h2 class="logo"><?php bloginfo( 'name' ); ?></h2>
        <a class="resume-btn" href="<?php echo esc_url( get_theme_mod( 'resume_url' ) ); ?>" target="_blank" title="Resume">
            <span class="icon">⬇</span>
            View Resume
        </a>
    </header>
