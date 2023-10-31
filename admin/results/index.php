<?php session_start();

include "../../app/controllers/users.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Учебный Центр "УЗ-ПРО"</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/include/header-admin.php"); ?>

    <div class="container">

        <?php include ROOT_PATH . "/app/include/sidebar-admin.php"; ?>

        <div class="posts col-9">

            <div class="row title-table">
                <h2>Результаты</h2>
                <div class="col-1">ID</div>
                <div class="col-2">Логин</div>
                <div class="col-3">Email</div>
                <div class="col-4">Результаты</div>
            </div>
            <?php foreach ($users as $key => $user) : ?>
                <div class="row post">
                    <div class="col-1"><?= $user['id']; ?></div>
                    <div class="col-2"><?= $user['username']; ?></div>
                    <div class="col-3"><?= $user['email']; ?></div>
                    <div class="col-4"><?= $user['results']; ?></div>
                    <?php if ($user['admin'] == 1) : ?>
                        <div class="col-2">Admin</div>
                    <?php else : ?>
                        <div class="col-2">User</div>
                    <? endif; ?>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>


    <!-- footer -->
    <?php include(ROOT_PATH . "/app/include/footer.php"); ?>
    <!-- // footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>

</html>