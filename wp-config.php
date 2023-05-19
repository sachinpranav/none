<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'sachinpranav' );

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
define( 'AUTH_KEY',         'SNu(<b1C`8oR&`FanDPsX)koL^g8% `izOcah21BBuTIsX8521k|G&``/F^kCRYn' );
define( 'SECURE_AUTH_KEY',  '~/SBS$wPR?YX4CcxZhR0fM^6nr_@}CW=J6vaVAK00VPZtgWARswqUV+=y1[0z,y;' );
define( 'LOGGED_IN_KEY',    '7_xi}7wo4#7r?sJdP5[/YhIl17fzcF~N60>g`J}UH0-F=b%}$(fK,8Ya_cE1^lk{' );
define( 'NONCE_KEY',        '+nB|Na9Y}W$0]0<]Ft#PFL0#A.kbNAhy-nOfuXFp^2}y[HeDz2WJ.+x4[Az$=Uz-' );
define( 'AUTH_SALT',        'e;qp,MZTa{YX2Dl&29E=xkajT*mykJu%60vrV2;ox8<|bB^$}d%gE^LmBPZnnd]E' );
define( 'SECURE_AUTH_SALT', 'E{Dq##|frZp}JP4=Io:&DQ!~g?QBM:RQToeWekCW;r}<Uh5XFZJ5%|+!b;#xw^{E' );
define( 'LOGGED_IN_SALT',   'x;>g.jUfifFe$+}A+jjIDOc}Ez9I&L+>zj.7#dgyifDqo*PgrIY>s+K^~PGu,7_<' );
define( 'NONCE_SALT',       ')$.GA>=I>H]>?/oAbkV82oa^;RuY0<s*_#_3^JVCI1|6=|Ld%mYL5<;@qqrYV2DR' );

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
