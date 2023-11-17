<!--свалка для кода, который на данный момент не нужен, может когда-нибудь пригодится(лучше не запускать)-->

<!-- код для поисковой формы -->
<div class="col-md-6, aligh-self-center, container">
<?php $str_form_s = '<div class="search-form>"
<h3>Сортировать по:</h3>
<form action="index.php" method="post" name="sort_form">
    <select name="sort" id="sort" size="1">
        <option value="name">названию</option>
        <option value="year">площади</option>
        <option value="popularity">среднему населению</option>
    </select>
    <input type="submit" name="submit" value="OK">
</form></div>';
echo $str_form_s;

if (isset($_POST["sort"])) {
    $how_to_sort = $_POST["sort"];
    sorting($how_to_sort);

    $out = out_arr();

    if (count($out) > 0) {
        foreach ($out as $row) {
            echo $row;
        }
    } else {
        echo "Нет данных";
    }
}

$str_form_search = "
<div class=\"search-form-panel\">
<h3 class=\"txt-black\">Или найти по значению:</h3>
    <form name='searchForm' action='index.php' method='post' onSubmit='return overify_login(this);'>
        <input type='text' name='search' class='form-control'>
        <input type='submit' name='gosearch' value='Confirm' class='btn btn-secondary my-2'>
        <input type='reset' name='clear' value='Reset' class='btn btn-secondary my-2'>
    </form>
</div>";

echo $str_form_search;

if (isset($_POST['gosearch'])) {
    $data = test_input($_POST['search']);
    $out = out_search($data);

// вызов функции out_arr() из action.php для получения массива
    if (count($out) > 0) {
        foreach ($out as $row) { //вывод массива построчно
            echo $row;
        }
    } else // если нет данных
    {
        echo "Nothing found...";
    }
}
?></div>
<!--конец кода для поисковой формы -->


<!-- код страницы каталога -->
<?php
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
<!-- <div class="currently-market">
<div class="col-lg-12">
          <div class="row grid">
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Music Art Super Item</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>($8,240.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>4D 08H 15M 42S</strong><br><em>(July 24th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
</div> -->
              <?php
// function card_formater($book_name = "-", $author_name = "-", $year = "-", $firm_name = "-", )
// {
//     print "название: " . $book_name . " автор: " . $author_name . " издательство: " . $firm_name . " год написания: " . $year;
// };
// card_formater("Книжный вор", "Маркус Зусак", 2005);
print '<div class="currently-market">';
// print '<div class="col-lg-12">';
// print '<div class="row grid offset-lg-3">';
print '<div class="col-lg-3 col-sm-3 currently-market-item all msc">';
foreach ($books as $key => $val) {
    print '<div class="item">';
    // print '<div class="left-image">
    // <img src="./images/atuan-cover.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
    // </div>';
    print "<div class=\"left-image\">
    <img src=\"$covers[$key]\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
    </div>";
    print '<div class="right-content">';
    foreach ($val as $info => $val2) {
        if ($info == "name") {
            print "<span class=\"name\">
            <h4>Название: $val2</h4>
            </span>";
        } elseif ($info == "author") {
            print "<span class=\"author\">
            <h5>Автор: $val2<br></h5><br>
          </span>";
        } elseif ($info == "year") {
            print "<span class=\"year\">
            <h4>Год написания: $val2</h4>
          </span><br>";
        } elseif ($info == "popularity") {
            print "<span class=\"popularity\">
            <h5>Популярность: $val2</h5>
          </span><br>";
        } elseif ($info == "genre") {
            print "<span class=\"genre\">
          <h4>Жанр: $val2</h4>
        </span><br>";
        } elseif ($info == "price") {
            print "<span class=\"price\">
        <h5>Цена: $val2<br></h5><br>
      </span>";
        }
        // print $info. " : ". $val2;
    }
    // print_r($books[$key]);
    print '</div>';
    print '</div>';
}
print '</div>';
// print '</div>';
// print '</div>';
print '</div>';

?>
<!-- <img src="./images/atuan-cover.jpg" alt=""> -->
<?php
include "footer.php";
// конец кода страницы каталога