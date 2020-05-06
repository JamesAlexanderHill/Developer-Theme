<?php get_template_part( 'template-parts/header', '' ); ?>
<!-- start index.php -->
<main id="content" class="page-width">
<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    ?>
    <section class="content-width">
      <?php the_title( '<h1>', '</h1>' ); ?>
    </section>
    <section class="content-width">
      categories
    </section>
    <section class="content-width">
      <?php the_content(); ?>
    </section>
    <?php
  endwhile;
else:
  _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
endif;
?>
</main>
<!-- end index.php -->
<?php get_template_part( 'template-parts/footer', '' ); ?>
