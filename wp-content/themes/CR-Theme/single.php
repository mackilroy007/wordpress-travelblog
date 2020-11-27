<?php get_header(); ?>

<div class="container">
    <h1>Hello from a single post</h1>


    <?php if (have_posts()) : ?>
        <!--  If there are posts available  -->

        <?php while (have_posts()) : the_post(); ?>
            <!-- if there are posts, iterate the posts in the loop-->

            <?php the_title(); ?>
            <!--retrieves blog title-->

            <p><?php the_time('F j, Y g:i a'); ?></p>
            <!--retrieves date blog entry was created-->

            <p> <?php the_author(); ?></p>
            <!--retrieves author of blog entry-->

            <?php #the_content(); ?>
            <!--retrieves content-->

            <?php the_excerpt(); ?>
            <!--retrieves excerpt-->

        <?php endwhile; ?>
        <!--end the while loop-->

    <?php else : ?>
        <!-- if no posts are found then: -->

        <p>No posts found</p>
    <?php endif; ?>
    <!-- end if -->
</div>

<?php get_footer(); ?>