<?php get_header(); ?>

<div class="container">

    <?php if (have_posts()) : ?>
        <!--  If there are posts available  -->

        <?php while (have_posts()) : the_post(); ?>
            <!-- if there are posts, iterate the posts in the loop-->

            <h1 class="my-2"><?php the_title(); ?></h1>
            <!--retrieves blog title-->

            <?php the_content(); ?>
            <!--retrieves content-->
        
            <hr>

            <p><?php the_time('F j, Y g:i a'); ?></p>
            <!--retrieves date blog entry was created-->

            <!-- <p> <?php #the_author(); ?></p>
            retrieves author of blog entry -->
            <br>
            <div> <?php comments_template()?> </div>
        <?php endwhile; ?>
        <!--end the while loop-->

    <?php else : ?>
        <!-- if no posts are found then: -->

        <p>No posts found</p>
    <?php endif; ?>
    <!-- end if -->
</div>

<?php get_footer(); ?>