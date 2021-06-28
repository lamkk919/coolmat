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
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?: 'coolmat' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') ?: 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?: 'root' );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') ?: 'localhost' );

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
define( 'AUTH_KEY', getenv('AUTH_KEY') ?: 'u`W%tn#ub&%ze%h.[>qJ#_iKv,7fsR/nj/U0]KQ]xx`0 mZ;S;9rc}fRf_CujbL/' );
define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: 'Zkq$TgwJ [8Y `:|b68?+}RZ&qS1_ }x/</ f^MHQ7k`#K?Sx/m^H$iVCMl_$>5^' );
define( 'LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?: 'iasw6axhH-!{[hwW5`l~YkDp!Z[j]k@VV)+M)CDB2})(k1,|1AB2mOS :F1[bC.v' );
define( 'NONCE_KEY', getenv('NONCE_KEY') ?: 'b84&2H[(N(WoQi:fkw!q)6a{3!46f<$kLH6^o(<3$Z19p|tqoPSeL95k^~@+i-d(' );
define( 'AUTH_SALT', getenv('AUTH_SALT') ?: 'v8!k|dhL5ke*SbXwjMy4ruO:<K&u{IqrmPE&R7o]P.J2cXv*:**YyX/5JsS.;]_c' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: 'DSl).8,F?Il? JkBxD6ktbYc0!~+vqP}Xh/+gH}8epWTEI{q^nl@C@#8Zi|2~syv' );
define( 'LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: ')YaUjA./|lNH7DfJ.]8//>W]m+dvA;lD_=~uPC^f?qHk^R>jHXdF{l6:U1+}&#f]' );
define( 'NONCE_SALT', getenv('NONCE_SALT') ?: 'E|eB.wn4oyiGgB(|8/vuZp?B=<$7Xe)u17s<NER7Fo;#o[H}.338iiI<-5o8w0|2' );

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
