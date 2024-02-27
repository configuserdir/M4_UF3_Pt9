<?php include('header.php') ?>
<?php include('connexio_woo.php') ?>
<?php

if (isset($products) && (is_array($products) || is_object($products))) {
    foreach ($products as $product) {
        print_r($woocommerce->delete('products/id', ['force' => true]));

        echo '<div class="col-md-2 form-group"><input class="form-control" name="name" value="' . $item->name . '" style="width:100px;text-align:left;" type="text"></div>';
        echo '<div class="col-md-4 form-group"><input class="form-control" name="short_description" value="' . strip_tags($item->short_description) . '" type="text"></div>';
        echo '<div class="col-md-1 form-group"><input class="form-control" name="price" value="' . strip_tags($item->price) . '" type="text"></div>';
        echo '<div class="col-md-1 form-group"><button class="btn center" formaction="servei_esborrar.php" type="submit"><i class="bi bi-arrow-clockwise"></i></button></div>';
        echo '</div></form>';
    }
}
?>
<?php include('footer.php') ?>