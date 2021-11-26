<?php
/**
 * Template part for displaying the contact form in front page
 *
 *
 * @package MASC
 */

 ?>

 <div class="contact-us">
    <h2>CONTACT US</h2>
    <p class="line-contact"><span>Message Us</span> Using the Form</p>
    <p class="line-contact"><span>Email Us</span> info@maschospitalitygroup.com</p>
    <div class="contact-form">
        <?php 
            echo do_shortcode( '[wpforms id="43" title="false"]' );
        ?>
    </div>
 </div>