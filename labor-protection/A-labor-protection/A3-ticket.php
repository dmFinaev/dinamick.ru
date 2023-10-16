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
                                            <div class="b-quest-item js-question" id="question31205">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        21. </span>
                                                    <div>
                                                        Какие работодатели обязаны создать и обеспечить функционирование системы управления охраной труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[21][answers][]" value="116295" id="116295">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116295">Только ИП</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[21][answers][]" value="116296" id="116296">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116296">Только ООО, АО</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[21][answers][]" value="116297" id="116297">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116297">Организации с численностью сотрудников от 10 человек, в независимости от формы собственности</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[21][answers][]" value="116298" id="116298">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116298">Организации с численностью сотрудников от 50 человек, в независимости от формы собственности</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[21][answers][]" value="116299" id="116299">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116299">Все работодатели обязаны создать и обеспечить функционирование системы управления охраной труда</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31206">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        22. </span>
                                                    <div>
                                                        Как действовать работодателю, если сроки планового и внепланового обучения совпадают? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[22][answers][]" value="116300" id="116300">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116300">Провести только плановое обучение</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[22][answers][]" value="116301" id="116301">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116301">Провести только внеплановое обучение</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[22][answers][]" value="116302" id="116302">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116302">Провести и оформить оба обучения</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31207">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        23. </span>
                                                    <div>
                                                        Какой документ оформить, чтобы задокументировать результаты оценки профрисков? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[23][answers][]" value="116303" id="116303">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116303">Приказ о результатах оценки профрисков</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[23][answers][]" value="116304" id="116304">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116304">Реестр профессиональных рисков</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[23][answers][]" value="116305" id="116305">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116305">Документ оформлять не нужно</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31208">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        24. </span>
                                                    <div>
                                                        Кто утверждает реестр опасностей в организации? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[24][answers][]" value="116306" id="116306">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116306">Специалист по охране труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[24][answers][]" value="116307" id="116307">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116307">Руководитель организации или его заместитель, уполномоченный по охране труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[24][answers][]" value="116308" id="116308">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116308">Ответственный за проведение оценки профрисков</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[24][answers][]" value="116309" id="116309">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116309">Заместитель руководителя, уполномоченный по охране труда</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31210">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        25. </span>
                                                    <div>
                                                        Можно ли компенсацию в виде молока заменить денежной выплатой? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[25][answers][]" value="116314" id="116314">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116314">Да, с согласия работника и профсоюза</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[25][answers][]" value="116315" id="116315">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116315">Нет, молоко можно заменить только равноценными продуктами</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31212">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        26. </span>
                                                    <div>
                                                        Где можно обучить сотрудников безопасным методам и приемам выполнения работ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[26][answers][]" value="116319" id="116319">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116319">В любом месте</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[26][answers][]" value="116320" id="116320">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116320">В учебной лаборатории, мастерских участках, цехах или полигонах</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31213">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        27. </span>
                                                    <div>
                                                        С какой периодичностью проводить обучение по общим вопросам охраны труда и функционированию систему управления охраной труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[27][answers][]" value="116321" id="116321">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116321">Один раз в год</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[27][answers][]" value="116322" id="116322">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116322">Один раз в три года</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[27][answers][]" value="116323" id="116323">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116323">Один раз в пять лет</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31214">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        28. </span>
                                                    <div>
                                                        При какой численности работников, работодатель обязан ввести должность специалиста по охране труда в штатное расписание? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[28][answers][]" value="116324" id="116324">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116324">от 50 и выше</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[28][answers][]" value="116325" id="116325">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116325">равное 50 и выше</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[28][answers][]" value="116326" id="116326">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116326">Если имеются Работники, должен быть специалист по охране труда</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31215">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        29. </span>
                                                    <div>
                                                        Обязан ли работодатель информировать сотрудников об условиях и охране труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[29][answers][]" value="116327" id="116327">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116327">Да, обязан</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[29][answers][]" value="116328" id="116328">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116328">Нет, не обязан</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31216">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        30. </span>
                                                    <div>
                                                        Когда нужно проводить обучение приемам и методам безопасного выполнения работ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[30][answers][]" value="116329" id="116329">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116329">Когда переводите сотрудника на другую работу</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[30][answers][]" value="116330" id="116330">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116330">Когда принимаете на работу сотрудника или переводите на другую</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[30][answers][]" value="116331" id="116331">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116331">Когда принимаете нового сотрудника</label>
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