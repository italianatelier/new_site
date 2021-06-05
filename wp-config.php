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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'italian_atelier' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ',Ncee{Ty{[[g>Tp2NG;}]JYH7/q05!qFFN:b4}87)j0t=+}$B%~a_S&4hQtEnV4w' );
define( 'SECURE_AUTH_KEY',  'TT(`Ew1BI05A~;Px@BI59P4TF=_WapUDj lFe|Yl-T,3kiSF>$,#AlD~aS7`6.R ' );
define( 'LOGGED_IN_KEY',    'gxl>/H+vXQ43n9lk!|z~J|?roN&Mml,bPmEr ho-keRQ2i]34R/@B8.L0<#>d/#B' );
define( 'NONCE_KEY',        '*OYO:KnU3YK*=?Daaw.`-EBOC)8pL>8t9b0bK^FMt,G>JV_D7L*fh7$^kPw}a+>;' );
define( 'AUTH_SALT',        '2gOm44Nr~X*_:uxd6O,N/6Rkj%h`x}HFiU]a2)G$kJH %.@%SDce7/R]ZtPsD/g*' );
define( 'SECURE_AUTH_SALT', 'QzX&j^00Je67GM |Qakk:`l4X4dz>DRwX33%ceSy]ZVL-V#V5t` iMEJVky+@l^+' );
define( 'LOGGED_IN_SALT',   't1ApnJloT2_20wuBw;W0`#JedqCw+?N6OpV<Fo3tf8`;[LZs]Piv9wUfN_;q3Yhl' );
define( 'NONCE_SALT',       '8/2SWPC6okwuKzA$Qkb5-bF#-+.N*r-7hq^20,mNs|{3?PC$/9#ACH.D{%8|BJNo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ia_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
