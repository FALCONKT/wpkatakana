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
define('AUTH_KEY',         'SCqMfA+TDC34jQ0miVFnBF9STft3/cP4iKLhP94FzTzaN0In9qGnx7aco1Wir5zwe+0OJPlNJgtXNogb3XouYg==');
define('SECURE_AUTH_KEY',  'pzT0HC2I1/E144Mhk44DRDJmyUVfomHzyGBK/gJY4kr/HrYSEAhdTIFkTEBcGyq1QfQFc+8VgbPGTcdpIZ0EGg==');
define('LOGGED_IN_KEY',    'zcL3PT1eRW9CTYgilBZLeebEexqNjKbWcIxu93CHxMgxZwehtT63bCTfN+OJ+YoHBXzLxWZZ03H3cVisu/GKAQ==');
define('NONCE_KEY',        '0pSW7m3O20HAZzxDxueoceT7O/ih+jdgyDUV9WqW4+gwnxUfTrGiUy24/5jmlaOSE+zEpiL9YQPRlxGdZWt7GA==');
define('AUTH_SALT',        'RnobFDSAmdGs/Hv2b620CLeB+DkXbtw5orTFl2iLqzAZ7MeelyvrMpxgH+CsSx1r0hn4EgpKGEth/KzS7HJKkw==');
define('SECURE_AUTH_SALT', 'MIhW+6jAP25bYK26xcr8RnjMTdhIGcY0LxDaqer1ASd1rykkpamB+r1oGY/OYc8YuXjzZyQvwQD1W2WGs87jDA==');
define('LOGGED_IN_SALT',   '99hjRyGN4sZ08sG5umQhYe9hyBFuX+ypgxfs+BBLwAKK3/w7GBwh/JcWLgi2hfaGIJEqQzirmSWReSWEw+MDow==');
define('NONCE_SALT',       'UtHGbxwlsUNHxTKeGn7kDE/lHgD9H5aTTd58g5hLBK/8yfApxVgUWNcTdE5Za/RN55yng+Yc0uFQK3Ec1eNBGQ==');

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
