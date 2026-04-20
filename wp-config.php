<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'muiredu2026' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'R!L/G8|C@MK-uU8n(Gu}+TQ{ +k)3xL8w3$iOESks9{9L^#&c|!cJ5XBx6Q@;LAg');
define('SECURE_AUTH_KEY',  '6DYJcMPUS1|F2a%KVf4:OazCfw+ :L,R ui2R]s{pBUg*EBRn)*k,H`zD{1gH6|Q');
define('LOGGED_IN_KEY',    ']S1 j-|i^KWbfjq</1$.BMz|QPB8UX+iuttM~b%]&DEG+,OSlzDh9}JWrdbhT0[:');
define('NONCE_KEY',        'pr.xSC.9m%}f@e@?J*t/%c2SP l1gQDw(U69Ox%2n,WQ%3VRy<),|p<Ru{}-zvWV');
define('AUTH_SALT',        'F3t&{~.SdN@kodMFJ[+++c+!F>uFltnIRv?uJtYQCtu`S~Nf*ivzS+v=1r$Mq_n%');
define('SECURE_AUTH_SALT', 'XnjUM}PoMP>[r4pRH@VtXThSl3+j=:JGP*Cvm]/}?:v;6<r!n11/Bup~+9G#Ls3B');
define('LOGGED_IN_SALT',   '4:|%l9q]5=C; @2go+n%cZI:i)ie#Co#xc4=2`QHf%r(O&!5n3GQ-N$j>i6hcN59');
define('NONCE_SALT',       'nvG2Y;:zD/o^q1$i-oNYZ0De~:49C1aq,a.o|_}i/xSZ1?nb4g$]{Dd!2QgY0Go9');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'muiredu2026_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
