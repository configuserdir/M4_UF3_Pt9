<?php

require __DIR__ .'/vendor/autoload.php';
use Automattic\WooCommerce\Client;

//claus API
$url_wordpress="http://192.168.56.11/wordpress";
$url_wordpress_rest = $url_wordpress.'/index.php';
$woocommerce = new Client(
    $url_wordpress_rest,
    'ck_e26d5f306fc98a343e2d95fa58895d1963559bde',
    'cs_1fa74e06a522ccb24fe5b7d5be78c8e9ef0b9244',
    [
        'wp_api' => true,
        'query_string_auth' => true,
        'timeout' => 400
    ]
);
    //print_r($woocommerce->get('products'));
?>