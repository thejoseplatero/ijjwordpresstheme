     <?php get_header(); ?>
    <div class="content">
        <?php while(have_posts()): the_post();
            //display content from the post
        ?>
            <div class="post">
              <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>


        <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>