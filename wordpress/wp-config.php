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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordPress' );

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
define( 'AUTH_KEY',         '!`WZbWnEfTE/IV9$cW,Kmq$_o7aigKuEXZ/>eUaanXyl8H.XmFJ890;Z-)*N3{(P' );
define( 'SECURE_AUTH_KEY',  'bB:2MzEh^zu}8e]hX@/Qx??8bYyN)mFUDO<gV(:o9%fN9Dj>XOdhL&P8Ol(5mrMn' );
define( 'LOGGED_IN_KEY',    'Xsl%EA^/m3f.93dYOHl+l=&l%>~?W7hxB{4gWHu:Er?AhmxM+)0PQm?|PmoHV*SH' );
define( 'NONCE_KEY',        'VWX1@ipaExyGjC<LRw#G`8`)q<o<P)EsTLbeiO>g/V{_laP):aq~oZX*gm/OOX J' );
define( 'AUTH_SALT',        'bFSr5R&iTQ6(~yKpxzhA ]^#c?;AH`{fhw|nb:`!4+a*bGWsF+6,m6$vz=G`64&J' );
define( 'SECURE_AUTH_SALT', 'O1JiV*V,LF^eS8 XH#&sgZJH>fa<l=IRokQsH5YY4W.H+%*4icI8<3&JU*b_:K.u' );
define( 'LOGGED_IN_SALT',   'Yr)a(Z{7?pqwFf^&4rdH[$<^-Pa]zM&P0roEa97FBzUMJlSRo)2ca:fGoLW$BeZ4' );
define( 'NONCE_SALT',       '~I|]{:#x3}]c:7Tx2k<C}bPo&fE}H41sN%:6WarNPu=z?<;s/hx[@ ]fkrHM&vq%' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
