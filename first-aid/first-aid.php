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
                <span itemprop="name">Первая помощь</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </main>

    <div class="container">
        <div class="industrial-title">
            <h2>Первая помощь</h2>
            <p>Выберите группу вопросов для подготовки к тестированию:</p>
        </div>
        <div class="industrial-link">
            <p><a href="/first-aid/A-first-aid/A-first-aid.php" class="link-success">Оказание первой помощи пострадавшим</a></p>
            <p><a href="/first-aid/B-first-aid/B-first-aid.php" class="link-success">Тестовые вопросы к модулю «Оказание первой помощи»</a></p>

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
                        <p>Первая помощь пострадавшим — комплекс мероприятий для спасения и сохранения жизни человека до приезда медиков. Это не медицинская и не доврачебная помощь, поэтому по закону 323-ФЗ «Об основах охраны здоровья…» ее могут оказывать обычные граждане. При условии, что они прошли соответствующее обучение.</p>

                        <p> Работодатель организует подготовку по оказанию первой помощи пострадавшим следующим категориям работников:</p><br>
                        <ul>
                            <li>лицам, ответственным за проведение инструктажа по охране труда, включающего вопросы оказания первой помощи пострадавшим;</li><br>
                            <li>рабочим;</li><br>
                            <li>лицам, обязанным оказывать первую помощь пострадавшим в соответствии с требованиями нормативных правовых актов, например, спасателям;</li>
                            <li>штатным водителям автотранспортных средств;</li>
                            <li>работникам, к компетенциям которых нормативными правовыми актами по охране труда предъявляются требования уметь оказывать первую помощь пострадавшим, например, электротехническому персоналу;</li>
                            <li>председателю (заместителям председателя) и членам комиссий по проверке знания требований охраны труда по вопросам оказания первой помощи пострадавшим;</li>
                            <li>лицам, проводящим обучение по оказанию ППП;</li>
                            <li>специалистам по охране труда;</li>
                            <li>членам комитетов (комиссий) по охране труда;</li>
                            <li>иным работникам по решению работодателя.</li>

                        </ul><br>
                        <p>Контингент для обучения определен в п. 33 Правил обучения охране труда от 24.12.2021 № 2464.</p><br>

                        <h3>Описание тестов</h3>
                        <p>Наш портал предназначен, в первую очередь, <strong>для самоподготовки перед проверкой знаний.</strong> По обучению оказания первой помощи мы собрали основные вопросы, которые могут попасться соискателю на экзамене. Но это не значит, что они будут точно такие же — «слово в слово». Каждая образовательная организация разрабатывает свои программы подготовки.</p>

                        <p>В одном вы можете быть точно уверены — у нас содержатся правильные ответы. И когда вам встретится похожий вопрос, вы не потеряетесь.</p>

                        <p>Также вопросы тестирования можно использовать для подготовки экзаменационных билетов на предприятии или для разработки программ инструктажей, включающих вопросы оказания первой помощи пострадавшим.</p>
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