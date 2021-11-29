<?php
/**
 * Template part for displaying the main cover
 *
 *
 * @package MASC
 */


 $args = array(
    'posts_per_page' => 1, // we need only the latest post, so get that post only
    'category_name' => 'highlight', // Use the category id, can also replace with category_name which uses category slug
    //'category_name' => 'SLUG OF FOO CATEGORY,
);

$query = new WP_Query($args);

if ( $query->have_posts() ) {
    while( $query->have_posts() ) {
        $query->the_post();
        ?>

        <div class="highlights">
            <div class="high-excerpt">
                <div class="small-title">highlights</div>
                <img class="brand" src="<?php echo( get_template_directory_uri() . '/assets/branding/logo-simple-white.svg' )?>"  alt="MASC">
                <?php the_excerpt(); ?>
                <a class="go-to-press" href="<?php print get_bloginfo('wpurl') ?>/press">More press</a>
            </div>
            <div class="high-post">
                <a class="post-info" href="<?php print the_permalink()?>">
                    <?php print the_post_thumbnail( 'large' ); ?>
                    <div class="meta">
                        <p> <?php the_field('brand'); ?> </p>
                        <p> <?php the_field('location'); ?> </p>
                    </div>
                    <h2> <?php the_title(); ?> </h2>
                    <h3> <?php the_field('event_date'); ?> </h3>
                </a>
            </div>
        </div>

        <?php
    }
    wp_reset_postdata();
}

?>

