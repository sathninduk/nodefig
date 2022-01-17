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
define( 'AUTH_KEY',         'W*{Xv4S[d;l<3<L0$NPtMY3pcwhLYuT&F!?pF2VJzO>8)n%AkTu1mU^=SY3nC|A^' );
define( 'SECURE_AUTH_KEY',  '4n:N%WY7.1Q;:R$p~~>[.4~gOv4pu~Qt-jI&1!OOPiX%i4guV@&88>,Ziv>^+>X1' );
define( 'LOGGED_IN_KEY',    'uigR<gRq!Dx8AsSUfaO_>mP;!4]rfL LNa{6!%zz0YN$4BM*u_9TGhQ$HamDi/d}' );
define( 'NONCE_KEY',        '!&fURb=<NNIW?W1X0Z<5Xp(NT|KulL*jAg2;>Zk#Q/l#[q8{[;DAgDT4^[m3!=Ax' );
define( 'AUTH_SALT',        'wt(/#HU[Y^$mnC xGN}a~kz ^ P+Qhl8sin~s+Jh+|7!2eK{_suQB.[-fWb)>CMj' );
define( 'SECURE_AUTH_SALT', 'foD22];q-eDUXT4Wi_M MV)!K0898NiTs]$8xA6bK Imd?oYDmKcoXgjorST0>?b' );
define( 'LOGGED_IN_SALT',   'icA]0=tcoF(+aZ]v;f?F7HGg)TB)J(2Zt{qR&o_KT dpmO+yN|C:B@zX#~#5!7{8' );
define( 'NONCE_SALT',       ']rR!2om;%x+fAt}J1/Ymi+tRf&PBF]7?HC;Uf5^LJ/zEwsI5ralOyY!T1%2WOH#K' );

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
