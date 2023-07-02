<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xngaafotjccomu' );

/** MySQL database username */
define( 'DB_USER', 'xngaafotjccomu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Comunicatura9298' );

/** MySQL hostname */
define( 'DB_HOST', 'xngaafotjccomu.mysql.db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','https://www.comunicatura.com/ohhmyhair');
define('WP_SITEURL','https://www.comunicatura.com/ohhmyhair');

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
define( 'AUTH_KEY',         'cUQPYb8MZ!88Qxbux/`uO*Aw5c12H%;f9IQGl~<=5HA9S0,_=l^Z)0Z@Y&D0;~{@' );
define( 'SECURE_AUTH_KEY',  '1;dSh!+[Yz? aHe}htb49jn:4)=p-NFEG/dL*(r!{8&=3_MQGT$@o-[98`5l(-v2' );
define( 'LOGGED_IN_KEY',    'z6_2>S~sjw M*iufvu@#],xv{0apgAs<O6WiPR51qFjlCb5NV?P*)_N-3Dq|lNB5' );
define( 'NONCE_KEY',        'G!0wUYDTN9PXFz=$/(>6R(rG?rXw=yBY_X,0#O*S4tXu/}b_e-ly_I9F_L8@>Upo' );
define( 'AUTH_SALT',        '`t],l8gLy<hX~@#>G b9ld}l^t.THiU,20MFvuWZBj(D_<`Bz=b@iNl/3R9qRuTj' );
define( 'SECURE_AUTH_SALT', 'XcFfI6X(j0P>r;X }kSv]r%,26E7 &U7*xqc!@3-fTf|gU]8GX!5~3/X2FXw,Sq ' );
define( 'LOGGED_IN_SALT',   'qf,Rw[x9B6=+WvA!R}D>kck1a)2i@nY,AZ`+mhKR,zW%o:u#Zv-qzm|?<i<42et[' );
define( 'NONCE_SALT',       ':G{v,t&{2QjeK+|A&g3#W{vsefJ:<mGsn*Tc>2&yJ0GD]m_pwylx[WRjV%n$gF*$' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'WP_MEMORY_LIMIT', '96M' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
