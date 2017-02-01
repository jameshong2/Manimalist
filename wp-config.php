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
define('DB_NAME', 'manimalist');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=eM4n&nR+d-2!j-X2ae]$ESn1Fhg@wcl|1g_LFS,[; cx<l@hFEEFQV#SV-juo`V');
define('SECURE_AUTH_KEY',  '3HD>;-M^j(&(/nILe^IGtoC7by9&jd/I^2(=j(vm}tw#mmIBpUcRNG!5=N?i!5h ');
define('LOGGED_IN_KEY',    'AS,KmAgHNIe-fbI6aJObw{K v|q|4!|OLSkfeb@Rc^OqHQ;c8U]Bf(gNe9wkhBK#');
define('NONCE_KEY',        'Jf%6CII|P #EI^FsFC/:}liV`~g^c*1_H()b@m7OvpwgQVo]-SRH&- VUgBh;F$k');
define('AUTH_SALT',        'SD^L=o7j#L,B-X*hQ{KTV*PB!FO(jS?4L(z%f?;/oH~d90jrCZ;nI2V`e$<2;bj/');
define('SECURE_AUTH_SALT', ' Nznm}`;Nt)nz0IK>c+nP}<e[Db;*r|oA73T(:,j+)$ngxAC6L6r/#F=h~5(J}-_');
define('LOGGED_IN_SALT',   '2B~8U5QVsv:/b|LcyuEED<.[C>-!=Xk(m=1~N1m:hnFOwB2KlO[nigVS~]DsH;A=');
define('NONCE_SALT',       'Ow+&~f|KoM1eSa/jlb&jf!Ayou3+HWIXBz&kdq9c#Qn.R68/4*PM|xPr_2R7A#qj');

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
