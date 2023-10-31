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
                                            <div class="b-quest-item js-question" id="question31239">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        1. </span>
                                                    <div>
                                                        Можно ли использовать на рабочем месте средства защиты с предыдущей работы? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[1][answers][]" value="116398" id="116398">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116398">Да, можно</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[1][answers][]" value="116399" id="116399">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116399">Нет, нельзя</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31240">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        2. </span>
                                                    <div>
                                                        Какой метод оценки рисков применяют для эффективного технического обслуживания? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[2][answers][]" value="116400" id="116400">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116400">Матричный метод</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[2][answers][]" value="116401" id="116401">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116401">Метод технического обслуживания</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[2][answers][]" value="116402" id="116402">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116402">Причинно-следственный анализ</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31241">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        3. </span>
                                                    <div>
                                                        Какой срок действия у Сертификата и Декларации соответствия СИЗ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[3][answers][]" value="116403" id="116403">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116403">Один год</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[3][answers][]" value="116404" id="116404">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116404">Три года</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[3][answers][]" value="116405" id="116405">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116405">Пять лет</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[3][answers][]" value="116406" id="116406">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116406">Документы бессрочные</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31242">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        4. </span>
                                                    <div>
                                                        Можно ли выдавать работникам в качестве средств индивидуальной защиты от вредных и опасных производственных факторов изделия, которые не имеют документов о соответствии ТР ТС 019/2011? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[4][answers][]" value="116407" id="116407">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116407">Можно</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[4][answers][]" value="116408" id="116408">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116408">Нельзя</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[4][answers][]" value="116409" id="116409">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116409">Можно, если изделия в хорошем состоянии</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31243">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        5. </span>
                                                    <div>
                                                        Кто обеспечивает хранение и уход за средствами защиты? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[5][answers][]" value="116410" id="116410">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116410">Работник</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[5][answers][]" value="116411" id="116411">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116411">Специалист по охране труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[5][answers][]" value="116412" id="116412">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116412">Работодатель</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31244">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        6. </span>
                                                    <div>
                                                        В каком документе можно увидеть разъяснения о том, что такое "безопасность СИЗ" </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[6][answers][]" value="116413" id="116413">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116413">Трудовой кодекс РФ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[6][answers][]" value="116414" id="116414">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116414">Приказ Минтруда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[6][answers][]" value="116415" id="116415">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116415">Технический регламент Таможенного союза</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[6][answers][]" value="116416" id="116416">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116416">Приказ Минздравсоцразвития</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31245">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        7. </span>
                                                    <div>
                                                        Что использовать при составлении норм выдачи СИЗ, если профессии работника нет в отраслевых и межотраслевых типовых нормах по виду деятельности и сквозных типовых нормах? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[7][answers][]" value="116417" id="116417">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116417">Типовые нормы для работников, профессии которых характерны для выполняемых работ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[7][answers][]" value="116418" id="116418">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116418">Ничего, если профессии нет – не выдавать СИЗ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[7][answers][]" value="116419" id="116419">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116419">Типовые нормы бесплатной выдачи работникам смывающих или обезвреживающих средств</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31246">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        8. </span>
                                                    <div>
                                                        Можно ли хранить специальную одежду вместе с домашней? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[8][answers][]" value="116420" id="116420">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116420">Да, можно. Главное потом постирать домашнюю одежду</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[8][answers][]" value="116421" id="116421">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116421">Нет, нельзя</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31247">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        9. </span>
                                                    <div>
                                                        Для чего нужно оценивать риски по охране труда на рабочих местах? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[9][answers][]" value="116422" id="116422">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116422">Чтобы избежать штрафов от ГИТ</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[9][answers][]" value="116423" id="116423">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116423">Оценивать риски на рабочих местах не нужно</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[9][answers][]" value="116424" id="116424">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116424">Чтобы устранить риски, подобрать СИЗ и снизить травматизм</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[9][answers][]" value="116425" id="116425">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116425">Чтобы подобрать СИЗ</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31248">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        10. </span>
                                                    <div>
                                                        Для каких средств защиты выдают сертификаты и декларации соответствия национальному стандарту? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[10][answers][]" value="116426" id="116426">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116426">СИЗ второго класса риска</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[10][answers][]" value="116427" id="116427">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116427">СИЗ первого класса риска</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[10][answers][]" value="116428" id="116428">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116428">Для специальных средств защиты, которые разработали для авиационной и космической техники, подводных работ, медицины и микробиологии и тд.</label>
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