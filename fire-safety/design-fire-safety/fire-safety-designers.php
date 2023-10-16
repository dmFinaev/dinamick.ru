<?php
include "../../path.php" ?>

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
                <a itemprop="item" href="/fire-safety/fire-safety.php">
                    <span itemprop="name">Пожарная безопасность</span>
                </a>
                <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Проектирование в сфере пожарной безопасности</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>

    <div class="container">
        <div class="industrial-title">
            <h2>Проектирование в сфере пожарной безопасности</h2>
            <!--<p>Выберите группу вопросов для подготовки к тестированию:</p>-->
        </div>
        <div class="industrial-link">
            <p><a href="/fire-safety/design-fire-safety/F-fire-safety-designers.php" class="link-success">Пожарная безопасность для проектировщиков</a></p>

        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h3>Информация</h3>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>К проектированию средств обеспечения пожарной безопасности зданий и сооружений, введенных в эксплуатацию, допускаются только аттестованные лица. Такое требование установлено ст. 24 Федерального закона от 21.12.94 № 69-ФЗ «О пожарной безопасности».</p>

                        <p>Занятие проектированием без квалификационного аттестата влечет штраф по ст. 14.4 КоАП:</p><br>
                        <ul>
                            <li>на граждан — от 1 000 до 2 000 рублей;</li><br>
                            <li>на ИП — от 10 000 до 20 000 рублей;</li><br>
                            <li>на компанию — от 20 000 до 30 000 рублей.</li>


                        </ul><br>
                        <p>Порядок аттестации проектировщиков средств пожарной безопасности установлен в постановлении Правительства от 30.11.2021 № 2106. Соискатели сдают квалификационный экзамен в МЧС России в форме тестирования по билетам. Перечень вопросов для него утвержден распоряжением МЧС России от 27.12.2022 № 1443.</p><br>
                        <h3>Описание тестов</h3>
                        <p>Вопросы на нашем портале составлены для кандидатов на аттестацию на право заниматься проектированием средств обеспечения пожарной безопасности зданий и сооружений, введенных в эксплуатацию. Они соответствуют официально утвержденным тестам по распоряжению № 1443. Наши вопросы подходят для самоподготовки к экзамену для проектировщиков ПБ.</p>

                        <p>Обратите внимание, что в распоряжении МЧС России № 1443 нет вариантов ответов. Мы не гарантируем, что точно такие же формулировки попадутся Вам на экзамене в МЧС России.</p>

                        <p>Одно мы можем обещать точно — сами вопросы и правильные ответы совпадают с тем, что Вас ожидает на аттестации.</p>
                        <h3>Полезная информация</h3>
                        <p>Для допуска к аттестации по постановлению № 2106 кандидат должен представить документы, подтверждающие соответствие квалификационным требованиям к проектировщикам: высшее или среднее профессиональное образование по специальности «Пожарная безопасность» либо диплом о профпереподготовке по типовой программе ДПО при непрофильном образовании.</p>
                        <p>Предлагаем пройти обучение в нашем учебном центре по программе ДПО для проектировщиков в соответствии с приказом МЧС России от 15.11.2022 № 1156. Вы получите диплом о профессиональной переподготовке, который нужен для допуска к аттестации.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- footer -->
    <?php include(ROOT_PATH . "/app/include/footer.php"); ?>
    <!-- // footer -->

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>