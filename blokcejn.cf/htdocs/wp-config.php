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
define( 'DB_NAME', 'b24_24073117_bitcoin' );

/** MySQL database username */
define( 'DB_USER', 'b24_24073117' );

/** MySQL database password */
define( 'DB_PASSWORD', '12348765' );

/** MySQL hostname */
define( 'DB_HOST', 'sql112.byethost24.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't :_vB0nn&m)x+tx[r{Fsz#PysnD5aM5)qi5^{8f)xvS6}=/IeUy0c.JJAJ@_*xS' );
define( 'SECURE_AUTH_KEY',  '(MD*;:yghq+@epW3J]nIV.-Ex@w<jAP4L9K?+EUf#l:I6b}/iEB#-2rgBX[t~3S,' );
define( 'LOGGED_IN_KEY',    'hAIM(3;un^x;o>6FsC+VFeH e[u`s7%v^!3QqsSc:w4I`!n{]O lGI7l*xCM1S12' );
define( 'NONCE_KEY',        'wq]rD}-.SbqqR$fy56cZ4LI}$)$0jn]jh</vnd;1p~IS+C.9EL~^dX:Mi)|N~WZf' );
define( 'AUTH_SALT',        '~o,t{|bs64)8jwPwrHQ-Q+(J<Lx??>Frab-W&/yYeJ8xDBIc4Za]Ot6H*,6gzkz+' );
define( 'SECURE_AUTH_SALT', 'JUQo1U[pL+Tn+u,%gy,+Ez0<Vv:<uk(!IM0[$o`Qx)Yo H{E})az?mB:PRd8k,jq' );
define( 'LOGGED_IN_SALT',   '?v_|X@ppe~y@3?v3{2|TA<G;O-iD|1I3`1Gt4Y+L5{72JO qzp%$s)q/5#P_+113' );
define( 'NONCE_SALT',       '/,;<g(:QMO)&d1ow9@bI_mfYys/uyv@@ kVU`]dQ5RhDdX /~SN4}kH1:ib&w~|]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
