<?php get_header(); ?>

<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpeg" class="d-block w-100 car" alt="Group sailing">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" class="d-block w-100 car" alt="Group diving">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" class="d-block w-100 car" alt="Group jet skiing">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="">
        <?php
        if (is_active_sidebar('sidebar')) :
            dynamic_sidebar('sidebar');
        endif;
        ?>
    </div>

    <?php if (have_posts()) : ?>
        <!--  If there are pages available  -->

        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
            <!-- if there are pages, iterate the page in the loop-->
            <?php #the_title(); 
            ?>
            <!--retrieves page title-->

            <?php the_excerpt(); ?>
            <!--retrieves excerpt-->

        <?php endwhile; ?>
        <!--end the while loop-->

    <?php else : ?>
        <!-- if no page is found then: -->

        <!-- <p>No page found</p> -->
    <?php endif; ?>
    <!-- end if -->

    <h2 class="mt-4 text-center">Our mission is to show this beautiful world and share the Joy!</h2>
    <br>
    <article class="mt-5 row">
        <img src="<?php echo get_template_directory_uri(); ?>/img/author.png" alt="author" class="test col-5">
        <h4 class="col text1">I love to explore the world and share the view, it's culture to it's upmost glory. As an added benifit, I try to make those same trips available by offering different solutions to booking those trips here!</h4>
    </article>
</div>

<?php get_footer(); ?>