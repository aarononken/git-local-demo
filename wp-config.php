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
define('AUTH_KEY',         'McXTybo0Gd6j/TDlzhv4ykfPWuqehtGlrcPUddUvoQ6d5dAXcc9am7mwvx30RhDn1l9BaXNvSmFkJAEI0tdyAw==');
define('SECURE_AUTH_KEY',  '2Cb7jl/U3ku5raA55VotPm1MIdaDkC8UEHOTv3W8qEuIup8+oPA1Ik780RiipI9vZgwOJyEKqdSzX52YxWj/rw==');
define('LOGGED_IN_KEY',    'gbr31Ns2YYb4tWldRPI34IO+gXoZtyU8qgN2mG5Ac0jYWso7tTb2hMqgXW+H7L4An6eLF2K5HhsgofCpX0pZeg==');
define('NONCE_KEY',        'L70vWpkzIpkWf4QGdsNzW6DH0yHyCwWCoTEhC0NjCJG4QfRY6ko54JaRcwkjahayuzwGbdtTUCv+MGkxKmvs0w==');
define('AUTH_SALT',        'DLKCPZ706LUrYAGeJGibZkH0JmuSWS/r2YRpCtz9t6Zgchlr2WjMZ2L4ITguA8FdTV9vH5+6dyKZXL4/bzhPkA==');
define('SECURE_AUTH_SALT', 'dtcuacjGsefX7vO2PXK8MOZBlgXNYnrrda6f7JuBaHPyqG+u58UMFPwr6yfed+Fcsa4oQvBfzNHxLnMHtw1fmg==');
define('LOGGED_IN_SALT',   'uQfeOCxMDOw/3ScEWf7MKygsQnElySSkWE4bkGznfWKOndfRYGVUbTsvUeABzC6pecQlMsH3b3yBZ+wTal54JQ==');
define('NONCE_SALT',       '95iYl/NtPgdtcDnUhXnXKq16L1xg0cuhg/pK2j9er0emUDPtc7fAe13Ha8943UORfgIdD0sn6eY4zEZG/s1nuA==');

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
