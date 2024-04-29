<?php
/**
* Template Name: blog-page
*
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
       
       <?php
        // Start the loop.
        while ( have_posts() ) :
            the_post();
            // Include the page content template.
            //get_template_part( 'template-parts/content', 'page' );

            ?>


<div class="list">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                       		<img width="" height="" class="" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="" />
                   		</div>
                        <div class="col-sm-6">
                        	<h1>
                        	<a href="<?php echo get_the_permalink($post->ID);?>"><?php echo get_the_title(); ?></a></h1>
                            <div class="date"><!--div style="float:left;margin-right:5px;margin-bottom:5px">
                            October 1, 2022<span> | </span></div--> <?php echo get_post_tags($res_data->ID); ?></div>
                        
                            <div class="desc">
                            	<?php echo get_the_excerpt($post->ID); ?> </div>
<a class="readmore_btn" href="<?php echo get_the_permalink($post->ID);?>">Read More</a>
                         
                        </div>
                    </div>
                </div>
            </div>
           
<?php 

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }

            // End the loop.
        endwhile;
        ?>  
<?php get_footer(); ?>