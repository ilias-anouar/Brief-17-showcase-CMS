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
define( 'AUTH_KEY',         'OdSAC(ZT*A,ns/FY;97p#l1=L6xkvnKaS-1xS=l:_HDS$!#j1/.D.L xPvHH|xt,' );
define( 'SECURE_AUTH_KEY',  ':BoYu_DhI@vspWN@i*xz^(E;K4OVgWRa748LpHl![ZbL1$Uk+hfH4sH-d1%4}**]' );
define( 'LOGGED_IN_KEY',    'D#BD:b:*`~=5NwXv3PERUQQQ@amzUz0d^r~Dyx )m_Kxt=|G)<cdNf]odLnDg7YD' );
define( 'NONCE_KEY',        'WHR.7:VR3fZA$#[eRxliEY`sJvH>(_SF>e<=ms`z f+`k>D/QPsSf_8##6uXNFIb' );
define( 'AUTH_SALT',        '&5BN*ysP%&pk:/%M(=w{j0Q?M@1HSsnD<3hpuT*}HU9B ho#|qAHz-L]QtyGZIx8' );
define( 'SECURE_AUTH_SALT', 'HUc.{(P{86(%r[,A(rpkS_$LBL*8JhT @Xu?l0W&Wzk*AX1Qa;-R-8y!SqZzU7gk' );
define( 'LOGGED_IN_SALT',   'adOw0J pEGcel&VgKhz!{X+wOrYxBr)MuY>z!ELiLJ3Na |6/Wn=oT$g3`hs3NtU' );
define( 'NONCE_SALT',       '_F?4L*JMe;:#_D[V(=(}Ntw`}-5eI3K[tW%VUaLaKqX_nX3Wn&zFsmx0Jgr~H=>E' );

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
