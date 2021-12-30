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

<!--	<div id="primary" class="content-area">-->
<!--		<main id="main" class="site-main">-->
      <header class="single-banner banner" style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID()); ?>');">
        <div class="blog-info">
          <div class="wrapper">
            <h1 data-title="<?php the_title(); ?>" class="duplicate"><?php the_title(); ?></h1>
<!--            <h1>--><?php //the_title(); ?><!--</h1>-->
          </div>
        </div>
      </header>
      <section class="single-section">
        <div class="wrapper">
          <div class="showing">
            <img class="thumbnail" src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          </div>
          <div class="content">

<!--            <h3 data-title="--><?php //the_title(); ?><!--" class="duplicate title">--><?php //the_title(); ?><!--</h3>-->
            <h3 data-title="<?php the_title(); ?>" class="duplicate title"><?php the_title(); ?></h3>
            <p class="description"><?php the_field('description', get_the_ID()); ?></p>
            <div class="infos">
              <?php if ((get_queried_object()->post_type) === 'location') : ?>
                <p class="price"><?php the_field('prix_a_la_semaine', get_the_ID()); ?> €</p>
                <p class="capacity"><?php the_field('capacite', get_the_ID()); ?> places</p>
              <?php elseif ((get_queried_object()->post_type) === 'vente') : ?>
                <p class="price"><?php the_field('prix', get_the_ID()); ?> €</p>
                <p class="surface"><?php the_field('superficie', get_the_ID()); ?> m²</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
<!--		</main>-->
<!--	</div>-->

<?php
get_footer();
