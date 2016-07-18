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
define('DB_NAME', 'mind_icon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define( 'WPCF7_AUTOP', false );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@OS,ZW5Ul)EG-m%L~4!P!wB}Bk(cBx0^U=|J%20dHFc4hMyh%6hd,lDq|.1OIQ%2');
define('SECURE_AUTH_KEY',  'Fw*br}7d{r*_2wCQSnlo2jkta;}L@_G1UcFph3i)&3Y)-5b$)!]OwtrToO2M]E9h');
define('LOGGED_IN_KEY',    'WE;C/lh6Ybwp.E9n{|YaHY?d*cId?pHfHj8Xg,8ykE8npr|X7CSb,br[[n6J`+g}');
define('NONCE_KEY',        'cyKhdDsfR LCm*M)ThmP}*y=QC[*dIPb$`|yB7L+A;GFx^X33b018>-(3:h+dgXi');
define('AUTH_SALT',        'vu19xh!BH~PCPa.n}oib#`|eeI0pO[6Kc%:/HTxKPHa<Mr1#,^Ai}H3Z`#%7j5Oy');
define('SECURE_AUTH_SALT', 'k{p!F{S^=Ri:X~HM?9|;H1,EIg:_9>5o?s`-leG.E]d.PQ%iX~I |zb6{g<@IBfW');
define('LOGGED_IN_SALT',   'NK-_i5;B1wBY;^`[(<l2E^jC&E0*?I J>4n!u_`wfI(XA.60ECr#XFRA2DGz?< k');
define('NONCE_SALT',       'H<5T?2F:``]WJ!6[FbJHZ1hwZOKg060Vai!P-7&88+/^,|2_FFL WaQHxFiO+utr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mi_';

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
