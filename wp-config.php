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
define( 'DB_NAME', 'nodefig' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'v7n+V5D.Pf8hAI[-@@R/C]kKD?w3y)ry&$&u]kjd2}{OfN5^96)j4$MJR<ZJ)5cL' );
define( 'SECURE_AUTH_KEY',  '@WmHIP%o^-&@8qvp#F)e*YNkuawl&TXp(2DUvnn7p#8mMT3=]#~CXN|+OF^< GE6' );
define( 'LOGGED_IN_KEY',    ' GswL1:([:W1nh.s$%*C2oQ@>ABx2k+%W7X#xi:RC:%g#8|u#?mxefMj%4Oh<_S)' );
define( 'NONCE_KEY',        'o:4Zx;k%tz 029<S<8oq7B {ojZ[tGl9SE<A)1<v;sh``$Kz4_VC*iBOQT~yH$[5' );
define( 'AUTH_SALT',        'P61pPqn<eG^Wv~.^`,~zJt,&oUt52(>YAy$(u<d1f!NuZt=~qP-!ET*u&[Mh*srN' );
define( 'SECURE_AUTH_SALT', '8hg$llX13#-+u/$8X,}&}BeOyoS.YCO*g;Fk;{-9+8SScFhMhUzOr[{kQje]NnCK' );
define( 'LOGGED_IN_SALT',   'lo=}>sfe8$<z#KjSp*0}{D8WN7#,y(<%y]!91,!JE{w~TW[mQg2D*d~r7-j`{>L4' );
define( 'NONCE_SALT',       '&a46!D6K2|E@8xMkZ0((%?}}%D|L$EZWw%>*/LuX0beH7)K-9X^&PbYSPK}N=AFd' );

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
