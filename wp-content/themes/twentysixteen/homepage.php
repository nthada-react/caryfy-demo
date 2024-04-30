<?php
/**
* Template Name: Home page
*
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
    <main>
    <?php  
$landingPage = get_field('home_page');

if($landingPage){
              //print_r($landingPage);
    ?>
   <?php echo $landingPage['home_page']; ?>
<?php } ?>

<div class="container">
<div class="row">
<?php
$query = new WP_Query(array(
    'posts_per_page' => 3,
    'category_name' => 'sfc-in-georgia', // this is the category SLUG
));
//echo "<pre>"; print_r($query->posts);
if ( $query->have_posts() ) : while ( $query-> have_posts() ) : $query-> the_post(); 
?>
<div class="col-md-4">
<div class="card p-2">
<div class="mb-3">
<a href="<?php the_permalink();  ?>"><?php the_post_thumbnail(''); ?></a>
</div>

<h3><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>

<small><?php the_author(); ?></small>


<!-- <?php //the_permalink();  ?> -->
</div>
</div>
<?php
    endwhile;
    wp_reset_postdata(); // this should be inside if - there is no need to rested postdata if the_post hasn’t been called.
    endif; 
?>
</div>
</div>

<!-- <div  class="container">
        <section>
            <h3>What is SFC?</h3>
            <p>Structured Family Caregiving (SFC) is a Georgia Medicaid waiver program that allows eligible families to receive financial assistance for caring for loved ones with disabilities or chronic illnesses at home. It empowers families to provide quality care while their loved ones maintain independence and dignity.</p>
        </section>
        <section>
            <h3>Why Is SFC Important?</h3>
            <p>SFC offers a cost-effective alternative to institutional care, keeps families together, and provides much-needed support to caregivers.</p>
        </section>
        <section>
            <h3>Features & Benefits</h3>
            <ul>
                <li>Prospect Management</li>
                <li>Task Management</li>
                <li>Mobile Interaction</li>
                <li>Automated Reminders</li>
                <li>Mobile Documentation</li>
                <li>Change Form Generation</li>
                <li>Caregiver Monitoring</li>
                <li>Integrated Billing</li>
                <li>GAMMIS Integration</li>
            </ul>
        </section>
</div>
        <section class="testimonailSection">
        <div  class="container">
            <h3>Testimonial</h3>
            <img src="https://caryfy.ai/wp-content/uploads/SFC-Testimonial.png" alt="Testimonial Image">
</div>
        </section>
        <div  class="container">
        <section>
            <h3>Benefits for Agencies</h3>
            <ul>
                <li>Increased Efficiency & Productivity</li>
                <li>Improved Communication & Collaboration</li>
                <li>Enhanced Caregiver Support</li>
                <li>Streamlined Reimbursement Process</li>
            </ul>
        </section>
        <section>
            <a href="/" class="btnReadmore">Read More About SFC in Georgia</a>
        </section>
</div> -->

    </main>