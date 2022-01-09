<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>
		<header id="masthead" class="site-header">
      <div class="wrapper">
			  <div class="site-branding-container">

          <a data-title="<?php bloginfo( 'name' ); ?>" class="duplicate big" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
          <div class="site-branding">
            <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
              <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'menu-1',
                    'menu_class'     => 'main-menu',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  )
                );
                ?>
              </nav>
            <?php endif; ?>
          </div>

          <?= wp_nav_menu() ;?>

        </div>
			</div>
		</header>
	<div id="content" class="site-content">

