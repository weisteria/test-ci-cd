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
define( 'AUTH_KEY',         ')e.95N8 ^(;3& EEGJ6o!Un<bk7Udx>1A1D/5JT0)B;-H*|YwC|}$9[;qlg]Q%i(' );
define( 'SECURE_AUTH_KEY',  'Y%KDzDqo.Y;;Bu6ug`o]h.l|4`r//z|;&PdESlN7BF_i_+5fG<pK]mcX6b!Xl+Y!' );
define( 'LOGGED_IN_KEY',    'AbZuZ7w/(=gib4+PJ;Y_YW1kFt`2 qW0N[5>M{Kf{!I.u&9<VxOWhK#m}IWclJLn' );
define( 'NONCE_KEY',        '/>]@OeL-ytXJ~){_+-_?nJhZR&[2kn_M.xCBb;%>tmKKs0YaC(CP_zJh#x/`OM9O' );
define( 'AUTH_SALT',        'N>^O3^ikyVs|fOfdw1|uk;$cHN_sf^F54S+E+8UPNtssRcR>0,.!_TCge#Nkryc:' );
define( 'SECURE_AUTH_SALT', 'Pd!R`kQm0$|n7A:p*APj&oq_!a^;>] rOS2{m]U0s$Y3}b}mgmnJr5l0D?`Ez;~&' );
define( 'LOGGED_IN_SALT',   '0^^czxUP$nmG0Su,`jejSRSw:%DQG2&iGoJ[K (@o5hj1Mok(:~syxB2=.$Gfa^;' );
define( 'NONCE_SALT',       '<GDCEfc*d2Sx-FRSk+;/h.kIQ6yUqn}A$R4AE;OX`cFUhjf?xQ5qkV;,u>k3NCq8' );

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
