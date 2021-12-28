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

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <header class="banner" style="background-image: url('<?php bloginfo('template_directory'); ?>-child/images/chalet_2.jpg');">
        <div class="blog-info">
          <div class="wrapper">
            <h1><?= get_bloginfo('name')?></h1>
            <h2><?= get_bloginfo( 'description')?></h2>
          </div>
        </div>
      </header>
      <section class="rentals">
        <div class="wrapper">
          <h2>Locations</h2>
          <div class="cards">

            <?php

            $query = new WP_Query (
              array(
                'post_type' => 'location',
                'posts_per_page' => 4,
              )
            );

            while ( $query->have_posts() ) : $query->the_post(); ?>

              <div class="entry">
                <a href="<?= get_permalink(); ?>">
                  <img class="thumbnail" src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                  <div class="content">
                    <h3 class="title"><?php the_title(); ?></h3>
                    <p class="description"><?php the_field('description', get_the_ID()); ?></p>
                    <div class="infos">
                      <p class="price"><?php the_field('prix_a_la_semaine', get_the_ID()); ?> €</p>
                      <p class="capacity"><?php the_field('capacite', get_the_ID()); ?> places</p>
                    </div>
                  </div>
                </a>
              </div>

            <?php

            endwhile;

            wp_reset_postdata();

            ?>

          </div>
        </div>
      </section>

      <section class="sales">
        <div class="wrapper">
          <h2>Ventes</h2>
          <div class="cards">

            <?php

            $query = new WP_Query (
              array(
                'post_type' => 'vente',
                'posts_per_page' => 4,
              )
            );

            while ( $query->have_posts() ) : $query->the_post(); ?>

              <div class="entry">
                <a href="<?= get_permalink(); ?>">
                  <img class="thumbnail" src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                  <div class="content">
                    <h3 class="title"><?php the_title(); ?></h3>
                    <p class="description"><?php the_field('description', get_the_ID()); ?></p>
                    <div class="infos">
                      <p class="price"><?php the_field('prix', get_the_ID()); ?> €</p>
                      <p class="surface"><?php the_field('superficie', get_the_ID()); ?> m²</p>
                    </div>
                  </div>
                </a>
              </div>

            <?php

            endwhile;

            wp_reset_postdata();

            ?>

          </div>
        </div>
      </section>
    </main>
  </div>

<?php
get_footer();
