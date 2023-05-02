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
define( 'DB_NAME', 'port_db' );

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
define( 'AUTH_KEY',         'uG(Z]xp[qz7=8p3GgAgW6Sxwcmx6l-]BtVU^/P..XN$XmK0F%xqi&jUFR:/du?!^' );
define( 'SECURE_AUTH_KEY',  'ZH;1BkvhL9_&^e$r1S2w2I2Q>lZ6HgC;O%o.Qqz/ruRM=`9$R$Af)n#cl_(t@eVb' );
define( 'LOGGED_IN_KEY',    'wZGYd/QAx+ 3^o}EX*3Pv?(3y/ue;_R}HUf`d?eoyrlMa|wp*^8@d^I9Yrvgt~zo' );
define( 'NONCE_KEY',        'AX!2^FP#YxZynU4^?Q0^Px?W W#lo!MoV4l%zgge$db[r>4d?+l8O{UWvwQbM4*k' );
define( 'AUTH_SALT',        '{EVeN|}8OcL!HYbeCbfv-q~QOTnLP6HnzZMHm]QKkPWW NO8h|+$|8NrGSRhaWQJ' );
define( 'SECURE_AUTH_SALT', 'rMp^KYzFe<Z?N.zk|I-:/4|6_/4pwB;][.?h*I#o*`oTFD FeRR)U4@[e(-B~}H2' );
define( 'LOGGED_IN_SALT',   '}8u%]N8},ed4EqhGp@leL.$t,iw%Tjc5HtLI1n?s$PbBhTc?Hgq.R/Y?Q;!z9q;D' );
define( 'NONCE_SALT',       'd8vEm%1{@-q}%+_pg|-pRZQ<*4_$)m5aG)QIIwSv#>J$osENuiB-SvYJ]W0,jaN.' );

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
