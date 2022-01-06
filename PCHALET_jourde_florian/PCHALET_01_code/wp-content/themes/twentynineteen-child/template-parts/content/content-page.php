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

<header class="archive-banner banner"
  <?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
    style="background-image: url('<?php bloginfo('template_directory'); ?>-child/images/chalet_7.jpg')"
  <?php else : ?>
    style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID()); ?>');"
  <?php endif; ?> >
  <div class="banner-title">
    <div class="wrapper">
      <h1 data-title="<?= get_the_title() ?>" class="duplicate"><?= get_the_title() ?></h1>
    </div>
  </div>
</header>

<?php if (get_field('accroche', get_the_ID())) :  ?>
  <section class="ad">
    <h2 data-title="<?php the_field('accroche', get_the_ID()); ?>" class="duplicate"><?php the_field('accroche', get_the_ID()); ?></h2>
  </section>
<?php endif; ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="wrapper">

      <?php
      the_content();

      wp_link_pages(
        array(
          'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
          'after'  => '</div>',
        )
      );
      ?>

  </div>

  <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">' . twentynineteen_get_icon_svg( 'edit', 16 ),
				'</span>'
			);
			?>
		</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
