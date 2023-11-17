<?php

$users = [ //массив зарегестрированных пользователей
    'Goose_bot' => ['pass' => 'headadminownpass', 'role' => 'admin'],
    'admin' => ['pass' => 'admin123', 'role' => 'admin'],
    'Igor' => ['pass' => 'user333', 'role' => 'user'],
    'Vasya' => ['pass' => 'qwerty44', 'role' => 'user'],
    'Alexeu' => ['pass' => 'admin2233', 'role' => 'admin'],
    'ProIgrok' => ['pass' => 'qwerty455', 'role' => 'user'],
    'Ktoto' => ['pass' => 'qwerty311', 'role' => 'admin'],
];

$books = [ //массив книг
    [
        "name" => "Гробницы Атуана",
        "author" => "Урсула Ле Гуин",
        "year" => 1970,
        "popularity" => 90,
        "genre" => "приключения",
        "price" => 200,
        "presence" => 20,
    ],
    [
        "name" => "Гарри Поттер и философский камень",
        "author" => "Джоан Роулинг",
        "year" => 1997,
        "popularity" => 80,
        "genre" => "фантастика",
        "price" => 100,
        "presence" => 12,
    ],
    [
        "name" => "Убийство в Восточном экспрессе",
        "author" => "Агата Кристи",
        "year" => 1934,
        "popularity" => 100,
        "genre" => "детектив",
        "price" => 500,
        "presence" => 0,
    ],
    [
        "name" => "Техану",
        "author" => "Урсула Ле Гуин",
        "year" => 1990,
        "popularity" => 92,
        "genre" => "роман",
        "price" => 300,
        "presence" => 26,
    ],
    [
        "name" => "Книжный вор",
        "author" => "Маркус Зусак",
        "year" => 1990,
        "popularity" => 92,
        "genre" => "роман",
        "price" => 350,
        "presence" => 16,
    ],
    [
        "name" => "Дюна",
        "author" => "Френк Герберт",
        "year" => 1965,
        "popularity" => 98,
        "genre" => "научная фантастика",
        "price" => 400,
        "presence" => 30,
    ],
    [
        "name" => "Мессия дюны",
        "author" => "Френк Герберт",
        "year" => 1969,
        "popularity" => 94,
        "genre" => "научная фантастика",
        "price" => 400,
        "presence" => 30,
    ],
    [
        "name" => "Четвертое крыло",
        "author" => "Ребекка Яррос",
        "year" => 2023,
        "popularity" => 100,
        "genre" => "роман",
        "price" => 500,
        "presence" => 60,
    ],
    [
        "name" => "Момо",
        "author" => "Михаэль Энде",
        "year" => 1973,
        "popularity" => 80,
        "genre" => "фэнтези",
        "price" => 242,
        "presence" => 80,
    ],
];

$covers = [ //массив обложек для книг(должны идти в том же порядке, что и книги)
    "./images/cover-images/atuan-cover.jpg",
    "./images/cover-images/philosopher-stone-cover.jpg",
    "./images/cover-images/murder-in-express-cover.jpg",
    "./images/cover-images/tehanu-cover.jpeg",
    "./images/cover-images/book-theif-cover.jpg",
    "./images/cover-images/dune-cover.jpg",
    "./images/cover-images/dune2-cover.jpg",
    "./images/cover-images/wind-cover.jpg",
    "./images/cover-images/momo-cover.jpg",
];
