<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>The book shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>

<body>
    <div class="bg-blur">
<?php
include "db.php";
include "action.php";
$autorized = false;
$user_form = '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" name="autoForm" class="reg-form col-lg-3 col-sm-2">
    <input type="text" name="login" placeholder="Введите логин" class="just-input">
    <input type="password" name="pass" placeholder="Введите пароль" class="just-input">
    <input type="submit" value="Войти в аккаунт" name="go" class="btn btn-secondary my-but-reg">
    </form>';
?>
    <!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <div class="container col-lg-2 col-sm-2">
                        <a href="index.php" class="logo">
                            <img src="./images/logo2.png" alt="">
                        </a>
                </div>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Form register Start ***** -->
                    <div class="container col-lg-2 col-sm-2 offset-lg-1 offset-sm-1">
                        <?php
if (isset($_POST['seeFormReg'])) {
    echo $user_form;
}
?>
                    </div>
        <div class="container col-lg-3 col-sm-3  offset-lg-1 offset-sm-1">
            <h6 class="txt-black reg-status-txt">
                <?php
$message = "";
if (isset($_POST["go"])) {
    $login = $_POST["login"];
    $password = $_POST["pass"];
    $current_role = check_role($login, $password);
    if (check_autorize($login, $password)) {
        $autorized = true;
        $message = "Вы вошли как $login под правами $current_role <a href=\"./finance-report.php\">Отчет</a><br>";
    } else {
        $message = "Неверно введен логин или пароль";
    }
}
echo $message;
?>
            </h6>
        </div>
                        <!-- ***** Form register End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="catalog.php">Catalog</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
    </div>
</header>
    <!-- ***** Header Area End ***** -->
