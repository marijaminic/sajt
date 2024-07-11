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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'Marija' );

/** Database password */
define( 'DB_PASSWORD', 'maja321' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'bB_F_WY7]>[T8vb&:~0EO!JLkXM<t;Jlbk3Rwp?ELiO<SUqx9cY6YEmsX_w+w[BJ' );
define( 'SECURE_AUTH_KEY',  'F$[{{,Iyt_s>Rdq{7>I35uq5d`/$s:~(XQKrfLhZJuLrjRx{[3;m0~^RdPKCbCY(' );
define( 'LOGGED_IN_KEY',    'zLxk,XI*d/FOtW(9 ]w[W9(-X0qQ#$fe_gh4hodsMEW1^jA5g3aH,unVaL&p&hVG' );
define( 'NONCE_KEY',        'j:T}F@$<|6x>g^T?45z2]xK Ca5~yFVK$_S792%&K*CWg1ODWYGb$0MG6v^(lVqQ' );
define( 'AUTH_SALT',        'a5nMe@b92c5NI L:@RC#KN0]DHk)avzYFT*+cNPO<#8F6%Zqsq8huR*}XcS_#[Tj' );
define( 'SECURE_AUTH_SALT', 'uw|axII51!1s^6D->coOl?Yg3aY^HHe5.2$4Sp|b 8VI~xnUmT+;Vd^AZO-#gb0=' );
define( 'LOGGED_IN_SALT',   '-ET!K8lV0B?1z`GHpJKTu:2@e,%|9t[J+>CuyMX @f^ZI6mJ)bCL)}-+JU4:.RLr' );
define( 'NONCE_SALT',       '<CJfv?=OcCQ>[-vE>.Kw<VJY6D=+{DypjT-1h/h8sO2zMAuJkfQ+Oz?&-hJX/yqg' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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


define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');

