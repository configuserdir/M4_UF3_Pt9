<?php
include("header.php");
include("connexio_woo.php");

$id=$_POST['id'];
$name=$_POST['name'];
$short_description=$_POST['short_description'];

$data = [
    'name' => $name,
    'price' => $price,
    'short_description' => $short_description
    
];

($woocommerce->put('products/'.$id, $data));

function is_wp_error($thing) {}

if (is_wp_error($response)) {
    echo "Error en actualizar el producte: " . $response->get_error_message();
} else {
    echo "El producte s'ha actualitzat correctament.";
}    


include('footer.php');
?>