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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'webhelpd_whapaso_2');

/** MySQL database username */
define('DB_USER', 'tinsel_dev');

/** MySQL database password */
define('DB_PASSWORD', 'gvvzK)4O6Gk+');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G<eFj!-%@xTYSJEO.A{a-Y9WuspzP 6cJ<!<U[eT*(A2-^s3uDewv7u^Xi),Fb_+');
define('SECURE_AUTH_KEY',  'DiO[-sOm]tP N]i^+DM`/|c~+tnEtj1+#$$86.r[M(()I}cim5ckG}(yO+{CFc)J');
define('LOGGED_IN_KEY',    'C|}HSf+]7h@MlN}amfVb>qmQFzQm>-;#o?jU&[Se81qa ?F|:w(GTH~K:_0ZM$U`');
define('NONCE_KEY',        'U`9rs}6R1,)4d<qe.j9ccn,^Cmy]B!>!bB6M55g&C4hu|hF-c{L`/63D![rtJ@N<');
define('AUTH_SALT',        'pEeO<lm/>i27~RGjWIN{$F<R_5Qbgq!Dyz CAa7r83YNq^;q7HM75|vv<`/5OaMw');
define('SECURE_AUTH_SALT', '?jE+}h,d-CDZDY3yhSOa {ywU)~@DZ=1H**z~#t[nI=)]w?Cl--%mvA.s?DHorSN');
define('LOGGED_IN_SALT',   'NPghV;5H3:C.MmLOYcqhtlT9#|*1d%~o^NvD+yH~TWL,c_lXXyqlc~q}~!6]ri8R');
define('NONCE_SALT',       'auQ0.^Y{.ls~5cyP<Q?!yB[kXUi5,P!(OWuIAm)c$?Hg w%n:z{abLHX+%/w8v)`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
