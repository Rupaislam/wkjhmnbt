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
define( 'DB_NAME', 'wkjhmnbt' );

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
define( 'AUTH_KEY',         'G5S|4 BaX/ie7MbjWw:KQKY5i4)=o,L<6Ac}w7V.|7eLwk0RC<8?/JxTBlD~^pPV' );
define( 'SECURE_AUTH_KEY',  'fW0jz1/M5>(&Ib^VTov$)[@)Zt:84q%qgDs.]ksFk<ps)}Fe4rS8CpezUw{Kmn@G' );
define( 'LOGGED_IN_KEY',    ' y7d)zk8l(`/SUc7m R%/=6%-R1Gkj{b6H1Q~}Pm]S!*~hXKd~6` !(4M9uBx7h.' );
define( 'NONCE_KEY',        '<n&Spu>jOTuL5XvI0>]u,9SK5QB5.AXe7LK(<|bSq98{fSMqG@6s:sz.bTA+OMQY' );
define( 'AUTH_SALT',        'UBKd}:(bvk`.(,,,J9=?/T!5Hz9 `^MtzNl>^Z2gx*3K:0|J]2fP[,?_6zjd[0zE' );
define( 'SECURE_AUTH_SALT', 'LoH%9pX;`_I~`UnJNp~oE5;=v#<g|h~Wq570Fat`q6` 6UMN%cQ{(_JZT#8>&OQP' );
define( 'LOGGED_IN_SALT',   'ob6,iX=3}oj8bu }u.(/`9l_Iz8sYG/t=4?6.<!CH^QBv]PPJA7QgRxf&lETh.g2' );
define( 'NONCE_SALT',       'R: R.es<l RaXeRcr&b>,q<;O8mKha>8hp{u>tvgp[sy1w=$.IU~D_?l:;tO#ZVw' );

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
