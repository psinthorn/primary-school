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
define('AUTH_KEY',         '/GnWwaicEaxA5ixrDvy69Ko9jawlw5FxsMv96uh6td8pRFBi94P95eR0pD6eHDKwsT6HFmaaEE7oiKw/fShDPg==');
define('SECURE_AUTH_KEY',  'LwdqKfZeDK9fJO/qh+6kUYk06HreyOSyfAmJzy+gQAwTXDq+C8HJ2GDA2+SNgrsXna/L7sdYJqBNqrzxSydK1A==');
define('LOGGED_IN_KEY',    'ipszHLG7yxTR84LBvLWwjTjJ771L6Dt1bgt8aSxgd5XCJkZ3/taU4m4IzxtgDY4gxKAaOfLxoM1w+c+ZgyGkIA==');
define('NONCE_KEY',        'ShNWBQBpog71rEovLMQcGpR6BIuTpjJ1yvtqnQu7rebNkP+LyG7OrERGvA+L9KMOS2ZuyQ2q2qBv8VcLTAJegg==');
define('AUTH_SALT',        'j7fZrIcj57tf45gxLh1GzrNASV4CYe4yNUTJ34nvp8e6QXvPVEfqF+Blv7BjIJYBzcNf0gytXkuwyZoh08LdVA==');
define('SECURE_AUTH_SALT', 'S97+MA7XKXvQzpjLSaaIK1r4vFMN081BJs2pGkIPGkJALiEr4ig8HZLjckkW6gfoCHbt2s5zpRbaRXGhtzaAIA==');
define('LOGGED_IN_SALT',   'D7xtpyhJHhihzI3+eBq7KsUfD120ZfOSxr5aF6ImsNp8l9SMYduFFedyKWZGrvMTc8nDJfzrX731vV5WyCNb5A==');
define('NONCE_SALT',       '02TD4sEK8hAQqfUR/MHHMNjXc48kbuHq583e2hcBKbFojFyctXZA13cmkjewtkUfbVFosGHfF2lcci1eaDWe1A==');

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
