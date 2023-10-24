<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<div class="entry">
  <a href="<?= get_permalink(); ?>">
    <div class="thumbnail-container">
      <img class="thumbnail" src="<?= get_the_post_thumbnail_url(get_the_ID(), "medium_large"); ?>" alt="">
    </div>
    <div class="content">
      <h3 data-title="<?php the_title(); ?>" class="duplicate title"><?php the_title(); ?></h3>
      <p class="description"><?php the_field('description', get_the_ID()); ?></p>
      <div class="infos">
        <p class="price"><i class="fas fa-euro-sign"></i><?php the_field('prix', get_the_ID()); ?> €</p>
        <p class="surface"><i class="fas fa-chart-area"></i><?php the_field('superficie', get_the_ID()); ?> m²</p>
      </div>
    </div>
  </a>
</div>
