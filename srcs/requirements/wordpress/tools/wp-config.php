<?php
/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 * @package WordPress
 */
define( 'DB_NAME', 'wordpressdb' );
define( 'DB_USER', 'fuserwyn' );
define( 'DB_PASSWORD', '1234' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('AUTH_KEY',         '8,ITvuG_nx>&DP=tu9kh^X#1i0OR>2^oQ)=8d~|-D:-#S]|nPM=hTxPP1mI+:N-_');
define('SECURE_AUTH_KEY',  '~knG74qfd%iMFht 3z~@6=(iDN]Ygp1{2z|%)nh|m59tt+(+bmFud+DVzP ]0-h9');
define('LOGGED_IN_KEY',    'rH Z5xS%y=Sl-@j:$#6J^%~USJ)|&nTMY-w4uobAbg~Qed&zrUB+l[WdSJgQ 3x;');
define('NONCE_KEY',        '@_L-U+K+-=cJmgT8(_y6k6X|^:j]jzThYjw)78j)0{KzNQrf2!1wo?^uPek+-_#6');
define('AUTH_SALT',        'pNLEv6OHYQHBpDY~AhI<k2XN&N=2veFsc{t+.CYLiI-uw+ByD?2n]=fJvUtT<yN;');
define('SECURE_AUTH_SALT', '[Gdjz{aU4.5m1C{ q{AGQ_2Ic<~E4Kkq;?((:m^_3#T];!7%-N_u 7|j]YIx+)8G');
define('LOGGED_IN_SALT',   'k|(Z|m7ayU x+S]<y{qa;Di8Z+`s<)g)K|+:+i;a2nP6`Y/#kz]i|]NAC_.{dd//');
define('NONCE_SALT',       'moRv[_3|T1u+Io[#x$ONk>9W J2p6n<.b{`wLh?2*}6UGAC<s`+bM?E|9&W7iMvB');
$table_prefix = 'wp_';

/**
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

require_once ABSPATH . 'wp-settings.php';
