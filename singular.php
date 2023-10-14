<!--Version: 1.0.0-->
<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>



    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>

    <header class="main-header">
        <p><?php bloginfo('title'); ?></p>
        <h1> <?php the_title(); ?> </h1>
    </header>

    <nav id="main-nav" class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>

    <main class="main-content">
        <?php the_content(); ?>
    </main>

    <?php
            endwhile;
        endif;
        ?>

    <footer class="main-footer">
    <nav id="footer-nav" class="footer-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </nav>
        <p>© 2023 Enno Hyttrek</p>
        <p>Version: 1.0.0</p>
    </footer>
    <nav id="mobile-nav" class="mobile-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
    </nav>
    <?php wp_footer() ?>
</body>

</html>
