<?php include('header.php') ?>
<?php include('connexio_woo.php') ?>
<?php
print_r($woocommerce->delete('products/id', ['force' => true]));


?>
<?php include('footer.php') ?>