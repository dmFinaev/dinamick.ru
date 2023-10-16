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
                <a itemprop="item" href="/labor-protection/A-labor-protection/A-labor-protection.php">
                    <span itemprop="name">Охрана труда А. Общие вопросы ОТ и функционирования СУОТ</span>
                </a>
                <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Билет№8</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>

    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-12">
                <h1 class="mb-2">Билет 8 (вопросы 71-73)</h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="learn_test_answer">
                                        <div class="b-quest-item-wrap">
                                            <div class="b-quest-item js-question" id="question31138">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        71. </span>
                                                    <div>
                                                        Как применить технику пяти шагов безопасности, чтобы избежать травм? Укажите правильную последовательность шагов. </div>

                                                </div>

                                                <div class="__description">
                                                    <ol>
                                                        <li>Определить опасности и возможные последствия<br>
                                                        </li>
                                                        <li>Решить, что делать в экстренной ситуации<br>
                                                        </li>
                                                        <li>Сделать паузу и продумать работу<br>
                                                        </li>
                                                        <li>Принять решение, возможно ли начинать работу</li>
                                                        <li>Решить, как защитить от опасности себя и других</li>
                                                    </ol>
                                                </div>


                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[71][answers][]" value="116064" id="116064">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116064">1,2,3,4,5</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[71][answers][]" value="116065" id="116065">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116065">4,5,3,1,2</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[71][answers][]" value="116066" id="116066">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116066">3,1,5,2,4</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[71][answers][]" value="116067" id="116067">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116067">5,3,1,4,2</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31159">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        72. </span>
                                                    <div>
                                                        Расставьте действия по оказанию первой помощи в правильном порядке. </div>

                                                </div>

                                                <div class="__description">
                                                    <ol>
                                                        <li>Помогу пострадавшему принять оптимальное положение тела<br>
                                                        </li>
                                                        <li>Транспортирую пострадавшего самостоятельно, если скорая не может доехать<br>
                                                        </li>
                                                        <li>Проконтролирую состояние пострадавшего до приезда скорой и окажу психологическую поддержку<br>
                                                        </li>
                                                        <li>Осмотрю место происшествия<br>
                                                        </li>
                                                        <li>Окажу первую помощь<br>
                                                        </li>
                                                        <li>Вызову скорую</li>
                                                    </ol>
                                                </div>


                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[72][answers][]" value="116136" id="116136">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116136">1,2,4,5,3,6</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[72][answers][]" value="116138" id="116138">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116138">﻿4,6,5,1,3,2</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[72][answers][]" value="116139" id="116139">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116139">1,2,3,4,5,6</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[72][answers][]" value="116140" id="116140">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116140">6,1,2,4,5,3</label>
                                                </div>


                                            </div>
                                            <div class="b-quest-item js-question" id="question31142">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        73. </span>
                                                    <div>
                                                        Как организовать места для курения на предприятии? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[73][answers][]" value="116081" id="116081">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116081">Разместить на улице, не обозначая соответствующим знаком</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[73][answers][]" value="116082" id="116082">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116082">Разместить во всех санитарно-бытовых помещениях, обозначить территорию соответствующим знаком</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[73][answers][]" value="116083" id="116083">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116083">Разместить на улице, обозначить территорию соответствующим знаком</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-3 text-center --c-blue js-result-block" style="display: none;">
                                            <h2 class="m-0">
                                                <b>Тестирование завершено!</b>
                                            </h2>
                                            <br>
                                            <span>Всего вопросов:</span>
                                            <span class="font-weight-bold">3</span>
                                            <span>Правильных ответов:</span>
                                            <span class="font-weight-bold js-correct-count"></span>

                                        </div>
                                        <div class="py-3 text-center">
                                            <input type="button" class="b-btn js-check-result" value="Показать результаты">
                                            <input type="button" onclick="document.location.href = '/labor-protection/A-labor-protection/A-labor-protection.php'" class="b-btn js-select-quiz" value="Выбрать другой билет" style="display: none;">
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