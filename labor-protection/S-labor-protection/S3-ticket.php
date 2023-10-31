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
                <span itemprop="name">Билет№3</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>
    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-12">
                <h1 class="mb-2">Билет 3 (вопросы 21-30)</h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="learn_test_answer">
                                        <div class="b-quest-item-wrap">
                                            <div class="b-quest-item js-question" id="question31160">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        21. </span>
                                                    <div>
                                                        На какие СИЗ требуется декларация о соответствии? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[21][answers][]" value="116143" id="116143">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116143">СИЗ второго класса риска</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[21][answers][]" value="116144" id="116144">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116144">СИЗ первого класса риска</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[21][answers][]" value="116145" id="116145">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116145">На все СИЗ</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31170">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        22. </span>
                                                    <div>
                                                        Как действовать, если возникли сомнения в целостности СИЗ от падения с высоты? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[22][answers][]" value="116176" id="116176">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116176">Немедленно заменить СИЗ на исправный</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[22][answers][]" value="116177" id="116177">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116177">Предупредить руководителя и продолжить работу</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[22][answers][]" value="116178" id="116178">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116178">Продолжить работу</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31180">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        23. </span>
                                                    <div>
                                                        Можно ли допускать к работе сотрудника, который не прошел обучение по применению СИЗ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[23][answers][]" value="116208" id="116208">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116208">Можно, он может пройти это обучение позже</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[23][answers][]" value="116209" id="116209">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116209">Нельзя допускать к работе</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31161">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        24. </span>
                                                    <div>
                                                        Какой способ оценки профрисков является самым наглядным? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[24][answers][]" value="116146" id="116146">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116146">Матричный метод</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[24][answers][]" value="116147" id="116147">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116147">Анализ «Галстук-бабочка»</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[24][answers][]" value="116148" id="116148">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116148">Контрольные листы</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31171">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        25. </span>
                                                    <div>
                                                        Что проверить во время осмотра защитных очков? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[25][answers][]" value="116179" id="116179">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116179">Проверить отсутствие царапин</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[25][answers][]" value="116180" id="116180">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116180">Проверить отсутствие трещин</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[25][answers][]" value="116181" id="116181">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116181">Проверить отсутствие царапин, трещин и других дефектов</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31181">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        26. </span>
                                                    <div>
                                                        В каких случаях нужно актуализировать программу обучения по использованию СИЗ? Выберите несколько вариантов ответов </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[26][answers][]" value="116210" id="116210">
                                                    <label class="__answer" for="116210">
                                                        Если вступят в силу новые НПА </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[26][answers][]" value="116211" id="116211">
                                                    <label class="__answer" for="116211">
                                                        Если вводите в эксплуатацию новый вид оборудования, инструментов и приспособлений, меняете технологический процесс </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[26][answers][]" value="116212" id="116212">
                                                    <label class="__answer" for="116212">
                                                        По требованию ГИТ или по требованию работодателя, если установят несоответствие программы требованиям охраны труда </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[26][answers][]" value="116213" id="116213">
                                                    <label class="__answer" for="116213">
                                                        По просьбе сотрудников, которые проходят обучение </label>
                                                </div>

                                            </div>
                                            <div class="b-quest-item js-question" id="question31162">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        27. </span>
                                                    <div>
                                                        Какие способы использовать, чтобы управлять профрисками? </div>

                                                </div>



                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[27][answers][]" value="116149" id="116149">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116149">Незамедлительно устранять риски</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[27][answers][]" value="116150" id="116150">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116150">Поддерживать меры управления, которые уже существуют</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[27][answers][]" value="116151" id="116151">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116151">Незамедлительно устранять и поддерживать меры управления, которые уже существуют</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[27][answers][]" value="116152" id="116152">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116152">Не обращать на риски внимания</label>
                                                </div>


                                            </div>
                                            <div class="b-quest-item js-question" id="question31172">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        28. </span>
                                                    <div>
                                                        Как действовать, если применение противошумов в течение всей рабочей смены не возможно? </div>

                                                </div>



                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[28][answers][]" value="116182" id="116182">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116182">Не использовать</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[28][answers][]" value="116183" id="116183">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116183">Использовать периодически</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[28][answers][]" value="116184" id="116184">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116184">Использовать, не смотря ни на что</label>
                                                </div>


                                            </div>
                                            <div class="b-quest-item js-question" id="question31182">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        29. </span>
                                                    <div>
                                                        Нужно ли составлять разные программы обучения по использованию СИЗ для каждой отдельной профессии? </div>

                                                </div>



                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[29][answers][]" value="116214" id="116214">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116214">Нет, нужна одна программа обучения</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[29][answers][]" value="116215" id="116215">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116215">Да, нужно составить программу для каждой профессии</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[29][answers][]" value="116216" id="116216">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116216">Работодатель вправе сделать несколько программ обучения для каждой профессии</label>
                                                </div>


                                            </div>
                                            <div class="b-quest-item js-question" id="question31163">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        30. </span>
                                                    <div>
                                                        На какие СИЗ не распространяется регламент Таможенного союза </div>

                                                </div>



                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[30][answers][]" value="116153" id="116153">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116153">защищающие от вредных хим.веществ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[30][answers][]" value="116154" id="116154">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116154">защищающие от биологических факторов</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[30][answers][]" value="116155" id="116155">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116155">используемые при проведении спортивных состязаний</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[30][answers][]" value="116156" id="116156">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116156">защищающие от электрического тока</label>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="py-3 text-center --c-blue js-result-block" style="display: none;">
                                            <h2 class="m-0">
                                                <b>Тестирование завершено!</b>
                                            </h2>
                                            <br>
                                            <span>Всего вопросов:</span>
                                            <span class="font-weight-bold">10</span>
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