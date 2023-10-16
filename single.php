<?php
include_once "path.php";
include_once "app/controllers/topics.php";
$post = selectPostFromPostsWithUsersOnSingle('posts', 'users', $_GET['post']);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->

    <!-- Custom Styling -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Учебный Центр "УЗ-ПРО"</title>
</head>


<body>

    <?php include(ROOT_PATH . "/app/include/header.php"); ?>
    <!-- блок main-->
    <div class="container">
        <div class="content row">
            <!-- Main Content -->
            <div class="main-content col-md-9 col-12">
                <h2><?php echo $post['title']; ?></h2>

                <div class="single_post row">
                    <div class="img col-12">
                        <a href="<?= BASE_URL . '/img/posts/' . $post['img'] ?>" download target="_blank" alt="<?= $post['title'] ?>" class="img thumbnail"><?= $post['img'] ?></a>

                    </div>
                    <div class="info">
                        <i class="far fa-user"> <?= $post['username']; ?></i>
                        <i class="far fa-calendar"> <?= $post['created_date']; ?></i>
                    </div>
                    <div class="single_post_text col-12">
                        <?= $post['content']; ?>
                    </div>
                    <div class="nav">
                        <h2 class="nav-title">Портал тестирования</h2>
                        <p class="nav-text">Наш портал создан для удобной подготовки работников к аттестации в ведомствах и на предприятиях по следующим направлениям:</p>
                        <ul>
                            <li>промышленная безопасность;</li>
                            <li>электробезопасность;</li>
                            <li>эксплуатация тепловых энергоустановок;</li>
                            <li>Пожарная безопасность</li>
                        </ul>
                        <p class="nav-text">Вся информация полностью соответствует последним изменениям в нормативно-правовой документации.</p>
                        <ul class="nav nav-pills ">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/testing.php">Тестирование</a>
                            </li>
                        </ul>
                    </div>



                    <!-- ИНКЛЮДИМ HTML БЛОК С КОММЕНТАРИЯМИ  --->

                </div>

            </div>
            <!-- sidebar Content -->
            <div class="sidebar col-md-3 col-12">

                <div class="section search">
                    <h3>Курсы</h3>
                    <p class="section__text">Чтобы вернутся к списку курсов </p>
                    <form action="search.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Введите токин курса...">
                        <p class="section__text"></p>
                        <button type="submit" class="btn btn-primary" name="button-cur">Вперёд</button>

                    </form>
                </div>
                <h3>Написать администратору курса</h3>
                <form method="post">
                    <div class="mb-3">
                        <select class="form-control" name="subject">
                            <option disabled selected>Тема письма</option>
                            <option value="1">Вопрос по курсу</option>
                            <option value="2">Личный вопрос</option>
                            <option value="3">Отзыв</option>
                            <label for="name">Name:</label>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email адрес (при регистрации)</label>
                        <input name="email" type="email" class="form-control" placeholder="name@example.com" maxlength="50" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Напишите ваши сообщение</label>
                        <textarea name="message" class="form-control" maxlength="250" required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="goComment" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- footer -->
    <?php include(ROOT_PATH . "/app/include/footer.php"); ?>
    <!-- // footer -->
    <script src="/assets/js/scripts.js"></script>

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