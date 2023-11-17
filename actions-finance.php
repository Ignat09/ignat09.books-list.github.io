<?php
include "db.php";
function totalPriceAndPresences()
{ //функция для получения суммарных количества и стоимости всех книг на складе
    $prices = [];
    $presences = [];
    global $books;
    foreach ($books as $key => $book) {
        foreach ($book as $key2 => $val2) {
            if ($key2 == "price") {
                array_push($prices, $val2);
            } elseif ($key2 == "presence") {
                array_push($presences, $val2);
            }
        }
    }
    $sum_prices = array_sum($prices);
    $sum_presences = array_sum($presences);
    print "Cуммарное количство книг на складе: " . $sum_presences . "<br>";
    print "Суммарная стоимость всех книг на складе: " . ($sum_presences * $sum_prices) . "грн<br>";
    print "За последнее время было продано " . round($sum_presences / 2) . " книг(а)(и)" . " на сумму " . round(($sum_presences / 2) * 10)."грн<br>";
}
