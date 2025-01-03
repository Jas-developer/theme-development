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
define( 'DB_NAME', 'geniuscourse' );

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
define( 'AUTH_KEY',         'E`),NvY}MrzZ.f1BA8b_OlDd:6_nF$ ko;<DEXr C[V~kTMMM{m7&AQ.cfj9$K<l' );
define( 'SECURE_AUTH_KEY',  'V`tV!tp`Z2vg_}}gZWa1gNR~(jw||0%{_b7Qvl@-w<AO#SI(UEERBSMq1>HDLV}1' );
define( 'LOGGED_IN_KEY',    'pr3<AygKVGof761amG0v|+$DX }I>8#5kH76c#3,,@s!2&Y2mHr,=i}V0Z#:xmB#' );
define( 'NONCE_KEY',        'HN%HHdL>MqkZnC2k559Giv8^NLrBFQuk]/@D$c^3I*]wrhq)*|/=C=++.D]E<naR' );
define( 'AUTH_SALT',        'uaCdbmEj~ZXA0]Iwn.yU7Z@K1p=B#$w05{=A>1QlF`n`{~ExqcRB&L!(z p&|Dy2' );
define( 'SECURE_AUTH_SALT', '~}n!C68[oefys^[d|9veElso,4zak3z!ZJDn`bv!,cSs5[TM=EM;1PIy$+@go73i' );
define( 'LOGGED_IN_SALT',   'US-rZ3/LO&igha7e-<H-sy+zYdO6^RDJY-$qc5n5Ch%3ea(xi@=lZ|!<ItA&/IKy' );
define( 'NONCE_SALT',       'KL|Te- ]Bdj Y*~1H%RTcbyiD{mjMi3?F?7DvxuAPUeCyc{6L~L<KC>g6`lMoxV ' );

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
$table_prefix = 'geni_';

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
