<?php
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
                <a itemprop="item" href="/industrial-safety/industrial-safety.php">
                    <span itemprop="name">Промышленная безопасность</span>
                </a>
                <meta itemprop="position" content="2">
            </li>

            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Б.9 «Требования промышленной безопасности к подъемным сооружениям»</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>

    <div class="container">
        <div class="industrial-title">
            <h2>Б.9 «Требования промышленной безопасности к <br> подъемным сооружениям»</h2>

        </div>
        <div class="industrial-link">
            <p><a href="/industrial-safety/B9-industrial-safety/B9-block-ticket.php" class="link-success">Б.9.3. Эксплуатация опасных производственных объектов, на которых используются подъемные<br> сооружения, предназначенные для подъема и перемещения грузов</a></p>
            <!--<p><a href="#" class="link-success">Б.1 «Требования промышленной безопасности в химической, нефтехимической и<br> нефтегазоперерабатывающей промышленности»</a></p>
            <p><a href="#" class="link-success">Б.2 «Требования промышленной безопасности в нефтяной и газовой промышленности»</a></p>
            <p><a href="#" class="link-success">Б.3 «Требования промышленной безопасности в металлургической промышленности»</a></p>
            <p><a href="#" class="link-success">А.4 «Требования промышленной безопасности в горной промышленности»</a></p>
            <p><a href="#" class="link-success">Б.5 «Требования промышленной безопасности в угольной промышленности»</a></p>
            <p><a href="#" class="link-success">Б.6 «Требования по маркшейдерскому обеспечению безопасного ведения горных работ»</a></p>
            <p><a href="#" class="link-success">Б.7 «Требования промышленной безопасности на объектах газораспределения и газопотребления»</a></p>
            <p><a href="#" class="link-success">Б.8 «Требования промышленной безопасности к оборудованию, работающему под избыточным давлением»</a></p>
            <p><a href="#" class="link-success">Б.9 «Требования промышленной безопасности к подъемным сооружениям»</a></p>
            <p><a href="#" class="link-success">Б.10 «Требования промышленной безопасности при транспортировании опасных веществ»</a></p>
            <p><a href="#" class="link-success">Б.11 «Требования промышленной безопасности к объектам хранения и переработки растительного сырья»</a></p>
            <p><a href="#" class="link-success">Б.12 «Требования промышленной безопасности, относящиеся к взрывным работам»</a></p>
            <p><a href="#" class="link-success">В «Требования безопасности гидротехнических сооружений»</a></p>
            <p><a href="#" class="link-success">Г.1 «Требования к порядку работы в электроустановках потребителей»</a></p>
            <p><a href="#" class="link-success">Г.2 «Требования к эксплуатации электрических станций и сетей»</a></p>-->



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
                        <p>Тестирование по Б.9 проходят руководители и работники предприятий, связанных со стационарными грузоподъемными механизмами, эскалаторами в метрополитенах, канатными дорогами, фуникулерами, указанные в ст. 14.1 Закона № 116-ФЗ «О промышленной безопасности» и п. 2 Положения об аттестации в ред. Постановления Правительства РФ № 1365.</p>

                        <p> Экзамен по Б.9 дополняется вопросами из А.1 «Основы промышленной безопасности» и других специализированных областей Б, в зависимости от специфики деятельности предприятия, где работает испытуемый.</p><br>
                        <p>Что надо знать про тестирование Б.9:</p>
                        <ul>
                            <li>направление содержит 10 областей аттестации;</li><br>
                            <li>работник проходит испытание не по всем из них, а только в объеме требований к должности;</li><br>
                            <li>ответственные за безопасную эксплуатацию подъемных сооружений обязательно проходят аттестацию областям, связанным с монтажом, наладкой, капремонтом, сервисным обслуживанием ПС, кроме эксплуатации;</li><br>
                            <li>разрешается совмещение в одной аттестации тестирования по нескольким областям, кроме Г (энергетической безопасности) — это отдельное тестирование.</li>

                        </ul><br>
                        <p>Наш портал предназначен для предаттестационной подготовки работников перед экзаменом в Ростехнадзоре или аттестационной комиссии на предприятии. Тесты с вариантами ответов соответствуют материалам на Едином портале тестирования РТН.</p><br>

                        <p>Каждый вопрос содержит комментарий с выдержкой из нормативного документа, чтобы пользователям было проще понять и запомнить правило. </p>

                        <p>Ростехнадзор периодически меняет неверные варианты ответов, но сам вопрос и правильный вариант всегда остаются прежними.</p>

                        <p>Практика показывает, что слушатели, которые освоили 100% вопросов из нашего теста, сдают экзамен в ЕПТ с первого раза.</p>

                        <p><a href="/img/Perechen-NPA-po-razdelu-_Trebovaniya-promyshlennoy-bezopasnosti-k-podemnym-sooruzheniyam_.xlsx" download class="link-success">Скачать Перечень нормативно-правовых актов для направления аттестации Б.9.</a></p>

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