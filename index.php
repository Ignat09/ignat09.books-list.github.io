<?php
include "header.php"
?>
<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h2>Добро пожаловать</h2>
            <p>На нашем сайте вы сможете просмотреть информацию о очень интересных книгах, которые мы рекомендуем вам к покупке и прочтению</p>
            <div class="buttons">
              <div class="main-button">
            <!-- <form method="post">
              <button name="seeFormSearch" type="submit" value="seeFormSearch" class='btn btn-secondary my-but'>Показазить форму поиска</button>
            </form> -->
          </div>
              <div class="main-button">
            <form method="post">
              <button name="seeFormReg" type="submit" value="seeFormReg" class='btn btn-secondary my-but'>Показазить форму регистрации</button>
            </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src="./images/img-for-slideshow1.jpg" alt="">
            </div>
            <div class="item">
              <img src="./images/img-for-slideshow2.jpg" alt="">
            </div>
            <div class="item">
              <img src="./images/img-for-slideshow3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container search">
    <!-- <div class="col-lg-5 offset-lg-4 offset-sm-3"> -->
    <div class="container">
      <div class="row">
        <h3>Поиск по сайту</h3>
      </div>
  </div>
      <?php
include_once 'search.php';
// if (isset($_POST['seeFormSearch'])) {
//     include_once 'search.php';
// }
// if (isset($_POST['seeFormReg'])) {
//     include_once 'search.php';
// }
// function printSearchForm()
// {
//     include "search.php";
// }
// if (isset($_POST['seeformsearch'])) {
//     include "search.php";
// }
?>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
<?php
include "footer.php";?>