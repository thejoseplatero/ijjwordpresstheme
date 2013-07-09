 <?php   /* Template Name: Home Template */ ?>

 <?php get_header(); ?>

         <div class="band" id="about">
           
       

           <?php $recent = new WP_Query("page_id=34"); while($recent->have_posts()) : $recent->the_post();?>
        <!--    <?php the_title(); ?> -->
           <?php the_content(); ?>
           <?php endwhile; ?>

         </div>

         <?php query_posts($query_string . '&cat=1'); ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   

         <div class="content" id='news'>
                 <div class="post preview">

          
                 
                   <div class="featuredImageContainer">
                     <?php 
                       if (has_post_thumbnail() ) {
                         the_post_thumbnail();
                       } 
                      ?>
                   </div>

                   <div class="categoryLabel"><?php the_category(', '); ?></div>
                

                   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                     <span class="timeStamp">
                      <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> 
                     </span> 
                     

                   </h2>
                  
                   
                   

                   <?php the_excerpt(); ?>

                     <a href="<?php the_permalink(); ?>" class="button">Read More  <span class="arrow">&#10148;</span> </a>
                  
                  
                 </div>
          </div>
         
         <?php endwhile; else: ?>
         <p>Sorry, no posts matched your criteria.</p>
         <?php endif; ?>

 <?php get_footer(); ?>  