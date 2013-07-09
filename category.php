 <?php get_header(); ?>

    

<div class="contentWrapper">
        <?php 
          while(have_posts()):
            the_post();
            //display content from the post

        ?>

        <div class="content">
                <div class="post preview">
                
                  <div class="featuredImageContainer">
                    <?php 
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      } 
                     ?>
                  </div>

                  <div class="categoryLabel"><?php the_category(', '); ?></div>
               

                  <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <span class="timeStamp">
                     <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> 
                    </span>
                  </h2>
                 
                

                  <?php the_excerpt(); ?>
                 
                 <a href="<?php the_permalink(); ?>" class="button"> Read More <span class="arrow"></span> </a>
                </div>
         </div>
       
        <?php
          endwhile;
        ?>
 </div>

<?php get_footer(); ?>
