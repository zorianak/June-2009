<?php $_postcounter = 0; ?>
<?php query_posts('category_name=Design&showposts=5'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


 <!-- If the post is in the category we want to exclude, we simply pass to the next post. -->
 <?php if (!in_category('Design')) continue; ?>
 <?php $_postcounter++; ?>
 <?php if ($_postcounter > 1) continue; ?>
 
                                <h4><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_title(),0,850); ?></a></h4>
                                <p><?php echo substr(get_the_content(),0,1200) ?> [ <a href="<?php the_permalink(); ?>">read more</a> ]</p>



 <?php endwhile; else: ?>

 <?php endif; ?>
 
				
                           
                            

<?php wp_reset_query(); ?>
