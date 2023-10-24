<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

    <header class="single-banner banner" style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID()); ?>');">
      <div class="banner-title">
        <div class="wrapper">
          <h1 data-title="<?php the_title(); ?>" class="duplicate multiple-lines"><?php the_title(); ?></h1>
        </div>
      </div>
    </header>
    <section class="single-section">
      <div class="wrapper">
        <div class="showing">
          <img class="thumbnail" src="<?= get_the_post_thumbnail_url(get_the_ID(), "medium_large"); ?>" alt="">
        </div>
        <div class="content">
          <h3 data-title="<?php the_title(); ?>" class="duplicate title"><?php the_title(); ?></h3>
          <p class="description"><?php the_field('description', get_the_ID()); ?></p>
            <?php if ((get_queried_object()->post_type) === 'location') : ?>
            <div class="infos">
              <p class="price"><i class="fas fa-euro-sign"></i><?php the_field('prix_a_la_semaine', get_the_ID()); ?> €</p>
              <p class="capacity"><i class="fas fa-user-friends"></i><?php the_field('capacite', get_the_ID()); ?> places</p>
            </div>
            <?php elseif ((get_queried_object()->post_type) === 'vente') : ?>
            <p class="rooms"><i class="fas fa-bath"></i><?php the_field('nombre_de_pieces', get_the_ID()); ?></p>
            <div class="infos">
              <p class="price"><i class="fas fa-euro-sign"></i><?php the_field('prix', get_the_ID()); ?> €</p>
              <p class="surface"><i class="fas fa-chart-area"></i><?php the_field('superficie', get_the_ID()); ?> m²</p>
            </div>
            <?php endif; ?>
        </div>
      </div>
    </section>

    <?php $current_id = get_the_ID(); ?>

    <?php if ((get_queried_object()->post_type) === 'location') : ?>

      <section class="sales">
        <div class="wrapper">
          <h2 data-title="Autres locations" class="duplicate">Autres locations</h2>
          <div class="cards">

            <?php

            $query = new WP_Query (
              array(
                'post_type' => 'location',
                'posts_per_page' => 2,
              )
            );

            while ( $query->have_posts() ) : $query->the_post(); ?>

              <?php get_template_part( 'template-parts/content/content', 'rentals-related' ); ?>

            <?php endwhile; ?>

          </div>

          <?php wp_reset_postdata(); ?>

        </div>
      </section>

    <?php elseif ((get_queried_object()->post_type) === 'vente') : ?>

      <section class="sales">
        <div class="wrapper">
          <h2 data-title="Autres ventes" class="duplicate">Autres ventes</h2>
          <div class="cards">

            <?php

            $query = new WP_Query (
              array(
                'post_type' => 'vente',
                'posts_per_page' => 2,
              )
            );

            while ( $query->have_posts() ) : $query->the_post(); ?>

              <?php get_template_part( 'template-parts/content/content', 'sales-related' ); ?>

            <?php endwhile; ?>

          </div>
          <a href="<?= site_url(); ?>/<?= get_post_type(); ?>" class="button">Toutes nos ventes</a>

          <?php wp_reset_postdata(); ?>

        </div>
      </section>
    <?php endif; ?>


<?php
get_footer();
