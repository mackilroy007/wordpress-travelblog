<?php get_header(); ?>

<div class="container">

    <h1>page.php</h1>

    <?php if (have_posts()) : ?>
        <!--  If there are pages available  -->

        <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
            <!-- if there are pages, iterate the page in the loop-->
            <?php the_title(); ?>
            <!--retrieves page title-->

            <?php the_excerpt(); ?>
            <!--retrieves excerpt-->

        <?php endwhile; ?>
        <!--end the while loop-->

    <?php else : ?>
        <!-- if no page is found then: -->

        <p>No page found</p>
    <?php endif; ?>
    <!-- end if -->
</div>

<?php get_footer(); ?>