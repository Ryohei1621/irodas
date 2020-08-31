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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dgP/mKPUrcsHiG2+R/4U+ic25zZGK9ddAtiEwLrohdBqIkxO3Tsnr3JPC7IHQee+4v0vr3amdTJQQAfphN+IYA==');
define('SECURE_AUTH_KEY',  'lEvoUoxANxVbO0Upg991lXCSpkC0vI3l6hJg2X/8N0NaiUQBmPrzMfAPFAWfiLdm+mwAXdYBdytNQOefWSEmgg==');
define('LOGGED_IN_KEY',    '48s785Li69XUDRl9RNndVJuxxQqAF3QZKfmjol3Mc443AYYZWk6qxS7Wf2Yml9f0QpgRiBtIDTfspIuzM5mLpw==');
define('NONCE_KEY',        'Y2ZNnxaDgiyxjykkavHj8B7S7MnEZje+Gog1Z+7328XgIDcczDjBvr9408Z1KjEQZDKqXLYGjH8WoOnuuf5aQQ==');
define('AUTH_SALT',        '6Iq8rh9DLN/qYi85G5yBwtnjhJpKAaogGnMtsvG6zuYyHpxQtjGSEG1/2wX3ALOqt4XAQpCOHJctYJtoGU5APQ==');
define('SECURE_AUTH_SALT', 'TNPI72E2OY71MBSNlo2tqKJD15ytx4MYqpqQo6V89/qjN9tv0+CY9LWjbEjffeaCEDShdf174pFpyaHSKjeAtA==');
define('LOGGED_IN_SALT',   'GgcPOOc8jaZxGXz7mG8kFkzSiA+NSR/eYQvIS5MmaPN+0TGW/mL89WTXA0AUFdmqJRO9rZ0MS9WSl78utRMVRw==');
define('NONCE_SALT',       'r/DuybCVU5O1Kyt8T0cXxAvp6sNsd0oYLb5J3aiNIyZfeZXhPqj3guery7jF/6d84t1xZmYkouUdC5n5DfyTHw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
