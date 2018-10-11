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
define('DB_NAME', 'timer_lh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':N5+cbW}&g^BBioF:P7*{K/?mq|}qW3=iG?Uwk:;]Kt>tnB/EQ0cL_m;(2sTL]0^');
define('SECURE_AUTH_KEY',  'i42v DK@]slF2^5M%>C}|ubYS>wT8uYubKnz}&518a&`rU}|X5MRT%*4=T!L(<d[');
define('LOGGED_IN_KEY',    '8 w#gu<Z#vQ#Kl8iqs7_IF_wE}KBOfTc,zF.uoxN5jGbDR)3i?_z=2_){l6Q[#;s');
define('NONCE_KEY',        'evHmIwP0mTB|o&dmZ&O&)Mc-HW @IzI(sD6Zqi<SGnDF*wJ6_H7EX]![*A[}#Ui`');
define('AUTH_SALT',        'JL9I1+[/,]wP}j`TGEMvR}#0UNh@)>&M7$)M`iOdtvPr9kit4DFx7/GjvM;16MwK');
define('SECURE_AUTH_SALT', '~DH*{8i=snUc$iuM]YI!fvF,1Vbh:Q_@EDTzd[*D:t4!RbU6E|[[4;*B3*R$Q=|m');
define('LOGGED_IN_SALT',   'I-HgSj4y>(xc a/y$u,J7HYV!EEhmYNlU^EEG|)(8^LHbBXc)3(FX]UZIxWtj)xx');
define('NONCE_SALT',       'IZ:Onk)2VnU]Fb+KwDJO1w@2FjXyIj8cqnx<M0bvJM)ZRVIONXFV5LeB34)sbOHw');

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
