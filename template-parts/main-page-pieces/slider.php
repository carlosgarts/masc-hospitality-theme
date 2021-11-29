<?php
/**
 * Template part for displaying the main slider in front paga
 *
 *
 * @package MASC
 */

 $args = array(  
        'post_type' => 'masc_experience',
        'post_status' => 'publish',
        'posts_per_page' => 5, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'Experiences',
                'field'    => 'slug',
                'terms' => 'featured'
            )
        )
);

$loop = new WP_Query( $args );

 ?>

<div class="small-title">OUR EVENTS</div>

 <div id="work-slides" class="main-slider">
     
     <button class="control next" onclick="plusSlides(1)">
        <img src="<?php echo( get_template_directory_uri() . '/assets/utils/white-arrow.svg' )?>" alt="back">
    </button>
     <button class="control prev" onclick="plusSlides(-1)">
        <img src="<?php echo( get_template_directory_uri() . '/assets/utils/white-arrow.svg' )?>" alt="back">
    </button>
     <?php
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <div class="slideMasc">
            <a class="title-container" href="<?php the_permalink() ?>">
                <h2 class="broken-title top"> <?php print the_field('title_1'); ?> </h2>
                <h2 class="broken-title bottom"> <?php print the_field('title_2'); ?> </h2>
                <!-- <img class="post-image" src="" alt=""> -->
                <?php the_post_thumbnail( 'full' ) ?>
            </a>
            <div class="features">
                <ul>
                    <?php
                        $table = get_field( 'highlights' );
                        foreach ( $table['body'] as $tr ) {
                            foreach( $tr as $td ) {
                                print '<li>';
                                    print $td['c'];
                                print '</li>';
                            }
                        }
                    ?>
                </ul>
                <a class="more" href="<?php print the_permalink() ?>">MORE</a>
            </div>
        </div>
     <?php
        endwhile;
        ?>
 </div>

 <?php
wp_reset_postdata(); 
?>