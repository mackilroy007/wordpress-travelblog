<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!--displays the encoding-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!--displays the Tagline in Settings->General -->
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <!-- Custom styles for this template
   <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
   displays the primary CSS-->

    <?php wp_head(); ?>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary', // refers to the key in functions
                'depth'             => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'         => 'div', //container around menu
                'container_class'   => 'collapse navbar-collapse', //bs-class
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </div>
    </nav>

    <div class="container">
        <h1>Hello from my theme</h1>


        <?php if (have_posts()) : ?>
            <!--  If there are posts available  -->

            <?php while (have_posts()) : the_post(); ?>
                <!-- if there are posts, iterate the posts in the loop-->
                <a href="<?php the_permalink(); ?>">
                    <!--retrieves URL for the permalink-->
                    <?php the_title(); ?>
                    <!--retrieves blog title-->
                </a>

                <p><?php the_time('F j, Y g:i a'); ?></p>
                <!--retrieves date blog entry was created-->

                <p> <?php the_author(); ?></p>
                <!--retrieves author of blog entry-->

                <?php the_content(); ?>
                <!--retrieves content-->

            <?php endwhile; ?>
            <!--end the while loop-->

        <?php else : ?>
            <!-- if no posts are found then: -->

            <p>No posts found</p> <!-- no posts found displayed -->
        <?php endif; ?>
        <!-- end if -->
    </div>

    <?php wp_footer(); ?>
</body>

</html>