<?php
$str_form_search = "
<div class=\"col-md-6, aligh-self-center, container\">
<div class=\"search-form-panel\">
<h3 class=\"form-search-h\">Сортировать по:</h3>
<form action=\"index.php\" method=\"post\" name=\"sort_form\">
    <select class=\"form-select\" name=\"sort\" id=\"sort\" size=\"1\">
        <option value=\"name\">названию</option>
        <option value=\"author\">автору</option>
        <option value=\"year\">году написания</option>
        <option value=\"popularity\">популярности</option>
        <option value=\"genre\">жанру</option>
        <option value=\"price\">цене</option>
    </select>
    <input type=\"submit\" name=\"submit\" value=\"OK\" class='btn btn-secondary my-but'>
</form>
<h3 class=\"form-search-h\">Или найти по значению:</h3>
    <form name='searchForm' action='index.php' method='post' onSubmit='return overify_login(this);'>
        <input type='text' name='search' class='form-control'> <br>
        <input type='submit' name='gosearch' value='Искать' class='btn btn-secondary my-but'>
    </form>
</div>
</div>";

echo $str_form_search;

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
