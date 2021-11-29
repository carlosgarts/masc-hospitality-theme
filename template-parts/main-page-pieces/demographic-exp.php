<?php
/**
 * Template part for displaying demofraphic info
 *
 *
 * @package MASC
 */

 ?>

 <ul class="demographics">
     <?php
        $table = get_field( 'demographic' );
        foreach ( $table['body'] as $tr ) {
            foreach( $tr as $td ) {
                print '<li>';
                    print $td['c'];
                    print '</li>';
                }
            }
    ?>
 </ul>