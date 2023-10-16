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
                <span itemprop="name">Билет№7</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>

    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-12">
                <h1 class="mb-2">Билет 7 (вопросы 61-70)</h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="learn_test_answer">
                                        <div class="b-quest-item-wrap">
                                            <div class="b-quest-item js-question" id="question31122">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        61. </span>
                                                    <div>
                                                        Можно ли включить в Коллективный договор условия, которые не предусмотрены законодательством? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[61][answers][]" value="116011" id="116011">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116011">Можно, если они не ухудшают положение Работников в соответствии с действующим законодательством и иными нормативными правовыми актами, содержащими нормы трудового права</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[61][answers][]" value="116012" id="116012">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116012">Нельзя, необходимо действовать согласно рекомендуемого Макета Коллективного договора (утв. Минтрудом России 06.11.2003)</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31123">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        62. </span>
                                                    <div>
                                                        Кто является сторонами Коллективного договора? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[62][answers][]" value="116013" id="116013">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116013">Работники и Работодатель</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[62][answers][]" value="116014" id="116014">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116014">Работники и Работодатель, а также профсоюз</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[62][answers][]" value="116015" id="116015">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116015">Работники и Работодатель в лице их представителей</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31124">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        63. </span>
                                                    <div>
                                                        Какие условия обязательны к включению в Коллективный договор? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[63][answers][]" value="116016" id="116016">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116016">Условия включают в зависимости от решения работников и работодателя</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[63][answers][]" value="116017" id="116017">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116017">Условия по финансированию мероприятий по улучшению условий и охране труда, спецоценке, нормам выдачи СИЗ, обязанности работника и работодателя в части охраны труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[63][answers][]" value="116018" id="116018">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116018">Создание службы охраны труда, выделение должности специалиста по охране труда в организации, при численности работников более 50 человек</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31125">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        64. </span>
                                                    <div>
                                                        Какая статья Трудового кодекса устанавливает обязанности работника в сфере охраны труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[64][answers][]" value="116019" id="116019">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116019">Статья 212</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[64][answers][]" value="116020" id="116020">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116020">Статья 215</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[64][answers][]" value="116021" id="116021">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116021">Статья 57</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31126">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        65. </span>
                                                    <div>
                                                        Условием для привлечения к уголовной ответственности является: </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[65][answers][]" value="116022" id="116022">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116022">Причинение тяжкого вреда здоровью, причинение смерти, причинение крупного ущерба</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[65][answers][]" value="116023" id="116023">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116023">Причинение смерти</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[65][answers][]" value="116024" id="116024">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116024">Любые последствия, в результате которых наступил вред здоровью работника</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31127">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        66. </span>
                                                    <div>
                                                        Кого могут привлечь к уголовной ответственности за нарушение охраны труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[66][answers][]" value="116025" id="116025">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116025">Работника и работодателя</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[66][answers][]" value="116026" id="116026">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116026">Должностных лиц и организации</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[66][answers][]" value="116027" id="116027">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116027">Только физических лиц</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31128">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        67. </span>
                                                    <div>
                                                        Существует ли ответственность должностных лиц за нарушение правил техники безопасности работ, когда последние проводились на основании договора подряда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[67][answers][]" value="116028" id="116028">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116028">Ответственность по данной категории преступлений предусматривается за любые действия, в результате которых при нарушении правил охраны труда был причинен вред здоровью средней тяжести</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[67][answers][]" value="116029" id="116029">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116029">Ответственность по данной категории преступлений не предусматривается</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[67][answers][]" value="116030" id="116030">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116030">Ответственность по данной категории преступлений предусматривается лишь за неосторожное действие (бездействие), в результате которых при нарушении правил охраны труда был причинен тяжкий вред здоровью</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31129">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        68. </span>
                                                    <div>
                                                        Обязан ли работодатель создать систему управления охраной труда в организации? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[68][answers][]" value="116031" id="116031">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116031">Да</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[68][answers][]" value="116032" id="116032">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116032">По своему усмотрению</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31209">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        69. </span>
                                                    <div>
                                                        Какие вопросы помогут оценить эффективность СУОТ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[69][answers][]" value="167992" id="167992">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="167992">Требуется ли вносить изменения в систему?</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[69][answers][]" value="116310" id="116310">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116310">Достигнуты ли цели в области охраны труда?</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[69][answers][]" value="116311" id="116311">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116311">Эффективны ли действия, которые наметили по результатам предыдущих анализов? </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[69][answers][]" value="116312" id="116312">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116312">Нужно ли менять критерии оценки эффективности СУОТ?</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[69][answers][]" value="116313" id="116313">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116313">Все перечисленные вопросы</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31211">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        70. </span>
                                                    <div>
                                                        Что войдет в меры по совершенствованию СУОТ, если изменилась организационная структура компании? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[70][answers][]" value="116316" id="116316">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116316">Перераспределение трудовых функций работников</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[70][answers][]" value="116317" id="116317">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116317">Объединение сотрудников в комитет по охране труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[70][answers][]" value="116318" id="116318">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116318">Перераспределение обязанностей между должностными лицами</label>
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