<?php //страница каталога
include "header.php";
include "db.php";
?>
<div class="main-banner">
  <div class="container">
   <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="header-text head-text-catalog">
          <h2>Вы находитесь на странице катлога</h2>
          <h6>Здесь вы можете просмотреть книги, которые мы рекомендуем преобрести</h6>
        </div>
      </div>
      <div class="col-lg-5">
          <div class="owl-banner owl-carousel catalog-carousel">
            <?php
              foreach ($covers as $key => $value) {
              print "<div class=\"item\">
              <img src=\"$covers[$key]\" alt=\"\">
              </div>";
              }
            ?>
          </div>
        </div>
    </div>
  </div>
</div>
<?php
include "catalog-actions.php";
?>
<?php
include "footer.php";
