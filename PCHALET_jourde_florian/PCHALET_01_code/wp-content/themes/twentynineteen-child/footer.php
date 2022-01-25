<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

  </div>

  <footer id="colophon" class="site-footer">
    <div class="site-info">
      <div class="wrapper">
        <a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> ©</a>
        <a href="<?= site_url('/mention-legales'); ?>">Mentions légales</a>
      </div>
    </div>
  </footer>

</div>

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/47ba54db70.js" crossorigin="anonymous"></script>

</body>
</html>
