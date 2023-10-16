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
                <span itemprop="name">Билет№4</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>

    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-12">
                <h1 class="mb-2">Билет 4 (вопросы 31-40)</h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="learn_test_answer">
                                        <div class="b-quest-item-wrap">
                                            <div class="b-quest-item js-question" id="question31217">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        31. </span>
                                                    <div>
                                                        Можно ли обучить сотрудников вопросам охраны труда, используя дистанционные технологии? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[31][answers][]" value="116332" id="116332">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116332">Нет, дистанционные технологии использовать запрещено</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[31][answers][]" value="116333" id="116333">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116333">Да, обучающие организации и работодатель вправе использовать дистанционные технологии, чтобы обучить сотрудников</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[31][answers][]" value="116334" id="116334">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116334">Да, но только если обучают руководителя организации</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31218">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        32. </span>
                                                    <div>
                                                        На каком этаже разместить туалет, если на двух смежных этажах работают 30 и менее человек? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[32][answers][]" value="116335" id="116335">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116335">На первом этаже</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[32][answers][]" value="116336" id="116336">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116336">На втором</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[32][answers][]" value="116337" id="116337">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116337">На этаже, где больше работников</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[32][answers][]" value="116338" id="116338">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116338">В таком случае туалет можно не размещать</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31219">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        33. </span>
                                                    <div>
                                                        Могут ли работники участвовать в управлении охраной труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[33][answers][]" value="116339" id="116339">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116339">Да, могут при условии, что прошли специальное обучение по охране труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[33][answers][]" value="116340" id="116340">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116340">Нет, не могут</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[33][answers][]" value="116341" id="116341">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116341">Да, могут</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31130">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        34. </span>
                                                    <div>
                                                        Могут ли наказания, штрафы и запреты мотивировать сотрудников на безопасный труд? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[34][answers][]" value="116033" id="116033">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116033">Не могут. Сотрудник не перестанет нарушать и продолжит работать «по принуждению» и «на автомате». Такой сотрудник уже не будет задумываться о последствиях</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[34][answers][]" value="116034" id="116034">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116034">Могут. Сотрудник будет замотивирован получить премию в полном объеме и перестанет нарушать</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[34][answers][]" value="116035" id="116035">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116035">Могут. Чем сильнее напугаешь человека – тем выше мотивация</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31140">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        35. </span>
                                                    <div>
                                                        Можно ли сократить рабочее время сотрудников за счет обеденного перерыва? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[35][answers][]" value="116076" id="116076">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116076">Да, можно</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[35][answers][]" value="116077" id="116077">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116077">Нет, нельзя. Это прямое нарушение Трудового кодекса</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31150">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        36. </span>
                                                    <div>
                                                        Что такое микротравма? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[36][answers][]" value="116107" id="116107">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116107">Небольшое повреждение, которое получил сотрудник, например порезал палец канцелярской бумагой.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[36][answers][]" value="116108" id="116108">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116108">Понятия микротравма в законе нет.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[36][answers][]" value="116109" id="116109">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116109">Повреждение кожи более 50%.</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31156">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        37. </span>
                                                    <div>
                                                        Можно ли проверять дыхание пострадавшего с помощью зеркальца или перышка? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[37][answers][]" value="116129" id="116129">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116129">Да, можно. Проверить дыхание можно любым способом. Чем больше способов - тем лучше</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[37][answers][]" value="116130" id="116130">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116130">Нет, нельзя. Есть риск неправильно оценить состояние пострадавшего</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31131">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        38. </span>
                                                    <div>
                                                        Как влияет мотивация сотрудников на травматизм? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[38][answers][]" value="116036" id="116036">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116036">Травматизм – это результат низкой мотивации на безопасный труд</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[38][answers][]" value="116037" id="116037">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116037">Никак не влияет. Мотивация – это одно, а незнание правил безопасности – это другое</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31141">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        39. </span>
                                                    <div>
                                                        Кто разрабатывает карты оценки профрисков? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[39][answers][]" value="116078" id="116078">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116078">Ответственный за оценку профрисков</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[39][answers][]" value="116079" id="116079">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116079">Руководитель организации</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[39][answers][]" value="116080" id="116080">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116080">Руководители структурных подразделений</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31151">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        40. </span>
                                                    <div>
                                                        Что будет считаться микротравмой? Найдите два правильных ответа. </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[40][answers][]" value="116110" id="116110">
                                                    <label class="__answer" for="116110">
                                                        Незначительный ушиб </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[40][answers][]" value="116111" id="116111">
                                                    <label class="__answer" for="116111">
                                                        Небольшой порез, например пальца </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[40][answers][]" value="116112" id="116112">
                                                    <label class="__answer" for="116112">
                                                        Сотрясение мозга </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[40][answers][]" value="116113" id="116113">
                                                    <label class="__answer" for="116113">
                                                        Перелом ноги. </label>
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