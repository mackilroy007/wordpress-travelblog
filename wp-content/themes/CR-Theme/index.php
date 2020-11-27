<?php get_header(); ?>


<div class="content container">

    <h1>Index.php </h1>
    <br>
    <?php if (have_posts()) : ?>
        <!--  If there are posts available  -->

        <?php while (have_posts()) : the_post(); ?>
            <!-- if there are posts, iterate the posts in the loop-->
            <a href="<?php the_permalink(); ?>">
                <!-- add thumbnail with a href -->
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <!--retrieves URL for the permalink-->
                <h1 class="mt-2"> <?php the_title(); ?></h1>
                <!--retrieves blog title-->
            </a>

            <p><?php the_time('F j, Y g:i a'); ?></p>
            <!--retrieves date blog entry was created-->

            <p> <?php #the_author(); ?></p>
            <!--retrieves author of blog entry-->

            <?php #the_content(); 
            ?>
            <!--retrieves content-->

            <?php the_excerpt(); ?>
            <!--retrieves excerpt-->
            <br>
            <br>
        <?php endwhile; ?>
        <!--end the while loop-->

    <?php else : ?>
        <!-- if no posts are found then: -->

        <p>No posts found</p>
    <?php endif; ?>
    <!-- end if -->
</div>

<?php get_footer(); ?>