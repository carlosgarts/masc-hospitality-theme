<?php
/**
 * Template part for displaying the main video in front page
 *
 *
 * @package MASC
 */

 ?>

 <div class="main-video-intro">
     <video id="about-video" playsinline loop preload poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/oceanshot.jpg">
        <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/ocean-small.webm" />
    </video>
     <img class="logo-background" src="<?php echo( get_template_directory_uri() . '/assets/branding/logo-background.svg' )?>" alt="youtube">
 </div>