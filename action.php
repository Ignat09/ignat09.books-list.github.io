<?php
include "db.php";
function check_autorize($log, $pass)
{
    $users = get_users();
    return array_key_exists($log, $users) && $pass == $users[$log]['pass'];
}

function check_admin($log, $pass)
{
    $users = get_users();
    return check_autorize($log, $pass) && $users[$log]['role'] == 'admin';
}

function check_role($log, $pass)
{
    $users = get_users();
    return check_autorize($log, $pass) ? $users[$log]['role'] : false;
}

function name($a, $b)
{ // функция, определяющая способ сортировки по названию книги
    if ($a["name"] < $b["name"]) {
        return -1;
    } elseif ($a["name"] == $b["name"]) {
        return 0;
    } else {
        return 1;
    }

}

function author($a, $b)
{ // функция, определяющая способ сортировки по имени автора
    if ($a["author"] < $b["author"]) {
        return -1;
    } elseif ($a["author"] == $b["author"]) {
        return 0;
    } else {
        return 1;
    }

}

function genre($a, $b)
{ // функция, определяющая способ сортировки по жанру книги
    if ($a["genre"] < $b["genre"]) {
        return -1;
    } elseif ($a["genre"] == $b["genre"]) {
        return 0;
    } else {
        return 1;
    }

}

function year($a, $b)
{ // функция, определяющая способ сортировки по году выпуска книги
    if ($a["year"] < $b["year"]) {
        return -1;
    } elseif ($a["year"] == $b["year"]) {
        return 0;
    } else {
        return 1;
    }

}

function price($a, $b)
{ // функция, определяющая способ сортировки по цене издания
    if ($a["price"] < $b["price"]) {
        return -1;
    } elseif ($a["price"] == $b["price"]) {
        return 0;
    } else {
        return 1;
    }

}

function popularity($a, $b)
{ // функция, определяющая способ сортировки по популярности книги
    if ($a["popularity"] > $b["popularity"]) {
        return -1;
    } elseif ($a["popularity"] == $b["popularity"]) {
        return 0;
    } else {
        return 1;
    }

}

function sorting($how_to_sort)
{ //функция-сортировщик
    global $books;
    uasort($books, $how_to_sort);
}

function out_arr()
{ //функция вывода данных в виде таблицы
    global $books;
    $arr_out = array();
    $arr_out[] = "<table class='out, table table-hover text-white-50 col-lg-6 col-sm-3' border='1'>";
    $arr_out[] = "<tr><td>№</td><td>Название</td><td>Автор</td><td>Год написания</td><td>Популярность</td><td>Жанр</td><td>Цена</td><td>Наличие</td></tr>";
    foreach ($books as $book) {
        static $i = 1;
        $str = "<tr>";
        $str .= "<td>" . $i . "</td>";
        foreach ($book as $key => $value) {
            if (!is_array($value)) {
                if ($key == "presence") {
                    if ($value > 0) {
                        $str .= "<td>Есть на складе</td>";
                    } elseif ($value <= 0) {
                        $str .= "<td>Отсутствует на складе</td>";
                    }
                } else {
                    $str .= "<td>$value</td>";
                }

            } else {
                foreach ($value as $k => $v) {
                    $str .= "<td>$v</td>";
                }

            }

        }
        // $str .= "<td>" . $book['popularity'] . "</td>";
        $str .= "</tr>";
        $arr_out[] = $str;
        $i++;
    }
    $arr_out[] = "</table>";
    return $arr_out;
}

function out_arr_search(array $arr_index = null)
{ //вторая функция для вывода искомых пользователем данных
    global $books;
    $arr_out = array();
    $arr_out[] = "<table class='out, table table-hover text-white-50' border='1'>";
    $arr_out[] = "<tr><td>№</td><td>Название</td><td>Автор</td><td>Год написания</td><td>Популярность</td><td>Жанр</td><td>Цена</td><td>Наличие</td></tr>";
    foreach ($books as $index => $book) {
        if ($arr_index != null && in_array($index, $arr_index)) {
            static $i = 1;
            $str = "<tr>" . "<td>" . $i . "</td>";
            foreach ($book as $key => $value) {
                if (!is_array($value)) {
                    $str .= "<td>$value</td>";
                } else {
                    foreach ($value as $k => $v) {
                        $str .= "<td>$v</td>";
                    }
                }
            }
            $arr_out[] = $str;
            $i++;
        }
    } if ($arr_index == null) {
        $arr_out = [];
        $arr_out[] = "<h5>". "Ничего не найдено". "</h5>";
    } elseif ($arr_index != null) {
    $arr_out[] = "</table>";
    }
    return $arr_out;
}

function out_search($data)
{
    global $books;
    $arr_index = array();
    foreach ($books as $book_number => $book) {
        foreach ($book as $key => $value) {
            if (!is_array($value)) {
                if (stristr($value, $data)) {
                    $arr_index[] = $book_number;
                }
            } else {
                foreach ($value as $k => $v) {
                    if (stristr($v, $data) || strstr($k, $data)) {
                        $arr_index[] = $book_number;
                    }
                }
            }
        }
    }
    return out_arr_search(array_unique($arr_index));
}

function get_users()
{
    global $users;
    return $users;
}

function test_input($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}
