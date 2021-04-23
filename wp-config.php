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
define( 'DB_NAME', 'samplesite' );

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


/** memoery limit */
define( 'WP_MEMORY_LIMIT', '1000M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Me8IkZV,nO^H7kreil.Fa/9DomVzisQ<|CnorJUz,t6*@hh!;X%G3#MyK?(nT)cN' );
define( 'SECURE_AUTH_KEY',  'p5iO0#@Il~CmVpE4ec%?$/a,+kx$aGDktA]d~X?.CTof@`rlg/xns^T{mz0E0i19' );
define( 'LOGGED_IN_KEY',    'Z6JAA>3t?y0<-i$(!X^L,Q4(qPpet8$qb@][s2_8u&3Qr)t$}m,B$P[NhdKx~VwR' );
define( 'NONCE_KEY',        'n+`LrhMjibLi+P,lTK;xL?;/ym<ELt@9XsZ<HRmxnP^Qw/vj1}oZk8zs=*+3g[Qu' );
define( 'AUTH_SALT',        'Sw7<2jMV:v[%u3lE*6@Q19+qL6%]}S94X#,7PA=v+6&jH4yn~{1~T)Za,&=J,u)o' );
define( 'SECURE_AUTH_SALT', 'T|H_WnRtDatOg$K~ZLjm_SgDVkJeKr(5`n{C2^fc%Vhf8H50> XV$p*?M#r5 ^%U' );
define( 'LOGGED_IN_SALT',   'Kv.K68kn6r0?aIG@*X$~x:bK4h2B YP_zGzlsLpF`|66W0EhN;OS&,zK1z%K|6t=' );
define( 'NONCE_SALT',       'j!BWzx&JC,&faqpi>Gh[IE@&+v5cr#z:9j}$* m2uF[3g+kzg+(n0kMKU&. {+Y*' );

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
