<?php
session_start();
if (empty($_SESSION['id'])) {
    header('location: ' . "/log.php");
}
include "../path.php"
?>
<?php

include "../app/controllers/topics.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/test.css">
    <link rel="stylesheet" href="https://m3.material.io/styles/icons/overview#257fe17b-d20f-488d-9842-2af613e3abcd">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Учебный Центр "УЗ-ПРО"</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/include/header.php"); ?>
    <main>

        <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="flex row1 centered breadcrumbs">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/index.php">
                    <span itemprop="name">Главная</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/labor-protection/labor-protection.php">
                    <span itemprop="name">Охрана труда</span>
                </a>
                <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/labor-protection/A-labor-protection/A-labor-protection.php">
                    <span itemprop="name">Охрана труда А. Общие вопросы ОТ и функционирования СУОТ</span>
                </a>
                <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Итоговое Тестирование</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>


    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-12">
                <h1 class="mb-2"></h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="b-quest-item js-question" id="quiz">
                                        <div class="__quest js-question-block" id="header">

                                            <div>
                                                Могут ли наказания, штрафы и запреты мотивировать сотрудников на безопасный труд? </div>

                                        </div>
                                        <div class="b-answer js-answer" id="list">
                                            <div class="container">
                                                <div class="row">
                                                    <h2>%title%</h2>
                                                </div>
                                                <h3>%message%</h3><br>
                                                <p>%result%</p>
                                            </div>
                                            <div class="__checkbox">
                                                <input type="radio" name="answer">
                                                <i class="--ico-check"></i>
                                            </div>
                                            <label class="__answer" for="">Не могут. Сотрудник не перестанет нарушать и продолжит работать «по принуждению» и «на автомате». Такой сотрудник уже не будет задумываться о последствиях</label>
                                        </div>

                                        <button class="btn btn-primary" id="submit">Ответить</button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include(ROOT_PATH . "/app/include/footer.php"); ?>
    <!-- // footer -->

    <script src="/jquery/jquery v3.6.4.min.js"></script>
    <script name="module" src="/labor-protection/A-labor-protection/questions.js"></script>
    <script name="module" src="../assets/js/main.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>