<?php
include "../path.php" ?>
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
    <link rel="stylesheet" href="../css/test.css">
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
                <span itemprop="name">Пожарная безопасность для руководителей и специалистов</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>

    <div class="container">
        <div class="industrial-title">
            <h2>Пожарная безопасность для руководителей и специалистов</h2>
            <!--<p>Выберите группу вопросов для подготовки к тестированию:</p>-->
        </div>
        <div class="industrial-link">
            <p><a href="/fire-safety/specialist-fire-prevention.php" class="link-success">Специалист по противопожарной профилактике</a></p>
            <p><a href="/fire-safety/B-specialist-fire-prevention.php" class="link-success">Пожарная безопасность для руководителей и ответственных лиц</a></p>
            <p><a href="/fire-safety/C-specialist-fire-prevention.php" class="link-success">Пожарная безопасность для руководителей и ответственных лиц эксплуатирующих и управляющих<br> организаций</a></p>
            <p><a href="/fire-safety/D-specialist-fire-prevention.php" class="link-success">Пожарная безопасность для главных специалистов технического и производственного профиля</a></p>
            <p><a href="/fire-safety/E-specialist-fire-prevention.php" class="link-success">Пожарная безопасность для лиц, ответственных за проведение противопожарного инструктажа</a></p>
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
                        <p>Все работники и служащие должны проходить подготовку в области пожарной безопасности (ПБ) по требованиям ст. 25 Федерального закона от 21.12.94 № 69-ФЗ. С 1 марта 2022 года действует Порядок обучения мерам ПБ по Приказу МЧС России от 18.11.2021 № 806.</p>

                        <p> В соответствии с Порядком № 806 персонал делится на две категории:</p><br>
                        <ol>
                            <li>Квалифицированный, то есть прошедший обучение по дополнительным профессиональным программам с выдачей удостоверения о повышении квалификации. Это ответственные за обеспечение пожарной безопасности на объектах защиты; лица, проводящие противопожарный инструктаж; специалисты по пожарной профилактике и другие категории работников, указанные в п. 1 приложения 3 к Приказу № 806. </li><br>
                            <li>Инструктируемый. Сюда входят работники и служащие, которым достаточно противопожарного инструктажа.</li><br>


                        </ol><br>
                        <p>Все без исключения сотрудники проходят проверку знаний в области ПБ. Она обязательна как после обучения по программам ДПО, так и после противопожарного инструктажа. Руководитель организации определяет форму и порядок проверки знаний в локальном акте — порядке обучения мерам ПБ.</p><br>
                        <h3>Описание тестов</h3>
                        <p>Вопросы на нашем портале составлены для лиц, проходящих повышение квалификации в области ПБ:</p>
                        <ul>
                            <li>руководителей организаций и лиц, ответственных за обеспечение ПБ на объектах защиты;</li>
                            <li>специалистов по пожарной профилактике;</li>
                            <li>лиц, ответственных за противопожарный инструктаж.</li>
                            <p>Работодатели могут также использовать наши тесты для подготовки программ инструктажей и проверки знаний инструктируемого персонала в соответствии с Приказом № 806. Ресурс доступен для неограниченного числа пользователей.</p>

                            <p>Наш портал может быть полезен при проведении проверки знаний после внеплановых инструктажей в соответствии с п. 17 Порядка обучения № 806. Напомним, что процедура обязательна для сотрудников, например, при перерывах в работе более 60 дней или при изменении в нормативном регулировании ПБ.</p>
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