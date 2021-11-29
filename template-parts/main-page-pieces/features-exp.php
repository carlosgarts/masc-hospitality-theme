<?php
/**
 * Template part for displaying features in experiences
 *
 *
 * @package MASC
 */

 ?>

 <ul class="features-list">
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