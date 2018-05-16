<?php

define('WP_ENV', 'development');
define('ABSPATH', __DIR__ . '/wp/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-composer/public');
// define('WP_SITEURL', 'http://localhost/wp-composer/public/wp');

define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/public/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-composer/public/wp-content');

define('WP_CACHE', false);
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_ALLOW_REPAIR', false);

define('DB_NAME', 'wp_composer');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix  = 'wp_';

// generate with https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'j) $.;^XGk6piExj)uwK71dH*NlhcjaiZN;9ykJW(&fL>I/FGG|BjP(Uu#b)+DqF');
define('SECURE_AUTH_KEY',  'I0#>[y%d*_NSAHExFe/bt|`ol!eU06:sT9YyhxYw5$F/B@-sOgeZ+&1IR)rI0%#z');
define('LOGGED_IN_KEY',    'El?X9!6cUF62!pe_TN+cp-2>0d J}EQ*7i]}c}@C|8B=sm@j&Sk/;}P%x8{Or$G3');
define('NONCE_KEY',        'qPFk/ab(WDGNNj%]AUYyM/g}[Bxb9lALRb#b<wqowjvxG;0hW*oKlO@>g2@-OAvu');
define('AUTH_SALT',        'k%y*[L~(^[[fZ=-o<#E7VB3##?wZn>?Pf,E!qgrF0W6kKSqkIQ:ROJLHv!j%|JXw');
define('SECURE_AUTH_SALT', 'ogVaH}Lx}_l(UJcK/zDp?f^mc_#swuo<lrrCq0]{25Tp!U[/P9f_D3%DX;/?0.Ne');
define('LOGGED_IN_SALT',   'O,7Jxx7MH>M1a&+}>[7xy4N$5.FMLVt*@]`eG_`wc;M?f%({cO/Io{vCwd<ofSS.');
define('NONCE_SALT',       'Pn^K%7cQ(Kf;W`qX~SwUx{-|U2h<5;w*#9jH.t;~g:0DnvvhIJ0c;WZ5?ZMzqeAY');

require_once('vendor/autoload.php');
require_once(ABSPATH . 'wp-settings.php');