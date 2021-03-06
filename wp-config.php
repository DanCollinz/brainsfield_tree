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
define('DB_NAME', 'bransfield');

/** MySQL database username */
/**define('DB_USER', 'bransfie_wp684');*/
define('DB_USER', 'root');

/** MySQL database password */
/**define('DB_PASSWORD', '8S.iK0p0j@');*/
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'eeidlbq24xrxocacde8ufyjj237kvvcsk8kyi2acmllpzebhy6p2bbqh4qoxpani');
define('SECURE_AUTH_KEY',  'w4zl1ercakwke4gl8rgrhym74uzuv4ewmv62fhzhekxqcwxmbxwplyxcghtftf8z');
define('LOGGED_IN_KEY',    'imaynuyiesabmey9fkjslwv6mi5wuqb0pwkqgdnpixfhbq3nuekwwsgb0gvxvmyp');
define('NONCE_KEY',        'ocqvo8iuyrfwrf3equytpigjsrm2zujiunfcgwucwrtxfbojbkw5sbxkgakiiv01');
define('AUTH_SALT',        'ofsuddcoccdqtedlignkvyorffajcjs2qk9gvmbgf25gg6ic3z9z8v2pt0q364ua');
define('SECURE_AUTH_SALT', 'vfkv9z9p6dg5ybqqkrtjy7a5jceetejcxgecah03kibv4qt7cg3we3fxunft4p1d');
define('LOGGED_IN_SALT',   '2ungqhbxe8fqxzt7eaamn3fppq62u9uvt6roxfoaczrkz55rluluyyt0qksoc2ji');
define('NONCE_SALT',       '4kl0m7zzy04j1r04hbl0kjhkdprwgdxatko198hpmbrcosxbtuirircme3es7bet');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp06_';

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
define('WP_DEBUG', true);
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
