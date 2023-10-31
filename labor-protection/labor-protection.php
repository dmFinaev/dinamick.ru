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
    <div class="container">
        <img src="/img/bezopasn.jpg" class="img-fluid" alt="...">
    </div>
    <main>

        <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="flex row1 centered breadcrumbs">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/index.php">
                    <span itemprop="name">Главная</span>
                </a>
                <meta itemprop="position" content="1">
            </li>

            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Охрана труда</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </main>


    <div class="container">
        <div class="industrial-title">
            <h2>Охрана труда</h2>
            <p>Выберите курс для подготовки к тестированию:</p>
        </div>
        <div class="industrial-link">
            <p><a href="/labor-protection/A-labor-protection/A-labor-protection.php" class="d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2">Охрана труда А. Общие вопросы ОТ и Проектрования СУОТ</a></p>
            <p><a href="/labor-protection/B-labor-protection/B-labor-protection.php" class="d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2">Охрана труда Б. Безопасные методы и приемы выполнения работ</a></p>
            <p><a href="/labor-protection/S-labor-protection/S-labor-protection.php" class="d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2">Охрана труда СИЗ. Обучение по использованию средств индивидуальной защиты</a></p>

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
                        <p>Работодатель обязан организовать подготовку и проверку знаний по охране труда для всех работников, кроме дистанционщиков, которым не выданы технические средства для трудовой деятельности. Это требование ст. 214 ТК РФ.</p>

                        <p> Порядок обучения охране труда регламентируется Правилами по Постановлению Правительства РФ от 24.12.2021 № 2464. По ним есть два основных вида подготовки, которыми должны быть охвачены все работники:</p><br>
                        <ol>
                            <li>Инструктажи по охране труда — вводный, на рабочем месте и целевой.</li><br>
                            <li>Программы обучения. Всего их пять. Это обучение применению СИЗ; оказание первой помощи пострадавшим; обучение по общим вопросам охраны труда; безопасные методы и приемы выполнения работ; безопасные методы выполнения работ повышенной опасности.</li><br>
                        </ol><br>
                        <p>По каждой программе обучения в Правилах № 2464 определен контингент работников. Например, специалист по охране труда обязательно проходит подготовку по использованию СИЗ, оказанию первой помощи, общим вопросам ОТ и функционирования СУОТ, а также по безопасным методам и приемам выполнения работ.</p><br>
                        <p>Инструктажи и обучение по охране труда заканчиваются обязательной проверкой знаний. Форму и порядок регистрации ее результатов устанавливает работодатель с учетом требований Правил № 2464.</p>
                        <h3>Описание тестов</h3>
                        <p>Тесты на нашем портале предназначены, в первую очередь, для самоподготовки работника перед экзаменом в комиссии на предприятии. Это не значит, что соискатель при проверке знаний получит точно такие же вопросы, как у нас на сайте. Каждая образовательная организация, проводящая обучение, разрабатывает собственные программы.</p>

                        <p>Но общие требования охраны труда, а также вопросы безопасности при влиянии различных вредных и опасных факторов известны. И по ним составлены вопросы в наших тестах. Поэтому кандидат, который потренируется на нашем портале, не растеряется и на экзамене — основы он будет знать.</p>

                        <p>Второе направление, где могут пригодиться наши тесты — <strong>подготовка экзаменационных билетов для проверки знаний на предприятии.</strong>Также их могут использовать лица, проводящие инструктажи по охране труда, для составления программ инструктажей.</p>
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