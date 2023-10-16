<?php
session_start();
if (empty($_SESSION['id'])) {
    header('location: ' . "/log.php");
}
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
                <span itemprop="name">Промышленная безопасность</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>

    <div class="container">
        <div class="industrial-title">
            <h2 class="industrial__title">Промышленная безопасность</h2>
            <p class="industrial__text">Выберите область надзора по промышленной безопасности:</p>
        </div>
        <div class="industrial-link">
            <p><a href="/industrial-safety/industrial-safety-tickets.php" class="link-success">А.1 «Основы промышленной безопасности»</a></p>
            <p><a href="/industrial-safety/B1-industrial-safety/B1-industrial-safety.php" class="link-success">Б.1 «Требования промышленной безопасности в химической, нефтехимической и<br> нефтегазоперерабатывающей промышленности»</a></p>
            <!--<p><a href="#" class="link-success">Б.2 «Требования промышленной безопасности в нефтяной и газовой промышленности»</a></p>
            <p><a href="#" class="link-success">Б.3 «Требования промышленной безопасности в металлургической промышленности»</a></p>
            <p><a href="#" class="link-success">А.4 «Требования промышленной безопасности в горной промышленности»</a></p>
            <p><a href="#" class="link-success">Б.5 «Требования промышленной безопасности в угольной промышленности»</a></p>
            <p><a href="#" class="link-success">Б.6 «Требования по маркшейдерскому обеспечению безопасного ведения горных работ»</a></p>
            <p><a href="#" class="link-success">Б.7 «Требования промышленной безопасности на объектах газораспределения и газопотребления»</a></p>
            <p><a href="#" class="link-success">Б.8 «Требования промышленной безопасности к оборудованию, работающему под избыточным давлением»</a></p>-->
            <p><a href="/industrial-safety/B9-industrial-safety/B9-industrial-safety.php" class="link-success">Б.9 «Требования промышленной безопасности к подъемным сооружениям»</a></p>
            <!--<p><a href="#" class="link-success">Б.10 «Требования промышленной безопасности при транспортировании опасных веществ»</a></p>
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
                        <p class="accordion__text">Работать на опасных производственных объектах (ОПО) может только квалифицированный персонал, то есть прошедший обучение и проверку знаний в области промышленной безопасности. По Федеральному закону от 21.07.97 № 116-ФЗ работники обязаны не реже раза в пять лет проходить повышение квалификации и аттестацию в этой сфере. Категории персонала для подготовки определены в Постановлении Правительства РФ от 25.10.2019 № 1365.</p>

                        <p> Группы работников для аттестации в области промышленной безопасности, энергетической безопасности и безопасности гидротехнических сооружений:</p><br>
                        <ul class="accordion__text">

                            <li>руководители организаций и ИП, чья деятельность связана с жизненными циклами опасного производственного объекта и техническими устройствами для ОПО;</li><br>
                            <li>инженерно-технические работники (ИТР), чья профессиональная деятельность связана с проектированием, строительством, эксплуатацией, реконструкцией, капитальным ремонтом, техническим перевооружением, консервацией и ликвидацией опасного производственного объекта, а также изготовлением, монтажом, наладкой, обслуживанием и ремонтом технических устройств, применяемых на опасном производственном объекте;</li><br>
                            <li>должностные лица, ответственные за производственный контроль на ОПО, эксплуатационный контроль на ГТС, авторский надзор, строительный контроль;</li><br>
                            <li>члены аттестационных комиссий организаций;</li><br>
                            <li>руководители (заместители руководителей) субъектов электроэнергетики и потребителей электроэнергии, чья деятельность входит в сферу энергетического надзора.</li>

                        </ul><br>
                        <p>Каждый соискатель проходит проверку знаний по тем областям, с которыми связана его профессиональная деятельность. Полный перечень областей аттестации утвержден Приказом Ростехнадзора от 04.09.2020 № 334 (действует с 15 февраля 2021 года).</p><br>
                        <h3 class="accordion__title">Описание тестов</h3>
                        <p>Наш портал предназначен для предаттестационной подготовки перед проверкой знаний в ЕПТ — Едином портале тестирования Ростехнадзора. Мы создали симулятор сдачи реального ведомственного экзамена.</p>

                        <p>Вопросы тестирования соответствуют официально утвержденным вопросам для ЕПТ Ростехнадзора. Они сгруппированы по областям надзора в приказе № 334. </p>
                        <h3>Подготовка к аттестации в Ростехнадзоре</h3>
                        <p>Вы будете сдавать экзамен в территориальной комиссии Ростехнадзора. Это будет компьютерное тестирование через ЕПТ. Оно ограничено по времени. За 30 минут Вам нужно ответить на 20 вопросов. Мы смоделировали на сайте такую же ситуацию при платным доступе к тестам. Также вы можете бесплатно потренироваться в прохождении тестов без ограничений по времени по билетам в 10 вопросов.</p>
                        <p>К вопросам приведены варианты ответов, из которых нужно выбрать правильные. Система подсчитывает результаты и дает итоговую оценку. Тестирование, как и в ЕПТ, считается пройденным при 90 % правильных ответов.</p>
                        <p>Мы не можем гарантировать, что все неправильные варианты совпадают с версиями на Едином портале. Ростехнадзор периодически вносит изменения в программу. Но одно мы можем обещать: у нас вы найдете правильные ответы и комментарии к ним — выдержки из нормативных документов, где записано конкретное правило или требование безопасности.</p>
                        <p>Мы составили свою пошаговую программу предаттестационной подготовки. Наш опыт показываю, что те, кто следовал рекомендациям, сдают экзамен в Ростехнадзоре с первого раза.</p>


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