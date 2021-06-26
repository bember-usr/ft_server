<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'serverdb' );

/** MySQL database username */
define( 'DB_USER', 'bember' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bember42' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '!3oUxjW-MYSOC-.}Vn?H?&X_n>b_?:x)LQtE74(1B-i:q`:;.^Llw.RzmYwgEpZJ');
define('SECURE_AUTH_KEY',  ']3YNS5YPyNK(K)wSmMh|#+mtf9$Dy$G9|u+8]aQ?nhj!!C7:>)pt],$fqfFd>(|[');
define('LOGGED_IN_KEY',    ',->|+g|d7rs!MtkJ?Syogsgh?mn?FGRns[$HRnmWJn-;eA.S:RW4R|eFi6T4rmdS');
define('NONCE_KEY',        'T5iw`~ot?~s{^wwJ++cxXv+L>e_B6<Ypxoa+CU|iUL:~[/$#c`h9B:n~f/;Jz /Q');
define('AUTH_SALT',        'dv=/,rf(a+U{M+X/P)%M_0QT2rK;QD]6Qp)m*a1nB+kBQ/SZ;LguNyl#}^+]SZM|');
define('SECURE_AUTH_SALT', '(nby5=,y4IG|~Qhjf&OK?H|fJ/H>AIJVV-?6x~rY..m>dN$X+}Y6-AX>KD,-Ca^d');
define('LOGGED_IN_SALT',   'K*K}@Y0Aqr/TN#3`u0l78*?Aq::zfK6%Vm!u<r8Y8<fC]R-8KtSh<Y4lvm.!__y~');
define('NONCE_SALT',       'ERN4d-#x&4Nw/<fbv7F1>x #o0GG+L,=qM|.SmZ%O4z746BK-%nY$d_y+|f<gp2j');

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