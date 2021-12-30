<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<!--	<div id="primary" class="content-area">-->
<!--		<main id="main" class="site-main">-->
      <header class="archive-banner banner" style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID()); ?>');">
        <div class="blog-info">
          <div class="wrapper">
            <h1 data-title="<?= get_queried_object()->label; ?>" class="duplicate"><?= get_queried_object()->label; ?></h1>
          </div>
        </div>
      </header>

		<?php if ( have_posts() ) : ?>

      <section class="archive-rentals">
        <div class="wrapper">
          <div class="cards">

          <?php
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content/content', 'excerpt' );
          endwhile;

          twentynineteen_the_posts_navigation();

          else :
            get_template_part( 'template-parts/content/content', 'none' );

          endif;
          ?>

          </div>
        </div>
      </section>
<!--		</main>-->
<!--	</div>-->

<?php
get_footer();
