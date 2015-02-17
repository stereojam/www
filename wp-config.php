<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wshngtndc_us');

/** MySQL database username */
define('DB_USER', 'wshngtndcus');

/** MySQL database password */
define('DB_PASSWORD', 'i-yq*cPH');

/** MySQL hostname */
define('DB_HOST', 'mysql.wshngtndc.us');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '1HM@O8S#b7mP!7GOc/y1k1wVrdPJ8WZudx^($CW/5)E*k$RvyB2;/x8@mz$dDqN8');
define('SECURE_AUTH_KEY',  'Jzo9Z?owQ_MJ!&oCe4@KhD?DOXp6cRUyBQCR5;^`/LXfb^fgr|gi5UF~/V^$!O3g');
define('LOGGED_IN_KEY',    'YcbwZv^B/h2wB#l#7b;(n^)KoJQ@Rn(Sja3IynA9%J06w!SgLR!zii0kWGRD/A8:');
define('NONCE_KEY',        'o/;"^L:ub2jQp&ZF!zN(E_i1i_nx!X~aEyVP(uuMJm^(smx#Z;"8yepV#tgp@2)g');
define('AUTH_SALT',        '~BeKnwr(kg+/wSi*_+PLrg?|w#8RBC4~!w:XcuqF&;U)82f&j(#b!1$_$$I;ewM2');
define('SECURE_AUTH_SALT', 'HY6/@x!_XpI:QyPHk%Op~UbozOrm&9wVxG#!QzY_t""s$7ft#tL*F:AH*WINH2@|');
define('LOGGED_IN_SALT',   'S(*09axOAlj)vU(V&eRU4q8Zk%pXEQH1t)L!SgspAzVR_)/8s"&&deQ/owZJB)tg');
define('NONCE_SALT',       'FfT39uZvDv9eR6P5hNqX0/?8eSrgciDlCAQv##oPf9wOVzJJKO&S&G5!)r1Z8Z3)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_7i7xra_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

