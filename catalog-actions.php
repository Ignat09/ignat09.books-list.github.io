<?php //скрипты для каталога
print '<div class="currently-market">';
print '<div class="col-lg-3 col-sm-3 currently-market-item all msc">';
foreach ($books as $key => $val) {
    print '<div class="item">';
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
        <h5>Цена: $val2<br></h5>
      </span><br>";
        } elseif ($info == "presence") {
            print "<span class=\"presence\">
      <h5>На складе $val2 едениц<br></h5>
    </span><br>";
        }
    }
    print '</div>';
    print '</div>';
}
print '</div>';
print '</div>';

?>