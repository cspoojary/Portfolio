<?php
/**
 * Main index template file
 */
get_header();
?>

<section class="hero">
    <p class="tagline">CRAFTING DATA-DRIVEN SOLUTIONS</p>

    <h1>
        Transforming Data Into <br>
        <span>Actionable Insights</span>
    </h1>

    <p class="description">
        Hi, I'm <b><?php bloginfo( 'name' ); ?></b>, a Data Science student with a strong foundation in
        <b>Python, SQL, Excel, Numpy, Pandas, Matplotlib, Machine Learning, Deep Learning, CSS, HTML, JavaScript and data analytics</b>. I enjoy turning raw data into meaningful insights
        through data visualization, exploratory analysis, and machine learning to support
        smarter decision-making.
    </p>

    <div class="social-icons icon-row">
        <?php
        $github_url = get_theme_mod( 'github_url', 'https://github.com/cspoojary' );
        $linkedin_url = get_theme_mod( 'linkedin_url', 'https://www.linkedin.com/in/chaithanya-s-poojary05/' );
        $email_url = get_theme_mod( 'email_url', 'mailto:chaithanyaspoojary05@gmail.com' );
        ?>
        
        <!-- GitHub -->
        <a href="<?php echo esc_url( $github_url ); ?>" target="_blank" class="icon-box" title="GitHub">
            <img src="<?php echo get_template_directory_uri(); ?>/images/github.png" alt="GitHub">
        </a>

        <!-- LinkedIn -->
        <a href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank" class="icon-box" title="LinkedIn">
            <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-logo.png" alt="LinkedIn">
        </a>

        <!-- Gmail -->
        <a href="<?php echo esc_url( $email_url ); ?>" class="icon-box" title="Email">
            <img src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt="Email">
        </a>
    </div>

    <br><br>
    <div class="buttons">
        <?php
        $about_page = get_page_by_title( 'About' );
        $projects_page = get_page_by_title( 'Projects' );
        $experience_page = get_page_by_title( 'Experience' );
        $certification_page = get_page_by_title( 'Certification' );
        ?>
        
        <?php if ( $about_page ) : ?>
            <a href="<?php echo get_permalink( $about_page ); ?>">
                <button>About Me</button>
            </a>
        <?php endif; ?>

        <?php if ( $projects_page ) : ?>
            <a href="<?php echo get_permalink( $projects_page ); ?>">
                <button>Projects</button>
            </a>
        <?php endif; ?>

        <?php if ( $experience_page ) : ?>
            <a href="<?php echo get_permalink( $experience_page ); ?>">
                <button>Experience</button>
            </a>
        <?php endif; ?>

        <?php if ( $certification_page ) : ?>
            <a href="<?php echo get_permalink( $certification_page ); ?>">
                <button>Certification</button>
            </a>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
