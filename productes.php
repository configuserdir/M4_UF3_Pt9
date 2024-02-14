<!-- ======= Services Section ======= -->

<?php

var_dump($woocommerce->get('products/categories'));

try {
    $categories = $woocommerce->get('products/categories');
    // Procesar las categorías aquí
} catch (Automattic\WooCommerce\HttpClient\HttpClientException $e) {
    echo 'Error en la llamada a la API: ' . $e->getMessage();
}


require __DIR__ . '/vendor/autoload.php'; // Asegúrate de que estás cargando el autoload.php de WooCommerce

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://192.168.56.11/wordpress/',
    'ck_e26d5f306fc98a343e2d95fa58895d1963559bde',
    'cs_1fa74e06a522ccb24fe5b7d5be78c8e9ef0b9244',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'verify_ssl' => false, // Solo desactiva esto en desarrollo
    ]
);

echo '<section id="services" class="services">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">';
echo '<div class="icon-box">';
echo '<div class="icon"><i class="bx bxl-dribbble"></i></div>';
echo '<ul>'; // Agrega una etiqueta ul para las categorías
foreach ($woocommerce->get('products/categories') as $cat) {
    if ($cat->id != "15") {
        echo '<li data-filter=".filter-' . $cat->name . '">' . $cat->name . '</li>';
    }
}
echo '</ul>'; // Cierra la etiqueta ul después del bucle foreach
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
?>




       <!--  <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Teclat Clàssic</a></h4>
              <p>Teclat d'oficina clàssic.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Teclat amb Colorins</a></h4>
              <p>Teclat on hi ha colorins aleatoris en les tecles.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Monitor Xiaomi</a></h4>
              <p>Monitor d'Ordinador Xiaomi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Monitor Samsung</a></h4>
              <p>Dels millors monitors de samsung que hi ha al mercat</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Ratolí Clàssic Clàssic</a></h4>
              <p>Un dels ratolins més econòmics i clàssics en les àrees de treball</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Ratolí Nilox Clàssic</a></h4>
              <p>Un bon ratolí ergonòmic de la marca Nilox.</p>
            </div>
          </div>
 -->
        <!-- </div>



      </div>
    </section> --><!-- End Services Section -->