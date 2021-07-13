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
define( 'DB_NAME', 'fghtn1f6ux71g85k' );

/** MySQL database username */
define( 'DB_USER', 'zkov0ouo9lkw3ibx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xzn3egyerrrcyddn' );

/** MySQL hostname */
define( 'DB_HOST', 'c8u4r7fp8i8qaniw.chr7pe7iynqr.eu-west-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'Gtv5kC*l&6o,Q-zELFQ2*hhL;,Sv`1db(rx+TPdHAc3pl?eLMsWEgB4&-!e*h*b%' );
define( 'SECURE_AUTH_KEY',  'h~g8Jgq%S^AdOJ;f`WQ%iLM--xYUQkX>:t1n.7i}fSiPSR,v.p5EF:i9fVnyD7jG' );
define( 'LOGGED_IN_KEY',    '7aW3{{?z!JEbyrrG7T$u!-~*!e+Z#([AabZ#KSYgWj!FADS|bH0;ijgw<QpfU/Vn' );
define( 'NONCE_KEY',        ',5|DsJv!Q&vUY*AK|oJC+D|c}.v/<-pB+X-kc|`f?CADm4u<nR[D-powfN Wcy.x' );
define( 'AUTH_SALT',        '/CfbQ^q:*1D3`I8a0x6i8ENswfJ{k@Wk*32E*y^kG)HmL%L?/)Wz1bk,u.`QR0<o' );
define( 'SECURE_AUTH_SALT', 'HI!-l9SDijnIy ^|^|]d_R[XXv9mg;a_Nn2L4ffF56-y+g9L+e~?2oA!ApJ+Q9d{' );
define( 'LOGGED_IN_SALT',   'n*eV2=xg]py3?FE-&9o8k_EgIC^Yv@dGXVOKb*Z rI67;nb!/TzbXTqmil?Er($u' );
define( 'NONCE_SALT',       'FA-7kV2.;r)Hgr;x s<|Y)RCs3$3~{PXs7tFDLTNsO>AGuY;^*F}p0(+@dLvX6=u' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
