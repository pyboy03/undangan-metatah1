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
define( 'DB_NAME', 'db_rah' );

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
define( 'AUTH_KEY',         'X@x.~9`r6Ka;q?++vG%C:P[U6&gjDYolH%pnTRkq/GL6ZpqFD9g*Uig ZR@]E~YP' );
define( 'SECURE_AUTH_KEY',  'V3%Lmr~@7y&/CNoAg)Mc48KI|K}zWfV7.JKO_?HsV<Al#|41VF>e{nc6Z0I?cwh}' );
define( 'LOGGED_IN_KEY',    '?u2lMz^WuwW>{~D,U!LP&ak3v>a9@TtnJtO01&m}4_H#Da]a{T,c9|*_?v#>3!}r' );
define( 'NONCE_KEY',        'Ox|3/u&$8cA-SuIy?DJ&|[JtBp 1mlYC$}E[)NFY7)BVPhs8j#N95JZ8i`(jitL/' );
define( 'AUTH_SALT',        '.v$3xupN%3x-B8maF4`pqgZC4VRA =>bU_i3{bH[SkP-)5PBXE1n0(~sM_?!y?T{' );
define( 'SECURE_AUTH_SALT', 'f87k?w=W;U79dG,I/ls8Aff.cJImAA(&w2-cNiR.Bl0paP; e1oe1[El#Rl:cxhu' );
define( 'LOGGED_IN_SALT',   '#aer*rS&*XN8OW&WP}apT0R{,$v>nY*R.Pj{a:M.UML6@-0tbBHtJ)l1zmXa`{,a' );
define( 'NONCE_SALT',       '8Bh`0X]T:}1_cltX8~~0OjiO7-<9zE}(`||sy,bo|$yFlw59zSn)owxP;cYzP/XN' );

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
