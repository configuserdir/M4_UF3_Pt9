<?php
include("header.php");
include("connexio_woo.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $short_description = $_POST['short_description'];
    $price = $_POST['price'];

    $data = [
        'name' => $name,
        'sale_price' => $price,
        'short_description' => $short_description
    ];
    $response = $woocommerce->put('products/'.$id, $data);
    if (!function_exists('is_wp_error')) {
        $is_wp_error = function ($thing) {
            return false;
        };
    } else {
        $is_wp_error = 'is_wp_error';
    }

    if (!function_exists('get_error_message')) {
        $get_error_message = function ($thing) {
            return '';
        };
    } else {
        $get_error_message = 'get_error_message';
    }

    if ($is_wp_error($response)) {
        echo "Error al actualitzar el producte: " . $get_error_message($response);
    } else {
        echo "El producte s'ha actualizat correctament.";
    }

} else {
    echo "<strong>Error</strong>: El formulari no s'ha enviat correctament.";
}

include('footer.php');
?>
