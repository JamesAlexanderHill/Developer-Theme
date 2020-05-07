<?php get_template_part( 'template-parts/header', '' ); ?>
<!-- start index.php -->
<main id="content" class="page-width">
<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    ?>
    <section class="content-width">
      <?php the_title( '<h1>', '</h1>' ); ?>
      <p class="subtitle"><?php the_field('subtitle'); ?></p>
    </section>
    <section class="content-width">
      <?php
      $cats = get_the_category();
      ?>
      <ul id="post-category-list">
      <?php foreach($cats as $cat) {?>
        <li class="category-item"><a href="#" class="cat color-<?php echo $cat->slug; ?>"><!--<img class="cat-icon" src="<?php echo get_template_directory_uri() . '/assets/img/' . $cat->slug . ".jpg" ?>">--><span class="cat-name"><?php echo $cat->name; ?></span></a></li>
      <?php } ?>
      </ul>
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
