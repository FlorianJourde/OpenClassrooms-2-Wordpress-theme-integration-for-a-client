<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<header class="banner" style="background-image: url('<?php bloginfo('template_directory'); ?>-child/images/chalet_7.jpg');">
  <div class="banner-title home-banner-title">
    <div class="wrapper">
      <h1 data-title="<?= get_bloginfo('name')?>" class="duplicate multiple-lines"><?= get_bloginfo('name')?></h1>
      <h2><?= get_bloginfo( 'description')?></h2>
    </div>
  </div>
</header>

<section class="rentals">
  <div class="wrapper">
    <h2 data-title="Locations" class="duplicate">Locations</h2>
    <div class="cards">

      <?php

      $query = new WP_Query (
        array(
          'post_type' => 'location',
          'posts_per_page' => 4,
        )
      );

      while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php get_template_part( 'template-parts/content/content', 'rentals-related' ); ?>

<!--      <div class="entry">-->
<!--        <a href="--><?//= get_permalink(); ?><!--">-->
<!--          <div class="thumbnail-container">-->
<!--            <img class="thumbnail" src="--><?//= get_the_post_thumbnail_url(get_the_ID()); ?><!--" alt="">-->
<!--          </div>-->
<!--          <div class="content">-->
<!--            <h3 data-title="--><?php //the_title(); ?><!--" class="duplicate multiline title">--><?php //the_title(); ?><!--</h3>-->
<!--            <p class="description">--><?php //the_field('description', get_the_ID()); ?><!--</p>-->
<!--            <div class="infos">-->
<!--              <p class="price"><i class="fas fa-euro-sign"></i>--><?php //the_field('prix_a_la_semaine', get_the_ID()); ?><!-- €</p>-->
<!--              <p class="capacity"><i class="fas fa-user-friends"></i>--><?php //the_field('capacite', get_the_ID()); ?><!-- places</p>-->
<!--            </div>-->
<!--          </div>-->
<!--        </a>-->
<!--      </div>-->

      <?php endwhile; ?>

      </div>
      <a href="<?= site_url(); ?>/<?= get_post_type(); ?>" class="button">Toutes nos locations</a>

      <?php wp_reset_postdata(); ?>

  </div>
</section>

<?php if (get_field('accroche', get_the_ID())) :  ?>
  <section class="ad">
    <h2 data-title="<?php the_field('accroche', get_the_ID()); ?>" class="duplicate"><?php the_field('accroche', get_the_ID()); ?></h2>
  </section>
<?php endif; ?>

<section class="sales">
  <div class="wrapper">
    <h2 data-title="Ventes" class="duplicate">Ventes</h2>
    <div class="cards">

      <?php

      $query = new WP_Query (
        array(
          'post_type' => 'vente',
          'posts_per_page' => 4,
        )
      );

      while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php get_template_part( 'template-parts/content/content', 'sales-related' ); ?>

      <?php endwhile; ?>

      </div>
      <a href="<?= site_url(); ?>/<?= get_post_type(); ?>" class="button">Toutes nos ventes</a>

      <?php wp_reset_postdata(); ?>

    </div>
  </div>
</section>
