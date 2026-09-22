<?php
/**
 * Main Template File
 */

get_header(); ?>

<div class="container" style="padding: 100px 0; min-height: 50vh;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    else :
        echo '<p>Aucun contenu trouvé.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
