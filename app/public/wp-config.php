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
if (file_exists(dirname(__FILE__) . '/local.php')) {

	//local database settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {

	//live database settings
    define( 'DB_NAME', 'mohame36_collegeData' );
	define( 'DB_USER', 'mohame36_wp76' );
	define( 'DB_PASSWORD', '0169725257mnb' );
	define( 'DB_HOST', 'localhost' );
}



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dxX-%,2^+s|Wqu`VEBYh.(&,`~+U+@)Uj$N}]2M<BRaSC`;|u=|:sw)1Pwd-[HJq');
define('SECURE_AUTH_KEY',  'q-NL/p4XsW@-GV3bj2Qi_dCIL[:~.Fm(:zuIg+eM:(DzdxtOu^?I-LdMH5Sc-X99');
define('LOGGED_IN_KEY',    'HAn{/cjPB-]cu{!D208,@%#{ncEnLBsRp/!D4}1.*4Y~:B*q17pK;qO-U,&g6+n<');
define('NONCE_KEY',        '7Dc1w7q=ZrNkDwpQc|pf]IYK4fSG)zlz+9_O(wgVXqWQ&S_vo>tWIl}4<Aanl08-');
define('AUTH_SALT',        '--]CZLB8S8d-k7zsHF|fk(cvc,SR-J6|Y[-p/&TgeJvySmw@,S<H8+]^#hR6T/U,');
define('SECURE_AUTH_SALT', 'wKPqbe_yz8SXUU;#aldWHWVB/F}yPo]Xyzo.^}><y=X8*aT];my+}OIz~HXq3g*L');
define('LOGGED_IN_SALT',   '*w?E-K%p*TvQ}VN[{Z59~zP2FDQ}^NwNw[kUtbYTAANUOFP(|$T>rd/@rP$.Flm>');
define('NONCE_SALT',       'tH#S@W8_T`y+@93MLGpg.&ltgjN@QfRJ3@!fn:^5}V$5Z;ndlPd4Ub<@+3p%NK41');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
