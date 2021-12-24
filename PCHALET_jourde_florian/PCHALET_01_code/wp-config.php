<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chalets_et_caviar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R8Jx1J|(Zp-&IrN-1t5^D7xM1n E3RT(hj>QqtFBLh2VoP&VhQi1wRr{SA(t,rFb' );
define( 'SECURE_AUTH_KEY',  '3-hosPlFZS..5VNE b|Osw2bNO(pa,10%jgfMIA=$ ly:AHHCG1&Z}%pC9+<K_WR' );
define( 'LOGGED_IN_KEY',    'o8;giW|HzK>jEoQ5h=lmQJEYy0)n3&H!pyTu{/Y9P}tR.%BG6gM`|N]8e(#iZK+y' );
define( 'NONCE_KEY',        '*@n)RviQI#L!$4-,6PAv4L1`6Bg0(Y{dUIz^zeu;9j>6H`R63Y3u)2!gEl)kw&Bo' );
define( 'AUTH_SALT',        'z,pl]QZ?nSIba)up9W-$GcX2&:R|uYV#Z~N}xTR/~*^9>uiJ<)^Ee%^6H}l6xHRM' );
define( 'SECURE_AUTH_SALT', '%,=6/.~-=#ILH@{m*dZ[_oyWsQ<38=Yz)H,0>q+AghD&_F9z;CQUMjML,~GY~4N1' );
define( 'LOGGED_IN_SALT',   'yr92*<dBPy%i]Mi.38lL9q5:.F;tRfr$:PhU%rH##[{O^@:ub*I0q601)u<6KI9q' );
define( 'NONCE_SALT',       '*by`<Vd+RMpaX9(Y7H,.7#AuW5-xms%<%=i4n!G+e_e}wB_x(/rX r2kE+Vg/#f ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
