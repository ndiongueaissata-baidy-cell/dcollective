<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dcollective' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '%9k_>F]@IJPUOJfW_@&AM|r/i2v$O/HjtRhT`e#iXw&Q}OGn$ceo+beKIhGeRQ1_' );
define( 'SECURE_AUTH_KEY',  'NV@$o5FDzO=F1SG(*xCb:XD@z$a5=jcE[6ft{qcH(_0yr/qP^JN,.iY;Py}$~(ac' );
define( 'LOGGED_IN_KEY',    ',shB2E|~`?LSl^1)LaAdYvsd/YxvsgDS,dp}GUrldsNUuf}t{vbj;UXY*W(h6Z)c' );
define( 'NONCE_KEY',        '_Q;BQYZBpqE|+Y1 VK?EqsGxuGn*Pd!9v-+_8US7MpdX,{,SB5,c@AYc pE<aB_P' );
define( 'AUTH_SALT',        'P|rEKwf(5=0^T)VI@pcX[G`/<3F[.7#N7vx8>ZE3.ml`1i3XH__ONf9l]dRmc>o_' );
define( 'SECURE_AUTH_SALT', 'sb:POVgkMdq$QYj(5]/W9Sjltjl>]^c}4x43}<9Q{*2r<9q:>Yg`GFnLA*1FDb=c' );
define( 'LOGGED_IN_SALT',   '&|ZpviJiwYRJg-c`w8aQUY?~GwUwJm)(N7fvzCm!DU.T5}JDPDUJK0GgJeW%dl!k' );
define( 'NONCE_SALT',       'NsDHPIxw]SOAeBe/ig*FPA+%QoFsU+W[A[/i,,*}e!dQdwk[[J<+1EDE{]JJs%Z9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
