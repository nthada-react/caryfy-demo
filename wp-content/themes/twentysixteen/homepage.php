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