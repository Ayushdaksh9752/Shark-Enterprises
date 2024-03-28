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
define( 'DB_NAME', 'b15_36243031_wp707' );

/** Database username */
define( 'DB_USER', '36243031_1' );

/** Database password */
define( 'DB_PASSWORD', '5S76.p3(cM' );

/** Database hostname */
define( 'DB_HOST', 'sql209.byetcluster.com' );

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
define( 'AUTH_KEY',         'ipfn2xy9wctwzdrbahxhpwusztxdnmbswqgoat4wjqhopx3o2tfa5lkzlny4saur' );
define( 'SECURE_AUTH_KEY',  'afwbdbvbnsmdhz7hcm7omhsqjjbegjfmyw0dzllfmsdvfbe77i9nsiiojishub9n' );
define( 'LOGGED_IN_KEY',    'npxpmz4nmgas5mtedjtmxikzbt37stfkjhkbmtigan6c3zw7toweszqrqglkwu4f' );
define( 'NONCE_KEY',        'a1c0htmewwk9zxsjt1otxzdhj6rkcqzayi8pj15obiv1wfnyaos2wgu7cwbrrb0r' );
define( 'AUTH_SALT',        'lqvktkfsbt7e2kxst0edhbcudqau9ezase4cjgrsh4hjjq9mwt2wuybdssygtmxv' );
define( 'SECURE_AUTH_SALT', 'gkiaewgzdkcpnnfswdka9owmdgbzj2tn0omrzfitrxo9e7rqo01fwpu0bvbfyuaz' );
define( 'LOGGED_IN_SALT',   'vndmmd8y3odddm8v2gwc5ixfnlnri74hhz8pxqmbvyiboygk1jvpyebezaqgvwvs' );
define( 'NONCE_SALT',       'k369cuxk02zaeftdxq44e5olfk0xcg2rpaockofzvnoycougyyw3gs1yx1yrukhv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wper_';

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
