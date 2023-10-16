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
                <span itemprop="name">Билет№2</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>
    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-12">
                <h1 class="mb-2">Билет 2 (вопросы 11-20)</h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="learn_test_answer">
                                        <div class="b-quest-item-wrap">
                                            <div class="b-quest-item js-question" id="question31195">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        11. </span>
                                                    <div>
                                                        От какого показателя зависит количество душевых на предприятии? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[11][answers][]" value="116255" id="116255">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116255">Класс условий труда на конкретных рабочих местах</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[11][answers][]" value="116256" id="116256">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116256">Количество работников на всем предприятии</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[11][answers][]" value="116257" id="116257">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116257">Количество работников в многочисленную смену</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31196">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        12. </span>
                                                    <div>
                                                        Какие обязательные элементы входят в систему управления охраной труда?Выберите пять правильных вариантов </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[12][answers][]" value="116258" id="116258">
                                                    <label class="__answer" for="116258">
                                                        Политика </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[12][answers][]" value="116259" id="116259">
                                                    <label class="__answer" for="116259">
                                                        Планирование и внедрение </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[12][answers][]" value="116260" id="116260">
                                                    <label class="__answer" for="116260">
                                                        Организация </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[12][answers][]" value="116261" id="116261">
                                                    <label class="__answer" for="116261">
                                                        Управление </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[12][answers][]" value="116262" id="116262">
                                                    <label class="__answer" for="116262">
                                                        Контроль </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[12][answers][]" value="116263" id="116263">
                                                    <label class="__answer" for="116263">
                                                        Оценка </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[12][answers][]" value="116264" id="116264">
                                                    <label class="__answer" for="116264">
                                                        Меры по совершенствованию </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[12][answers][]" value="116265" id="116265">
                                                    <label class="__answer" for="116265">
                                                        Защита </label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31197">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        13. </span>
                                                    <div>
                                                        Как действовать, если работник должен пройти обучение по нескольким программам? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[13][answers][]" value="116266" id="116266">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116266">Выбрать одну программу обучения, которая наиболее подходит сотруднику</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[13][answers][]" value="116267" id="116267">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116267">Сотрудника нужно обучить отдельно по каждой программе</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[13][answers][]" value="116268" id="116268">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116268">Работодатель вправе снизить минимальную продолжительность обучения, если сотрудник проходит все три программы обучения. Тогда сотрудник обязан учиться не менее 40 часов</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31198">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        14. </span>
                                                    <div>
                                                        Могут ли работники участвовать в управлении охраной труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[14][answers][]" value="116269" id="116269">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116269">Да, могут при условии, что прошли специальное обучение по охране труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[14][answers][]" value="116270" id="116270">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116270">Нет, не могут</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[14][answers][]" value="116271" id="116271">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116271">Да, могут</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31199">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        15. </span>
                                                    <div>
                                                        По каким программам теперь необходимо обучать сотрудников, в соответствии с новым Порядком обучения по охране труда? Выберите пять правильных вариантов </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[15][answers][]" value="116272" id="116272">
                                                    <label class="__answer" for="116272">
                                                        Обучение по общим вопросам охраны труда и функционирования системы управления охраной труда </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[15][answers][]" value="116273" id="116273">
                                                    <label class="__answer" for="116273">
                                                        Обучение безопасным методам и приемам выполнения работ при воздействии вредных и (или) опасных производственных факторов, опасностей, идентифицированных в рамках СОУТ и ОПР </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[15][answers][]" value="116274" id="116274">
                                                    <label class="__answer" for="116274">
                                                        Обучение безопасности на рабочих местах </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[15][answers][]" value="116275" id="116275">
                                                    <label class="__answer" for="116275">
                                                        Обучение безопасным методам и приемам выполнения работ повышенной опасности, к которым предъявляются дополнительные требования в соответствии с нормативными правовыми актами, содержащими государственные нормативные требования охраны труда </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[15][answers][]" value="116276" id="116276">
                                                    <label class="__answer" for="116276">
                                                        Пожарная безопасность для руководителей и специалистов </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[15][answers][]" value="116277" id="116277">
                                                    <label class="__answer" for="116277">
                                                        Применение средств индивидуальной защиты </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[15][answers][]" value="116278" id="116278">
                                                    <label class="__answer" for="116278">
                                                        Оказание первой помощи пострадавшим </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[15][answers][]" value="116279" id="116279">
                                                    <label class="__answer" for="116279">
                                                        Защита от COVID </label>
                                                </div>

                                            </div>
                                            <div class="b-quest-item js-question" id="question31200">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        16. </span>
                                                    <div>
                                                        Как организовать комнату приема пищи, если на предприятии работают инвалиды на креслах-колясках? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[16][answers][]" value="116280" id="116280">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116280">Прибавить к площади комнаты 1,65 кв.м на каждого работника с ограниченными возможностями</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[16][answers][]" value="116281" id="116281">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116281">Прибавить к площади комнаты 3 кв.м на каждого работника с ограниченными возможностями</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[16][answers][]" value="116282" id="116282">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116282">Прибавить к площади комнаты 1 кв.м на каждого работника с ограниченными возможностями</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31201">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        17. </span>
                                                    <div>
                                                        В какой срок проводить внеплановое обучение после актуализации программ обучения? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[17][answers][]" value="116283" id="116283">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116283">В течение 60 дней после актуализации программ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[17][answers][]" value="116284" id="116284">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116284">В течение 30 дней после актуализации программ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[17][answers][]" value="116285" id="116285">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116285">В течение 60 дней до актуализации программ</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31202">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        18. </span>
                                                    <div>
                                                        Когда нужно проинформировать работника, если условия на рабочем месте отнесли к опасным? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[18][answers][]" value="116286" id="116286">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116286">В течение 30 рабочих дней</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[18][answers][]" value="116287" id="116287">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116287">В течение 30 календарных дней</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[18][answers][]" value="116288" id="116288">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116288">Немедленно</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31203">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        19. </span>
                                                    <div>
                                                        Какой срок носки теплых СИЗ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[19][answers][]" value="116289" id="116289">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116289">Срок носки теплых СИЗ определяют по климатическому поясу</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[19][answers][]" value="116290" id="116290">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116290">Срок носки теплых СИЗ определяет сам работник</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[19][answers][]" value="116291" id="116291">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116291">Срок носки теплых СИЗ указывают в результатах СОУТ</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31204">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        20. </span>
                                                    <div>
                                                        Какая задача стоит перед работодателем, когда он организует СУОТ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[20][answers][]" value="116292" id="116292">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116292">Распределить права по охране труда на всех уровнях управления</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[20][answers][]" value="116293" id="116293">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116293">Распределить задачи по охране труда на всех уровнях управления</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[20][answers][]" value="116294" id="116294">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116294">Распределить обязанности по охране труда на всех уровнях управления </label>
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