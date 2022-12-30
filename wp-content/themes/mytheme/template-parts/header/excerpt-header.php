<?php

$post_format = get_post_format();
if ( 'aside' === $post_format || 'status' === $post_format ) {
    return;
}
?>

<header class="entry-header">
    <?php
    the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">',
        esc_url( get_permalink() ) ), '</a></h2>' );

    ?>
</header>
