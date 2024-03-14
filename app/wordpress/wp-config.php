<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'g2aEFzKA6m95' );

/** Database hostname */
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
define( 'AUTH_KEY',         ' o_#y9Dvj+zcA0h3ZVn=rm`ohjL95y]xz1nqqsR!%P+I&-z*!99Z}hgPQ{+d>?z:' );
define( 'SECURE_AUTH_KEY',  '3E`!n;k.^atr[ts>v}}N% p=4NoVK@ba:-#:Dx8hM?zzyj[VTh=Mai7Q:dy->F/t' );
define( 'LOGGED_IN_KEY',    '`Ctv<U|74!m-[e%.$DF~3y${Eo8a$-H28Cuo{&@.7Dnl!l&uYAD:|aL]4*|r-jqV' );
define( 'NONCE_KEY',        'C%!EE)/PeT:8X&gnj)p;tOS|gr7B=EJ{vcWe6d&Jwwh[.3uLF]{Y2jsuC_1AFiS^' );
define( 'AUTH_SALT',        'prd*Og|5[|ON9.&7YT (_i{o!87?`gYp2(P65_8R%>A1O~|Z##{mRXXE(0D`M`?q' );
define( 'SECURE_AUTH_SALT', 'M(OQd#)i`[lrJfEGLd;1viR}d:&gz6Gch#w[`N7vPQJU8a0QYINH_xUHakGB ` _' );
define( 'LOGGED_IN_SALT',   '4-gLJyLp`T>}Ilbt&RXtKsm>D?rcodypi6O`li5rN%t.G+KL7(j52N,cJt;+@7rJ' );
define( 'NONCE_SALT',       'Q$x00sm+/S-)qvYEz#ao@N].a0KzLjYBeRY8Pb1e#x@LyuEF~Fj#y1[Wo^?UNmP<' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
