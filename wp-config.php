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
define('DB_NAME', 'acg');

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
define('AUTH_KEY',         'qtt~jD%= RdbPb!wCtxSsV8@O9o3m/heIEh>,px~Cf D*B|6~:~1Dl}rp:`Npc18');
define('SECURE_AUTH_KEY',  'c:!Zz.CF1DiVPI/ld},H[a]^HJ(w_~.q6~_9CEM|=o<OW6K+^(Pk:h~-35!(EC@V');
define('LOGGED_IN_KEY',    'F2YDZ~m|)m9W+e2C7a<n$5=)c0u#xUL&ZQx48)V%x0.P%nvQt#Z3mY~k.lm6{OYh');
define('NONCE_KEY',        'SGKiQ(HU#CT1Amrevm.4P3(%5?gTUWai!-[z~!zPr{8q,8~tz$CsqTVre`m6J+VJ');
define('AUTH_SALT',        '7}$Y@&6vE46d!*XYaDpsOP]Qv<~LQ` Zx(_ODwr% ^D)lft%LW~UimJ_7,3A[!}O');
define('SECURE_AUTH_SALT', '8[5b,H6c?#*[kh=4g(S6MLTGp?I^4%XdsunS{rglQ3_;9Q@Gggh=Go^6o[F&fr _');
define('LOGGED_IN_SALT',   'p>Z~31DG]}#,]X T.6QV,YZG?L`VB{po#[Tkk^v~bRZujHmbqG4(-+fR+39DA`/!');
define('NONCE_SALT',       '328(R<A$Ei9h=QPmpu*b.6Ckt6Ak~}W1I9|BWea%qmp`pXSIzxRBg%K>)?m=%?W3');

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
// define('WP_DEBUG', false);
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
