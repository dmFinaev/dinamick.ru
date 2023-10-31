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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/test.css">
    <link rel="stylesheet" href="https://m3.material.io/styles/icons/overview#257fe17b-d20f-488d-9842-2af613e3abcd">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Учебный Центр "УЗ-ПРО"</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/include/header.php"); ?>
    <main>

        <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="flex row1 centered breadcrumbs">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/index.php">
                    <span itemprop="name">Главная</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/labor-protection/labor-protection.php">
                    <span itemprop="name">Охрана труда</span>
                </a>
                <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/labor-protection/S-labor-protection/S-labor-protection.php">
                    <span itemprop="name">Охрана труда СИЗ. Обучение по использованию средств индивидуальной защиты</span>
                </a>
                <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Билет№5</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>

    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-12">
                <h1 class="mb-2">Билет 5 (вопросы 41-45)</h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="learn_test_answer">
                                        <div class="b-quest-item-wrap">
                                            <div class="b-quest-item js-question" id="question31168">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        41. </span>
                                                    <div>
                                                        Можно ли применять результаты оценки профрисков, чтобы подобрать персонал для выполнения определенных работ? </div>

                                                </div>



                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[41][answers][]" value="116171" id="116171">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116171">Да. Если использовать оценку профессионального риска для здоровья работников.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[41][answers][]" value="116172" id="116172">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116172">Нельзя. Все методы оценки профрисков направлены на снижение уровня опасности, а не на подбор персонала.</label>
                                                </div>


                                            </div>
                                            <div class="b-quest-item js-question" id="question31178">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        42. </span>
                                                    <div>
                                                        Можно ли использовать фильтрующий противогаз в емкостях, цистернах, колодцах и других помещениях закрытого типа? </div>

                                                </div>



                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[42][answers][]" value="116204" id="116204">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116204">Да, можно</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[42][answers][]" value="116205" id="116205">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116205">Нет, нельзя</label>
                                                </div>


                                            </div>
                                            <div class="b-quest-item js-question" id="question31169">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        43. </span>
                                                    <div>
                                                        Обязан ли сотрудник осмотреть СИЗ перед началом работ? </div>

                                                </div>



                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[43][answers][]" value="116173" id="116173">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116173">Да, обязан</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[43][answers][]" value="116174" id="116174">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116174">По своему усмотрению</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[43][answers][]" value="116175" id="116175">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116175">Работник может осмотреть СИЗ во время работы</label>
                                                </div>


                                            </div>
                                            <div class="b-quest-item js-question" id="question31179">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        44. </span>
                                                    <div>
                                                        Как действовать, если на СИЗ от падения с высоты сработал индикатор срыва? </div>

                                                </div>



                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[44][answers][]" value="116206" id="116206">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116206">Немедленно изъять из эксплуатации</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[44][answers][]" value="116207" id="116207">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116207">Продолжить работу</label>
                                                </div>


                                            </div>
                                            <div class="b-quest-item js-question" id="question31173">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        45. </span>
                                                    <div>
                                                        На что обратить внимание при осмотре каски? </div>

                                                </div>



                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[45][answers][]" value="167993" id="167993">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="167993">Проверить, какого размера каска</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[45][answers][]" value="116185" id="116185">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116185">Проверить, какого цвета каска</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[45][answers][]" value="116186" id="116186">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116186">Проверить, есть ли механические повреждения</label>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="py-3 text-center --c-blue js-result-block" style="display: none;">
                                            <h2 class="m-0">
                                                <b>Тестирование завершено!</b>
                                            </h2>
                                            <br>
                                            <span>Всего вопросов:</span>
                                            <span class="font-weight-bold">5</span>
                                            <span>Правильных ответов:</span>
                                            <span class="font-weight-bold js-correct-count"></span>

                                        </div>
                                        <div class="py-3 text-center">
                                            <input type="button" class="b-btn js-check-result" value="Показать результаты">
                                            <input type="button" onclick="document.location.href = '/labor-protection/S-labor-protection/S-labor-protection.php'" class="b-btn js-select-quiz" value="Выбрать другой билет" style="display: none;">
                                        </div>
                                    </form>
                                </div>
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
    <script src="/jquery/jquery v3.6.4.min.js"></script>
    <script src="/assets/js/test.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>