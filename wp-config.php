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
define('DB_NAME', 'store-sh');

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
define('AUTH_KEY',         'tCurl4TUqtt:K[nkuMz0^k%S1%sdooVXx:a!K8iz4&NKfvn(DP26s208K*1gttpE');
define('SECURE_AUTH_KEY',  'YGI{^NDAGTuJDbSQ.WdP,s&ZLoEbvuNQ!00&d^u4;tt%Y+>Iw8+O!>s_6_Pk)4dc');
define('LOGGED_IN_KEY',    '1_tUy@RNq^6puH<gZ*r.,hF&VTeb=c:G2F$z$/ofFt5m2gqnirI==P%jq]:!S-w,');
define('NONCE_KEY',        'roh4ato6X5@k)F-jlGoiiNYX4@}}sujAo#@VxRw3|?XZA/Yp.NhVb57~>ITBp0y*');
define('AUTH_SALT',        'vE4gp)[ku)9<9FMN5u@IyWg}Ryv48G-k) UKOAzt1]FdvML2|7^l19T&r_HdWcDn');
define('SECURE_AUTH_SALT', 'F6.Bo2D[Za(g o)$(M0W?9)QT6z=!P@sI:>n=+uJee!$lnu{04[8,^+xA*qK=K`K');
define('LOGGED_IN_SALT',   ']]KymcF;H7Em|a)alvJ5F`bM_WT-[=O8e7=j,69]=#w?VHp>*4FRGmw@u2A94MQa');
define('NONCE_SALT',       ' Xri.H`NIbOpELu2Lx+sD[7SQWa/dtb)r:.WYzQ-&QAHY}=2w:W}H$C4DU-aoSXm');

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
