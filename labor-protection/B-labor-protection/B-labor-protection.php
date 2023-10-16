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
                <a itemprop="item" href="/testing.php">
                    <span itemprop="name">Тестирование</span>
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
                <span itemprop="name">Охрана труда Б. Безопасные методы и приемы выполнения работ</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>
    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8 mb-3">

                        <div class="industrial-title">
                            <h2>Учебный материал по курсу. <br> Охрана труда Б. Безопасные методы и приемы выполнения работ</h2>
                            <div class="container">
                                <div class="industrial-link">
                                    <p><a href="/img/Охрана труда 46 б безопасные методы/Лекция 1 Классификация опасностей.pdf" class="link-success" target="_blank">Лекция 1 Классификация опасностей</a></p>
                                    <p><a href="/img/Охрана труда 46 б безопасные методы/Лекция 2 Оценка профессионального риска.pdf" class="link-success" target="_blank">Лекция 2 Оценка профессионального риска</a></p>
                                    <p><a href="/img/Охрана труда 46 б безопасные методы/Лекция 3 Опасные и вредные произв.факторы.pdf" class="link-success" target="_blank">Лекция 3 Опасные и вредные произв.факторы</a></p>
                                    <p><a href="/img/Охрана труда 46 б безопасные методы/Лекция 4 Защита от воздействия вредных и опасных производственных факторов.pdf" class="link-success" target="_blank">Лекция 4 Защита от воздействия вредных и опасных производственных факторов</a></p>
                                    <p><a href="/img/Охрана труда 46 б безопасные методы/Лекция 5 Защита от факторов производственной среды.pdf" class="link-success" target="_blank">Лекция 5 Защита от факторов производственной среды</a></p>
                                    <p><a href="/img/Охрана труда 46 б безопасные методы/Лекция 6 Специальная оценка условий труда на рабочих местах.pdf" class="link-success" target="_blank">Лекция 6 Специальная оценка условий труда на рабочих местах</a></p>
                                    <p><a href="/img/Охрана труда 46 б безопасные методы/Лекция 7 Средства индивидуальной защиты.pdf" class="link-success" target="_blank">Лекция 7 Средства индивидуальной защиты</a></p>
                                    <p><a href="/img/Охрана труда 46 б безопасные методы/8. Как проводить стажировку на рабочем месте (2).pdf" class="link-success" target="_blank">8. Как проводить стажировку на рабочем месте</a></p>
                                    <p><a href="/img/Охрана труда 46 б безопасные методы/Как работодателю выявлять опасности с 2022 года Рекомендации Минтруда.pdf" class="link-success" target="_blank">Как работодателю выявлять опасности с 2022 года Рекомендации Минтруда</a></p>


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
                                <a class="btn btn-primary" href="/labor-protection/B-labor-protection/B1-ticket.php">Билет№1</a>
                                <a class="btn btn-primary" href="/labor-protection/B-labor-protection/B2-ticket.php">Билет№2</a>

                            </div>
                            <div class="container mb-xl-4">

                                <div class="row mb-lg-5 mb-4">
                                    <h2 class="nav-title">Итоговое тестирования</h2>
                                    <p>Итоговое тестирование содержить 10 вопросов по всей теми курса. И окончательное подвидение итогов.</p>
                                    <ul class="nav nav-pills">

                                        <a class="btn btn-primary" href="/labor-protection/B-labor-protection/B-labor-protection-testing.php">Начать</a>

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