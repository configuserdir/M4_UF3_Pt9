<?php

require __DIR__ .'/vendor/autoload.php';
use Automattic\WooCommerce\Client;

//claus API
$url_wordpress="http://192.168.56.11/wordpress";
$url_wordpress_rest = $url_wordpress.'/index.php';
$woocommerce = new Client(
    $url_wordpress_rest,
    'ck_1688f9fed4c5bc46386bac80d5ec945e34cb7831',
    'cs_0c55394e3e8be22ee1fd2e94d1e71218e41c28fd',
    [
        'wp_api' => true,
        'query_string_auth' => true,
        'timeout' => 400
    ]
);
//print_r($woocommerce->get('products'));
?>