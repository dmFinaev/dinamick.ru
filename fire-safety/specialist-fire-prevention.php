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
                <a itemprop="item" href="/fire-safety/fire-safety-for-managers.php">
                    <span itemprop="name">Пожарная безопасность для руководителей и специалистов</span>
                </a>
                <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Специалист по противопожарной профилактике</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="4">
            </li>
        </ol>
    </main>
    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8 mb-3">

                        <div class="industrial-title">
                            <h2>Специалист по противопожарной профилактике</h2>
                            <p>Выберите билет.</p>
                            <ul>
                                <li>Все вопросы разделены по билетам по порядку. </li>
                                <li>В каждом билете содержится 10 вопросов.</li>
                            </ul>
                            <p><strong>Ответьте на все вопросы </strong>билета и нажмите кнопку <strong>"Показать результаты".</strong> <br> После этого вы увидите правильный вариант.</p>
                            <div class="ticket-grid">
                                <a class="btn btn-secondary" href="/fire-safety/A1-ticket-one.php">Билет№1</a>
                                <a class="btn btn-secondary" href="/fire-safety/A2-ticket-two.php">Билет№2</a>
                                <a class="btn btn-secondary" href="/fire-safety/A3-ticket-three.php">Билет№3</a>
                                <a class="btn btn-secondary" href="/fire-safety/A4-ticket-four.php">Билет№4</a>
                                <a class="btn btn-secondary" href="/fire-safety/A5-ticket-five.php">Билет№5</a>
                                <a class="btn btn-secondary" href="/fire-safety/A6-ticket-sex.php">Билет№6</a>
                                <a class="btn btn-secondary" href="/fire-safety/A7-ticket-seven.php">Билет№7</a>
                                <a class="btn btn-secondary" href="/fire-safety/A8-ticket-eight.php">Билет№8</a>
                                <a class="btn btn-secondary" href="/fire-safety/A9-ticket-nine.php">Билет№9</a>
                                <a class="btn btn-secondary" href="/fire-safety/A10-ticket-ten.php">Билет№10</a>
                                <a class="btn btn-secondary" href="/fire-safety/A11-ticket-eleven.php">Билет№11</a>
                                <a class="btn btn-secondary" href="/fire-safety/A12-ticket-twelve.php">Билет№12</a>
                                <a class="btn btn-secondary" href="/fire-safety/A13-ticket-thirty.php">Билет№13</a>
                                <a class="btn btn-secondary" href="/fire-safety/A14-ticket-fourteen.php">Билет№14</a>
                                <a class="btn btn-secondary" href="/fire-safety/A15-ticket-fifteen.php">Билет№15</a>
                                <a class="btn btn-secondary" href="/fire-safety/A16-ticket-sixteen.php">Билет№16</a>
                                <a class="btn btn-secondary" href="/fire-safety/A17-ticket-seventeen.php">Билет№17</a>




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