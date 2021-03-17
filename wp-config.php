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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-0?U4$kt00QiW_s`Qjf$5ye1C{]CoN@0-(G/8;qxS}y.:Zr]Y)NpR{NuCeJqUT,{' );
define( 'SECURE_AUTH_KEY',  '^X iJ[C~b6VEVk+A[YMy}YZN(m%}&~qR^C,)Wi0TQ^HnrZ]~/5)(INl(^HRRv-Ke' );
define( 'LOGGED_IN_KEY',    'Dwv0766u#~5^)HQi(4Ur%PD})O`C)&ltE*]7}Dr(C`D{aeRMM!q_%-f>VGXT(SG}' );
define( 'NONCE_KEY',        '<k:2zSm4;q/WC3+o9[zNwi&~wAU]-o Pf5#g:aJk_XHX2St/<dy!JQCB49s1?RGH' );
define( 'AUTH_SALT',        'W~6b<Od=U&d3yY6kH|C1_e%/yCwCeIYnq,t4^<q@>mc4!{|6+I<FIU(Gmz=:TQ;f' );
define( 'SECURE_AUTH_SALT', 'Y%_ZC.[<QTqn>KGJ{$F|i4?j7lH7[{96:/ YjBgS!KNs4E7g/cvR8c65@{]8z9sa' );
define( 'LOGGED_IN_SALT',   ')bbg<D^10i/#EqR>-CNY;{lKS68u~Y`>=uJA[|Kr2 WbgA%0.%6WJq:J1{<pB6G3' );
define( 'NONCE_SALT',       'mv;7dldb]ot6898)qsc=XRJ~%$%AqD/5h;?c>;,;nQ8LVrNGMypO^?_OEq0^P*uq' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
