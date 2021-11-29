<?php
/**
 * Template part for displaying the brands
 *
 *
 * @package MASC
 */

$args = array(  
        'post_type' => 'logosliderwp',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'logosliderwpcat',
                'field'    => 'slug',
                'terms' => 'partner'
            )
        )
);

$loop = new WP_Query( $args );





 ?>
 

<div class="our-brands">
    <h2>OUR BRANDS</h2>
    <div class="brands-grid">
        <li> <p>want to join the movement? <br> <a href="">contact us.</a> </p> </li>
        <?php
            while ( $loop->have_posts() ) : $loop->the_post();
                $post_id            = get_the_ID();
                $metavalues         = get_post_meta( $post_id, '_logosliderwpmeta', true );
                $company_url        = $metavalues['company_url'];
                ?>
                <li>
                    <a class="brand" href="<?php print $company_url ?>">
                        <?php print the_post_thumbnail( 'large' ); ?>
                    </a>
                </li>
                <?php 
            endwhile;
        ?>
    </div>
</div>

<?php
wp_reset_postdata(); 
?>