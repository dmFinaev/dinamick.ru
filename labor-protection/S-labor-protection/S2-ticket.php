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
                                            <div class="b-quest-item js-question" id="question31249">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        11. </span>
                                                    <div>
                                                        Выберите вредные факторы, при воздействии которых требуется СИЗ </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[11][answers][]" value="116429" id="116429">
                                                    <label class="__answer" for="116429">
                                                        Повышенная влажность </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[11][answers][]" value="116430" id="116430">
                                                    <label class="__answer" for="116430">
                                                        Электрический ток/электромагнитные поля </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[11][answers][]" value="116431" id="116431">
                                                    <label class="__answer" for="116431">
                                                        Палящее солнце </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[11][answers][]" value="116432" id="116432">
                                                    <label class="__answer" for="116432">
                                                        Пониженная видимость </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[11][answers][]" value="116433" id="116433">
                                                    <label class="__answer" for="116433">
                                                        Безвредные химические вещества </label>
                                                </div>

                                            </div>
                                            <div class="b-quest-item js-question" id="question31250">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        12. </span>
                                                    <div>
                                                        Кто несет ответственность за своевременную выдачу СИЗ сотрудникам? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[12][answers][]" value="116434" id="116434">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116434">Работодатель</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[12][answers][]" value="116435" id="116435">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116435">Специалист по охране труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[12][answers][]" value="116436" id="116436">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116436">Работник, так как он должен потребовать у работодателя СИЗ своевременно</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[12][answers][]" value="116437" id="116437">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116437">Специалист по пожарной безопасности</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31251">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        13. </span>
                                                    <div>
                                                        Какой метод оценки профрисков нужно использовать, чтобы выявить первичные причины отказа оборудования и предотвратить повторное возникновение нежелательных событий? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[13][answers][]" value="116438" id="116438">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116438">Метод анализа влияния человеческого фактора</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[13][answers][]" value="116439" id="116439">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116439">Метод анализа первопричины</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[13][answers][]" value="116440" id="116440">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116440">Метод технического обслуживания</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31252">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        14. </span>
                                                    <div>
                                                        Обязаны ли сотрудники использовать средства защиты при работе? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[14][answers][]" value="116441" id="116441">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116441">Да, обязаны</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[14][answers][]" value="116442" id="116442">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116442">Нет, не обязаны</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[14][answers][]" value="116443" id="116443">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116443">Могут применять СИЗ, если захотят</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31253">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        15. </span>
                                                    <div>
                                                        Как должен действовать работодатель, если сотрудник отказывается применять СИЗ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[15][answers][]" value="116444" id="116444">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116444">Отчитать</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[15][answers][]" value="116445" id="116445">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116445">Лишить премии</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[15][answers][]" value="116446" id="116446">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116446">Не допускать сотрудников к работе</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[15][answers][]" value="116447" id="116447">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116447">Допустить к работе сотрудника. Предупредить, чтобы работал осторожнее</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31254">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        16. </span>
                                                    <div>
                                                        Кто обязан покупать СИЗ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[16][answers][]" value="116448" id="116448">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116448">Работодатель, за свой счет</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[16][answers][]" value="116449" id="116449">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116449">Сотрудник, за свой счет</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[16][answers][]" value="116450" id="116450">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116450">Профсоюз</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[16][answers][]" value="116451" id="116451">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116451">Без разницы. Кто захочет - тот и купит</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31255">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        17. </span>
                                                    <div>
                                                        Какой должен быть запас дежурных СИЗ в структурном подразделении? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[17][answers][]" value="116452" id="116452">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116452">20 процентов от общего количества СИЗ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[17][answers][]" value="116453" id="116453">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116453">10 процентов от общего количества СИЗ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[17][answers][]" value="116454" id="116454">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116454">50 процентов от общего количества СИЗ</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31256">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        18. </span>
                                                    <div>
                                                        На каких рабочих местах провести специальную оценку условий труда, чтобы выдать СИЗ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[18][answers][]" value="116455" id="116455">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116455">Только на рабочих местах работников рабочих профессий</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[18][answers][]" value="116456" id="116456">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116456">На всех рабочих местах</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[18][answers][]" value="116457" id="116457">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116457">По выбору работодателя</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[18][answers][]" value="116458" id="116458">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116458">По выбору экспертной организации</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31257">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        19. </span>
                                                    <div>
                                                        Выберите верное высказывание: </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[19][answers][]" value="116459" id="116459">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116459">Дежурные СИЗ выдают работникам только на время выполнения тех работ, для которых они нужны</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[19][answers][]" value="116460" id="116460">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116460">Дежурные СИЗ выдают работникам на все время работы</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[19][answers][]" value="116461" id="116461">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116461">Дежурные СИЗ выдают работникам под расписку о сохранности</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31258">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        20. </span>
                                                    <div>
                                                        Нужно ли утверждать нормы выдачи СИЗ в организации? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[20][answers][]" value="116462" id="116462">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116462">Да, нужно</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[20][answers][]" value="116463" id="116463">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116463">Нет, не нужно</label>
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