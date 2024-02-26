<?php
include("header.php");
include("connexio_woo.php");


foreach ($woocommerce->get('products') as $item) {
    echo '<form method="POST"><div class="row" style="margin-bottom:4px;">';
    echo '<div class="col-md-1 form-group"><input class="form-control" id="id" name="id" value="' . $item->id . '" readonly type="text"></div>';

    // Verifica si la propiedad src_image existe en el objeto $item
    $src_image = property_exists($item, 'src_image') ? $item->src_image : '';

    echo '<div class="col-md-1 form-group"><input class="form-control img-responsive" name="src_image" src="' . $src_image . '" style="" type="text"></div>';
    echo '<div class="col-md-2 form-group"><input class="form-control" name="name" value="' . $item->name . '" style="width:100px;text-align:left;" type="text"></div>';
    echo '<div class="col-md-4 form-group"><input class="form-control" name="short_description" value="' . strip_tags($item->short_description) . '" type="text"></div>';
    echo '<div class="col-md-4 form-group"><input class="form-control" name="price" value="' . strip_tags($item->price) . '" type="text"></div>';
    echo '<div class="col-md-1 form-group"><button class="btn center" formaction="servei_actualitzar_id.php" type="submit"><i class="bi bi-arrow-clockwise"></i></button></div>';
    echo '</div></form>';
}

include('footer.php');
?>
