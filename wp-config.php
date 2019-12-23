<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qq540882525' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ayM+L_>jDIas#Y%Wy^7p/bc6Y[AO=us`W3VIHQuP8=xq4Le)*U]C)(zm$<w!NIeO' );
define( 'SECURE_AUTH_KEY',  'JX@q7f</G6nTrIRHJ!KxjEk/[4@8Pr:%aK2mBS-I.<PXz|Glm?JOd4<ul~mc($cF' );
define( 'LOGGED_IN_KEY',    'J%r&#QOaRmz@R}I1Cp;)4wFU -T~{J4$.7zM5H#Q#CLVe^_5HOwC,)%jpT>p?^lr' );
define( 'NONCE_KEY',        'VMo6BZJ]qJhudD<~^8f`wl@Cy&~o~rsB#f+gToTO3X+DDO7?|EHcLd$/01&O6bU9' );
define( 'AUTH_SALT',        'st8Ag99Al|Hv|`x%hrZS{94)yoX~a/;l`q-KRbqCL%`a2=io&T*&*xeH@#7p[LF5' );
define( 'SECURE_AUTH_SALT', '.ICV<EER-IRb,@kN$kpSG[zXJr56@KhQ9=XuLtUabC{6V>i$q3(_W|=w~]-,U?at' );
define( 'LOGGED_IN_SALT',   'CFI.)Z+xT%lH ^<kC1#V>s;QMMA`Dh`e50`pr1YqQ{naZj8r?wpMhDd7dAR6C~/U' );
define( 'NONCE_SALT',       'no7(cf*,;P+;:gC|En-R0O %;[AlMP~{!r{qkk*lWS$~:R%I|l(e,62l[Pw/^H7;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
