<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Tots</li>
          <li data-filter=".filter-teclats">Teclats</li>
          <li data-filter=".filter-monitors">Monitors</li>
          <li data-filter=".filter-ratolins">Ratolins</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">
      <?php
      /* $portfolio_items = [
        ["filter-teclat", "Teclat Clàssic", "Teclat", "tecladosincolorado.jpeg"],
        ["filter-monitor", "Monitor Samsung", "Monitor", "monitorsamsun.jpeg"],
        ["filter-teclat", "Teclat NewSkill", "Teclat", "tecladocolorado.jpg"],
        ["filter-ratoli", "Ratolí Clàssic Clàssic", "Ratolí", "ratoli2.jpg"],
        ["filter-monitor", "Monitor Xiaomi", "Monitor", "xiaomi-mi-23-8-desktop-monitor-1c.jpg"],
        ["filter-ratoli", "Ratolí Nilox Clàssic", "Ratolí", "ratoli.jpg"],
      ];
 */
      foreach ($woocommerce->get('products') as $item) {
        echo '<div class="col-lg-4 col-md-6 portfolio-item  filter-' . $item->categories[0]->slug. '">';
        echo '<div class="portfolio-wrap" style="width:25vw;">';
        //echo '<div class="portfolio-wrap" style="background: url('.$item->images[0]->src .') center/cover no-repeat;width:30vw;">';
        echo '<img src="' . $item->images[0]->src . '" class="img-fluid" alt="">';
        echo '<div class="portfolio-info">';
        echo '<h4>' . $item->name . '</h4>';
        echo '<p>' . $item->short_description . '</p>';
        echo '<div class="portfolio-links">';
        //echo '<a href="assets/img/portfolio/' . $item[2] . '/' . $item[3] . '" data-gallery="portfolioGallery" class="portfolio-lightbox" title="' . $item[1] . '"><i class="bx bx-plus"></i></a>';
        echo '<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
      ?>
    </div>

  </div>
</section>
<!-- End Portfolio Section -->
