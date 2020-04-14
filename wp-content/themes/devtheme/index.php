<!-- start index.php -->
<?php
get_template_part( 'template-parts/header', '' );

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h1>', '</h1>' );
        the_content();
    endwhile;
else:
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
endif;

get_template_part( 'template-parts/footer', '' );
?>
<!-- end index.php -->
