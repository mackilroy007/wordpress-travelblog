<?php get_header(); ?>

<div class="container">
    <h1>single.php</h1>


    <?php if (have_posts()) : ?>
        <!--  If there are posts available  -->

        <?php while (have_posts()) : the_post(); ?>
            <!-- if there are posts, iterate the posts in the loop-->

            <h1><?php the_title(); ?></h1>
            <!--retrieves blog title-->

            <?php the_content(); ?>
            <!--retrieves content-->
            
            <br>
            <hr>
            <p><?php the_time('F j, Y g:i a'); ?></p>
            <!--retrieves date blog entry was created-->

            <!-- <p> <?php #the_author(); ?></p>
            retrieves author of blog entry -->
        <?php endwhile; ?>
        <!--end the while loop-->

    <?php else : ?>
        <!-- if no posts are found then: -->

        <p>No posts found</p>
    <?php endif; ?>
    <!-- end if -->
</div>

<?php get_footer(); ?>