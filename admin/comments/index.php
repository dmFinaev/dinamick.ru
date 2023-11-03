<?php
include "../../path.php";
include "../../app/controllers/topics.php";
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

    <?php include("../../app/include/header-admin.php"); ?>

    <div class="container">
        <?php include "../../app/include/sidebar-admin.php"; ?>

        <div class="cpl-md-6 col-6 comments">
            <h3> Написать сообщение</h3>
            <form action="" method="post" class="my_form" id="comment-form">
                <!--<input type="hidden" name="page" value="">-->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
                    <input name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Ваше сообщение</label>
                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" name="goComment" class="btn btn-primary">Отправить</button>
                </div>
            </form>

            <hr>
            <?php // Подготовленный запрос для извлечения комментариев
            $commentsQuery = $pdo->query("SELECT * FROM comments ORDER BY date DESC");

            // Проверяем, есть ли комментарии
            if ($commentsQuery->rowCount() > 0) {
                echo '<div class="comments-list">';

                // Выводим каждый комментарий
                while ($comment = $commentsQuery->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="comment">';
                    echo '<p><strong>' . htmlspecialchars($comment['username']) . '</strong> (' . $comment['date'] . ')</p>';
                    echo '<p>' . htmlspecialchars($comment['comment']) . '</p>';
                    echo '</div>';
                }

                echo '</div>';
            } else {
                echo '<p>Пока нет комментариев.</p>';
            }
            ?>
            <script>
                $(document).ready(function() {
                    $("#comment-form").submit(function(event) {
                        event.preventDefault(); // Предотвращаем стандартное действие отправки формы

                        // Получаем данные формы
                        var formData = $(this).serialize();

                        // Отправляем асинхронный POST-запрос на сервер
                        $.ajax({
                            type: "POST",
                            url: "/app/controllers/topics.php",
                            data: formData,
                            success: function(response) {
                                // Здесь вы можете обновить отображение комментариев или выполнить другие действия
                            }
                        });
                    });
                });
            </script>
        </div>
    </div>
    </div>

    <!-- footer -->
    <?php include(ROOT_PATH . "/app/include/footer.php"); ?>
    <!-- // footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="/assets/js/scripts.js"></script>
    <script src="/jquery/jquery v3.6.4.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>

</html>