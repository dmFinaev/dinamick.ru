<?php
session_start();
if (empty($_SESSION['id'])) {
    header('location: ' . "/log.php");
}
include "../../path.php" ?>
<?php
include "../../app/controllers/topics.php";
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
                <span itemprop="name">Охрана труда А. Общие вопросы ОТ и функционирования СУОТ</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>
    <div class="container mb-xl-4">
        <div class="row mb-lg-5 mb-4">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8 mb-3">

                        <div class="industrial-title">
                            <h2>Учебный материал по курсу. Охрана труда А. Общие вопросы ОТ и функционирования СУОТ</h2>
                            <div class="container">
                                <div class="industrial-link">
                                    <p><a href="/img/охрана труда 46а общие вопросы/1. Основы охраны труда.pdf" class="link-success" target="_blank">1.Охрана труда А. Общие вопросы ОТ </a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/2. Новые обязанности работодателей по охране труда с марта 2022 года.pdf" class="link-success" target="_blank">2. Новые обязанности работодателей по охране труда с марта 2022 года</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/3. Управление внутренней мотивацией работников на безопасный труд и соблюдение требований охраны труда..pdf" class="link-success" target="_blank">3. Управление внутренней мотивацией работников на безопасный труд и соблюдение требований охраны труда</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/4. Специальная оценка условий труда.pdf" class="link-success" target="_blank">4. Специальная оценка условий труда</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/5. Какую информацию включить в инструкции по охране труда.pdf" class="link-success" target="_blank">5. Какую информацию включить в инструкции по охране труда</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/6. Разработка инструкций по охране труда..pdf" class="link-success" target="_blank">6. Разработка инструкций по охране труда</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/7. Расследование несчастных случаев на производстве новые правила с 1 сентября 2022 года.pdf" class="link-success" target="_blank">7. Расследование несчастных случаев на производстве новые правила с 1 сентября 2022 года</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/8. Как проводить стажировку на рабочем месте.pdf" class="link-success" target="_blank">8. Как проводить стажировку на рабочем месте</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/Категории работников по характеру их трудовых функций.pdf" class="link-success" target="_blank">Категории работников по характеру их трудовых функций</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/Лидерство в охране труда.pdf" class="link-success" target="_blank">Лидерство в охране труда</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/Методика проведения специальной оценки условий труда.pdf" class="link-success" target="_blank">Методика проведения специальной оценки условий труда</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/Об утверждении форм проверочных листов (списков контрольных вопросов) для осуществления федерального.pdf" class="link-success" target="_blank">Об утверждении форм проверочных листов (списков контрольных вопросов) для осуществления федерального</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/Оценка профессиональных рисков.pdf" class="link-success" target="_blank">Оценка профессиональных рисков</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/Положение о СУОТ ОБРАЗЕЦ 2022.pdf" class="link-success" target="_blank">Положение о СУОТ ОБРАЗЕЦ 2022</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/Расследование несчастных случаев.pdf" class="link-success" target="_blank">Расследование несчастных случаев</a></p>
                                    <p><a href="/img/охрана труда 46а общие вопросы/Цели и направления политики по охране труда в организации.pdf" class="link-success" target="_blank">Цели и направления политики по охране труда в организации</a></p>

                                </div>
                            </div>
                            <h2 class="nav-title">Проверка знаний по теме курса</h2>
                            <p>Выберите билет.</p>
                            <ul>
                                <li>Все вопросы разделены по билетам по порядку. </li>
                                <li>В каждом билете содержится 10 вопросов.</li>
                            </ul>
                            <p><strong>Ответьте на все вопросы </strong>билета и нажмите кнопку <strong>"Показать результаты".</strong> <br> После этого вы увидите правильный вариант.</p>
                            <div class="ticket-grid">
                                <a class="btn btn-primary" href="/labor-protection/A-labor-protection/A1-ticket.php">Билет№1</a>
                                <a class="btn btn-primary" href="/labor-protection/A-labor-protection/A2-ticket.php">Билет№2</a>
                                <a class="btn btn-primary" href="/labor-protection/A-labor-protection/A3-ticket.php">Билет№3</a>
                                <a class="btn btn-primary" href="/labor-protection/A-labor-protection/A4-ticket.php">Билет№4</a>
                                <a class="btn btn-primary" href="/labor-protection/A-labor-protection/A5-ticket.php">Билет№5</a>
                                <a class="btn btn-primary" href="/labor-protection/A-labor-protection/A6-ticket.php">Билет№6</a>
                                <a class="btn btn-primary" href="/labor-protection/A-labor-protection/A7-ticket.php">Билет№7</a>
                                <a class="btn btn-primary" href="/labor-protection/A-labor-protection/A8-ticket.php">Билет№8</a>
                            </div>
                            <div class="container mb-xl-4">

                                <div class="row mb-lg-5 mb-4">
                                    <h2 class="nav-title">Итоговое тестирования</h2>
                                    <p>Итоговое тестирование содержить 10 вопросов по всей теми курса. И окончательное подвидение итогов.</p>
                                    <ul class="nav nav-pills">

                                        <a class="btn btn-primary" href="/labor-protection/labor-protextion-testing.php">Начать</a>

                                    </ul>
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
    <script src="/assets/js/scripts.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>