<?php

include_once "path.php";
include_once "app/controllers/topics.php";
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 2;
$offset = $limit * ($page - 1);
$total_pages = round(countRow('posts') / $limit, 0);

$posts = selectAllFromPostsWithUsersOnIndex('posts', 'users', $limit, $offset);
$topTopic = selectTopTopicFromPostsOnIndex('posts');


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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://m3.material.io/styles/icons/overview#257fe17b-d20f-488d-9842-2af613e3abcd">
    <link rel="icon" type="image/png" href="/img/Снимок экрана (35).png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Учебный Центр "УЗ-ПРО"</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/include/header.php"); ?>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/XXL_height (2).webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/e01470b1-ab11-36a4-90b1-7ca1db6d6fab.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/Miniaturas-04-1-1536x960.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container py-0 py-md-2 pb-2">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-lg-3 mb-2">Обучение</h1>
                <p class="mb-lg-3 mb-2">Выберите раздел.</p>
                <div class="js-search-result">
                    <div class="b-program">
                        <div class="row">
                            <div class="container">
                                <div class="content row">
                                    <div class="sidebar col-md-4 col-12">

                                        <div class="section search">
                                            <h3>Доступ к курсам</h3>
                                            <p class="section__text"></p>
                                            <form action="search.php" method="post">
                                                <input type="text" name="search-term" class="text-input" placeholder="Введите токин курса...">
                                                <p class="section__text"></p>
                                                <button type="submit" class="btn btn-primary" name="button-cur">Вперёд</button>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-4 mb-1">
                                <div class="b-block b-block_hover d-flex flex-column justify-content-between align-items-center position-relative">
                                    <img src="/img/379986.jpeg" alt="" class="mb-1 __image text-center">
                                    <div class="b-news__name align-self-start mb-1" title="Электробезопасность">Электробезопасность</div>
                                    <a href="#" class="b-link align-self-end stretched-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4 mb-1">
                                <div class="b-block b-block_hover d-flex flex-column justify-content-between align-items-center position-relative">
                                    <img src="/img/width.jpeg" alt="" class="mb-1 __image text-center">
                                    <div class="b-news__name align-self-start mb-1" title="Теплоэнергетика">Теплоэнергетика</div>
                                    <a href="" class="b-link align-self-end stretched-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4 mb-1">
                                <div class="b-block b-block_hover d-flex flex-column justify-content-between align-items-center position-relative">
                                    <img src="/img/охрана труда в тэк.jpg" alt="" class="mb-1 __image text-center">
                                    <div class="b-news__name align-self-start mb-1" title="Промышленная безопасность">Промышленная безопасность</div>
                                    <a href="/industrial-safety/industrial-safety.php" class="b-link align-self-end stretched-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4 mb-1">
                                <div class="b-block b-block_hover d-flex flex-column justify-content-between align-items-center position-relative">
                                    <img src="/img/1-1.png" alt="" class="mb-1 __image text-center">
                                    <div class="b-news__name align-self-start mb-1" title="Охрана труда">Охрана труда</div>
                                    <a href="/labor-protection/labor-protection.php" class="b-link align-self-end stretched-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4 mb-1">
                                <div class="b-block b-block_hover d-flex flex-column justify-content-between align-items-center position-relative">
                                    <img src="/img/aptecka-pervoi-pomoji.jpg" alt="" class="mb-1 __image text-center">
                                    <div class="b-news__name align-self-start mb-1" title="Первая помощь">Первая помощь</div>
                                    <a href="/first-aid/first-aid.php" class="b-link align-self-end stretched-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4 mb-1">
                                <div class="b-block b-block_hover d-flex flex-column justify-content-between align-items-center position-relative">
                                    <img src="/img/fire-safety.jpg" alt="" class="mb-1 __image text-center">
                                    <div class="b-news__name align-self-start mb-1" title="Пожарная безопасность">Пожарная безопасность</div>
                                    <a href="/fire-safety/fire-safety.php" class="b-link align-self-end stretched-link">Подробнее</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content row">
            <div class="sidebar col-md-4 col-12">

                <div class="section search">
                    <!-- ИНКЛЮДИМ HTML БЛОК С КОММЕНТАРИЯМИ  --->
                    <?php include(ROOT_PATH . "/app/include/comments.php"); ?>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include(ROOT_PATH . "/app/include/footer.php"); ?>
    <!-- // footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>