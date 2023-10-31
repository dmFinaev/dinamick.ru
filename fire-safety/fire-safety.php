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
    <div class="container">
        <img src="/img/scale_1200 (1).jpeg" class="img-fluid" alt="...">
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
                <span itemprop="name">Пожарная безопасность</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </main>

    <div class="container">
        <div class="industrial-title">
            <h2>Пожарная безопасность</h2>
            <p>Выберите курс для подготовки к тестированию:</p>
        </div>
        <div class="industrial-link">
            <p><a href="/fire-safety/fire-safety-for-managers.php" class="d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2">Пожарная безопасность для руководителей и специалистов</a></p>
            <p><a href="/fire-safety/design-fire-safety/fire-safety-designers.php" class="d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2">Проектирование в сфере пожарной безопасности</a></p>
        </div>
    </div>

    <!-- footer -->
    <?php include(ROOT_PATH . "/app/include/footer.php"); ?>
    <!-- // footer -->

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>