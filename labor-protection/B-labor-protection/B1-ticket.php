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
                <a itemprop="item" href="/labor-protection/B-labor-protection/B-labor-protection.php">
                    <span itemprop="name">Охрана труда А. Общие вопросы ОТ и функционирования СУОТ</span>
                </a>
                <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Билет№1</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>
    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-12">
                <h1 class="mb-2">Билет 1 (вопросы 1-10)</h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="learn_test_answer">
                                        <div class="b-quest-item-wrap">
                                            <div class="b-quest-item js-question" id="question31220">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        1. </span>
                                                    <div>
                                                        Нужно ли сообщить руководителю о своем плохом самочувствии? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[1][answers][]" value="116342" id="116342">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116342">Не нужно</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[1][answers][]" value="116343" id="116343">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116343">Нужно</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31221">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        2. </span>
                                                    <div>
                                                        На какой срок выдают дежурные СИЗ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[2][answers][]" value="116344" id="116344">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116344">на время выполнения работ, для которых они предназначены</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[2][answers][]" value="116345" id="116345">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116345">на весь период рабочей смены</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31222">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        3. </span>
                                                    <div>
                                                        Требуется ли учитывать рабочую позу работников при организации рабочего места? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[3][answers][]" value="116346" id="116346">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116346">Да, требуется</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[3][answers][]" value="116347" id="116347">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116347">Нет, не требуется</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31224">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        4. </span>
                                                    <div>
                                                        Можно ли компенсацию в виде молока заменить денежной выплатой? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[4][answers][]" value="116350" id="116350">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116350">Да, с согласия работника и профсоюза</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[4][answers][]" value="116351" id="116351">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116351">Нет, молоко можно заменить только равноценными продуктами</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31226">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        5. </span>
                                                    <div>
                                                        Какие документы взять на периодический медосмотр? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[5][answers][]" value="116355" id="116355">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116355">Направление, паспорт, СНИЛС, полис, справку о психиатрическом освидетельствовании</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[5][answers][]" value="116356" id="116356">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116356">Направление, паспорт, СНИЛС, полис, выписку из мед карты, справку о психиатрическом освидетельствовании</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[5][answers][]" value="116357" id="116357">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116357">Направление, паспорт, СНИЛС, полис, страховку, выписку из мед. карты</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31227">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        6. </span>
                                                    <div>
                                                        Можно ли совместить обучение безопасным методам и приемам выполнения работ с целевым инструктажом? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[6][answers][]" value="116358" id="116358">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116358">Можно</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[6][answers][]" value="116359" id="116359">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116359">Нельзя</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31228">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        7. </span>
                                                    <div>
                                                        Что сделать в первую очередь, когда начался пожар? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[7][answers][]" value="116360" id="116360">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116360">Сообщить о пожаре по номеру 101 или 112</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[7][answers][]" value="116361" id="116361">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116361">Собрать свои вещи и убежать</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[7][answers][]" value="116362" id="116362">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116362">Сообщить о пожаре своему руководителю</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31229">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        8. </span>
                                                    <div>
                                                        Кому положена компенсация в виде повышенной оплаты труда не менее 4 процентов? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[8][answers][]" value="116363" id="116363">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116363">Всем работникам с вредными и опасными условиями труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[8][answers][]" value="116364" id="116364">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116364">Работникам с классами условий труда 3.3, 3.4, 4</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[8][answers][]" value="116365" id="116365">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116365">Работникам с классом условий труда 3.1</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31230">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        9. </span>
                                                    <div>
                                                        Какой метод оценки профрисков нужно использовать, чтобы выявить первичные причины отказа оборудования и предотвратить повторное возникновение нежелательных событий? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[9][answers][]" value="116366" id="116366">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116366">Метод анализа влияния человеческого фактора</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[9][answers][]" value="116367" id="116367">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116367">Метод анализа первопричины</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[9][answers][]" value="116368" id="116368">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116368">Метод технического обслуживания</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31231">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        10. </span>
                                                    <div>
                                                        На какие группы делятся вредные и опасные производственные факторы? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[10][answers][]" value="116369" id="116369">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116369">Физические, химические, биологические, психологические</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[10][answers][]" value="116370" id="116370">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116370">Физические, химические, биологические, тяжесть и напряженность</label>
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
                                            <input type="button" onclick="document.location.href = '/labor-protection/B-labor-protection/B-labor-protection.php'" class="b-btn js-select-quiz" value="Выбрать другой билет" style="display: none;">
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