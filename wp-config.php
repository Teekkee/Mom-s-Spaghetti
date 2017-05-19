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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kappa');

/** MySQL hostname */
define('DB_HOST', '78.155.206.196:3306');

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
define('AUTH_KEY',         '9zv;<[tMz.<~%C5 <~/,Kj[V/pEUJN!BzoCiaP5Ra>2p#~d#[Nj_*LsM]{Vsi@}m');
define('SECURE_AUTH_KEY',  'E4Cqib2#E>$_ t]9ccg1lvr:p&Ypop,5ZmAw&A)TO!{.:Jizh>xphv#rp,5* |E~');
define('LOGGED_IN_KEY',    '#X,4b,J8$C8XmX.UDFwQ-n)FY8I&LY|CeF3|cF`Sa x|kC,(&,)7Wt+jz:ExX+A9');
define('NONCE_KEY',        'FrR0wfH;)^iPxD($*ABtgs3O1EjHIZc),SU+bO^&-(z$`-&Ukw=<l5;Hm{ZH3i%Z');
define('AUTH_SALT',        'q0(3Y(,p&@<yk*J)%JV-Fo~X0[GD6kCdt=Xb2Msph,#CN!|J|xH}9qgr 1d8c9@n');
define('SECURE_AUTH_SALT', 'TP1}26_4,LaA[:]XB`HdmfgN3wQJcagGEUY3|eBr3#fARe.riL[Ghske@[xbym|;');
define('LOGGED_IN_SALT',   '{j#[1U_zAg{`(4LE;B/<&{.GC7p1egg8V[ew!zY=R06V=WKOx%qPO_yb2 5e~,={');
define('NONCE_SALT',       'q3<`?(]yUs$$/!w(YBIan<v?eQi<`szYrGe|T<T[<-l0UOBc=Z^VteD/HA=uoQ/N');

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
