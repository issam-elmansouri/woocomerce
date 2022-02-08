<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;
$url = 'http://localhost:81/wordpress/wordpress-5.8.2/wordpress/';                                      //$_POST['url'];
$ck = 'ck_4a4a65a3de92bddafc995ea59c6d399ccd7c4116';                                                   //$_POST['ck'];
$cs = 'cs_6f630f132169d7d0214fdf5256713a3f682bea0b';                                                  //$_POST['cs'];
$woocommerce = new Client($url,$ck,$cs,
    [
        'wp_api' => true,
        'version' => 'wc/v2',
        'query_string_auth' => true
    ]
);