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
define( 'DB_NAME', 'Louisa' );

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
define( 'AUTH_KEY',         'PF6#}J]@2v?nt0^^fFeyxu{B1z`})Nr6DXd$5*kE>(>>xXsJ:L&;h(#iW;#|jXkg' );
define( 'SECURE_AUTH_KEY',  'F>2v9r#)-aT~.~HNQ|x3Bq8%L2)|/Ow Tl:(KXbpfo|X3#z(~@Tk%Z!!p,?)Fz0A' );
define( 'LOGGED_IN_KEY',    'z~)w`_^_xNmat3j/bQpm2<tfyK~?qdPhio(H~da -nI(Y6])[{CrCS9p$APGO%z<' );
define( 'NONCE_KEY',        ']SJvu4$Enh1+>SWbn40I6tsI23:&~czg<MjV1HWG+K=LA9b!8m).X^USniIE[@ee' );
define( 'AUTH_SALT',        'Q?tz7psG4Y%Z`f`OJG)XO+f6jGj#?OD.?K&$K6_~7CUI|t@s1aXKM!|no;A7Wk)Z' );
define( 'SECURE_AUTH_SALT', 'EaWDbMq2K7_gb,|8&`G_^%+15cm.seR +5Iy,Qhs[h!^zuSSB9UBIXSn?.?BWL4W' );
define( 'LOGGED_IN_SALT',   '*:e&F,r=l:k/LGot?;c(S+VZUsfo`Di:dFT+:Z92H66qYn=_UiS`b<))Swh@9N[{' );
define( 'NONCE_SALT',       'cna>$!(TiolVM%.^!ba1Jfxc.6Z2uj LUqI]K;X~he~`GR1,?Fq]U>&6;ol=}jr)' );

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
$table_prefix = 'Louisa_';

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
