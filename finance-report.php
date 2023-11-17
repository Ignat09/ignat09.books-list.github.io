<?php //страница финансового отчета для админов
include "header.php";
include "actions-finance.php";
?>
<div class="main-banner">
  <div class="container">
   <div class="row">
      <div class="col-lg-9 align-self-center">
        <div class="header-text head-text-catalog">
          <h2>Вы находитесь на странице финансового отчета</h2>
          <h6>Здесь вы можете увидеть сколько книг на данный момент есть на нашем складе, их суммарную стоимость, а также сколько было продано книг за послденее время</h6>
        <h6>
        <?php
          totalPriceAndPresences()
        ?>
          </h6>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php"
?>