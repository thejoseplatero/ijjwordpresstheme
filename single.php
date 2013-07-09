 <?php get_header(); ?>

 <div class="contentWrapper">
    <div class="content">
          <?php 
            while(have_posts()): the_post();
              //display content from the post
          ?>
                  <div class="post full">

                    <div class="categoryLabel"><?php the_category(', '); ?></div>
                    

                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                      <span class="timeStamp">
                       <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> 
                      </span> 
                      </h2>
                   
                      <?php the_content(); ?>
                      
                      <?php comments_template(); ?>

                  </div>
          <?php
            endwhile;
          ?>
    </div>  
  </div>   



<?php get_footer(); ?>

