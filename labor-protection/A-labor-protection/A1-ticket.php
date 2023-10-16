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
                                            <div class="b-quest-item js-question" id="question31185">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        1. </span>
                                                    <div>
                                                        Могут ли наказания, штрафы и запреты мотивировать сотрудников на безопасный труд? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[1][answers][]" value="116224" id="116224">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116224">Не могут. Сотрудник не перестанет нарушать и продолжит работать «по принуждению» и «на автомате». Такой сотрудник уже не будет задумываться о последствиях</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[1][answers][]" value="116225" id="116225">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116225">Могут. Сотрудник будет замотивирован получить премию в полном объеме и перестанет нарушать</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[1][answers][]" value="116226" id="116226">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116226">Могут. Чем сильнее напугаешь человека – тем выше мотивация</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31186">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        2. </span>
                                                    <div>
                                                        Что делать с теми сотрудниками, которые не прошли обучение и инструктаж по охране труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[2][answers][]" value="116227" id="116227">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116227">Уволить</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[2][answers][]" value="116228" id="116228">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116228">Не допускать к работе</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[2][answers][]" value="116229" id="116229">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116229">Применить к ним дисциплинарное взыскание - замечание или выговор</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[2][answers][]" value="116230" id="116230">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116230">Аннулировать трудовой договор</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31187">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        3. </span>
                                                    <div>
                                                        Какой объем практических занятий необходимо включить в обучение оказанию первой помощи пострадавшим на производстве? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[3][answers][]" value="116231" id="116231">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116231">Не менее 50 % практических занятий</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[3][answers][]" value="116232" id="116232">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116232">Не менее 20 % практических занятий</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[3][answers][]" value="116233" id="116233">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116233">Не менее 80 % практических занятий</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[3][answers][]" value="116234" id="116234">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116234">Вся программа обучения должна быть построена на практике</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31188">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        4. </span>
                                                    <div>
                                                        Могут ли привлечь лицо, которое обязано соблюдать требования охраны труда на определенном участке работ в силу служебного положения, к уголовной ответственности за нарушение охраны труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[4][answers][]" value="116235" id="116235">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116235">Нет, возможна только административная ответственность</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[4][answers][]" value="116236" id="116236">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116236">Да, могут</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[4][answers][]" value="116237" id="116237">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116237">Могут привлечь только руководителя компании</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31189">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        5. </span>
                                                    <div>
                                                        В каком случае провести внеплановую СОУТ в течение двенадцати месяцев? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[5][answers][]" value="116238" id="116238">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116238">Если ввели новые рабочие места</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[5][answers][]" value="116239" id="116239">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116239">Если поменяли оборудование</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[5][answers][]" value="116240" id="116240">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116240">Если поменяли технологию производства</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[5][answers][]" value="116241" id="116241">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116241">Верно все вышеперечисленное</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31190">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        6. </span>
                                                    <div>
                                                        Вы вызвали скорую пострадавшему, но не можете дозвониться до руководителя и сообщить о происшествии. Можете ли вы приступить к оказанию первой помощи? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[6][answers][]" value="116242" id="116242">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116242">Нет, не могу. Необходимо сначала сообщить о несчастном случае руководителю, затем можно оказывать помощь</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[6][answers][]" value="116243" id="116243">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116243">Да, могу. Чем быстрее начну оказывать помощь, тем выше шансы на спасение</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31191">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        7. </span>
                                                    <div>
                                                        Можно ли оценить эффективность СУОТ при введении новых технологий производства в организации? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[7][answers][]" value="116244" id="116244">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116244">Нельзя, оценку СУОТ проводят при других обстоятельствах</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[7][answers][]" value="116245" id="116245">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116245">Нельзя, проводят только периодическую оценку во время планирования бюджета на СУОТ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[7][answers][]" value="116246" id="116246">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116246">Можно, в качестве внеочередной оценки эффективности</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31192">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        8. </span>
                                                    <div>
                                                        Если инспектор выявит нарушения в порядке проведения спецоценки условий труда, какой штраф наложат на организацию? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[8][answers][]" value="116247" id="116247">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116247">От 130 000 до 200 000 рублей</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[8][answers][]" value="116248" id="116248">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116248">От 60 000 до 80 000 рублей</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[8][answers][]" value="116249" id="116249">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116249">От 20 000 до 50 000 рублей</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31193">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        9. </span>
                                                    <div>
                                                        Обязан ли работодатель создать систему управления охраной труда в организации? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[9][answers][]" value="116250" id="116250">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116250">Да</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[9][answers][]" value="116251" id="116251">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116251">По своему усмотрению</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31194">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        10. </span>
                                                    <div>
                                                        Обязан ли работник немедленно извещать своего непосредственного руководителя о любой ситуации, угрожающей здоровью людей? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[10][answers][]" value="116252" id="116252">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116252">Нет, извещать нужно только о несчастных случаях</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[10][answers][]" value="116253" id="116253">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116253">Нет, только о чрезвычайной ситуации</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[10][answers][]" value="116254" id="116254">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116254">Да</label>
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