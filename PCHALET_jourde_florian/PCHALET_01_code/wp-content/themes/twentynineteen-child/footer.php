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
    <a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </a>
    </div>
  </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
