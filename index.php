<!--Version: 1.0.3-->
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

                the_content(); 

            endwhile;
        endif;
        ?>
    
    <?php wp_footer() ?>
</body>

</html>
