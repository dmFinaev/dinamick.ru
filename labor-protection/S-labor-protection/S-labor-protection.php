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
                <span itemprop="name">Охрана труда СИЗ. Обучение по использованию средств индивидуальной защиты</span>
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
                            <h2>Учебный материал по курсу. <br> Охрана труда СИЗ. Обучение по использованию средств индивидуальной защиты</h2>
                            <div class="container">
                                <div class="industrial-link">
                                    <p><a href="/img/Средства индивидуальной защиты/1 Опасные и вредные произв.факторы.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">1 Опасные и вредные произв.факторы</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/2 Общие понятия обеспечения безопасности.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">2 Общие понятия обеспечения безопасности</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/3 Основные принципы безопасности труда.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">3 Основные принципы безопасности труда</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/4 Порядок обеспечения работников средствами индивидуальной защиты.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">4 Порядок обеспечения работников средствами индивидуальной защиты</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/5 Требования к средствам индивидуальной защиты и правила выдачи.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">5 Требования к средствам индивидуальной защиты и правила выдачи</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/6 Дежурные СИЗ.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">6 Дежурные СИЗ.</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/7 Инструкция по применению средств индивидуальной защиты (СИЗ).pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">7 Инструкция по применению средств индивидуальной защиты (СИЗ)</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/8 Дезактивация СИЗ.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">8 Дезактивация СИЗ</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/9 Классификация средств индивидуальной защиты.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">9 Классификация средств индивидуальной защиты</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/10 Средства индивидуальной защиты человека от химических и биологических негативных факторов.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">10 Средства индивидуальной защиты человека от химических и биологических негативных факторов</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/11 Средства индивидуальной защиты.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">11 Средства индивидуальной защиты</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/12 Респиратор.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">12 Респиратор</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/13 СИЗ для глаз и лица.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">13 СИЗ для глаз и лица</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/14 Средства индивидуальной защиты органов слуха.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">14 Средства индивидуальной защиты органов слуха</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/15 СИЗ при работе на высоте.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">15 СИЗ при работе на высоте</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/16 Средства Индивидуальной Защиты от падения с высоты.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">16 Средства Индивидуальной Защиты от падения с высоты</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/17 Спецодежда.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">17 Спецодежда</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/Постановление от 24.12.2021 г. 2464.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">Постановление от 24.12.2021 г. 2464</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/Презентация.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">Презентация</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/Средства защиты работающих.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">Средства защиты работающих</a></p>
                                    <p><a href="/img/Средства индивидуальной защиты/Типовые нормы бесплатной выдачи работникам смывающих и (или) обезвреживающих средств.pdf" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">Типовые нормы бесплатной выдачи работникам смывающих и (или) обезвреживающих средств</a></p>
                                    <div class="video">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3N-AolCYmNQ?si=TXAmFk2pTxnJqST8&amp;start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
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
                                <a class="btn btn-primary" href="/labor-protection/S-labor-protection/S1-ticket.php">Билет№1</a>
                                <a class="btn btn-primary" href="/labor-protection/S-labor-protection/S2-ticket.php">Билет№2</a>
                                <a class="btn btn-primary" href="/labor-protection/S-labor-protection/S3-ticket.php">Билет№3</a>
                                <a class="btn btn-primary" href="/labor-protection/S-labor-protection/S4-ticket.php">Билет№4</a>
                                <a class="btn btn-primary" href="/labor-protection/S-labor-protection/S5-ticket.php">Билет№5</a>

                            </div>

                            <div class="container mb-xl-4">

                                <div class="row mb-lg-5 mb-4">
                                    <h2 class="nav-title">Итоговое тестирования</h2>
                                    <p>Итоговое тестирование содержить 10 вопросов по всей теми курса. И окончательное подвидение итогов.</p>
                                    <ul class="nav nav-pills">

                                        <a class="btn btn-primary" href="/labor-protection/S-labor-protection/S-labor-protection-testing.php">Начать</a>

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