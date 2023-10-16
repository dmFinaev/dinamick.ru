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
                <span itemprop="name">Билет№6</span>
                <meta itemprop="item" content="./guest_1.html">
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </main>

    <div class="container mb-xl-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-12">
                <h1 class="mb-2">Билет 6 (вопросы 51-60)</h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="learn_test_answer">
                                        <div class="b-quest-item-wrap">
                                            <div class="b-quest-item js-question" id="question31155">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        51. </span>
                                                    <div>
                                                        Нужно ли оформлять больничный при микротравме? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[51][answers][]" value="116125" id="116125">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116125">Да.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[51][answers][]" value="116126" id="116126">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116126">Нет, не нужно.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[51][answers][]" value="116127" id="116127">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116127">Больничный оформляется всегда.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[51][answers][]" value="116128" id="116128">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116128">Первым делом оформляется больничный, а только потом расследуется микротравма.</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31136">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        52. </span>
                                                    <div>
                                                        На что ориентироваться работодателю, чтобы создать безопасные условия труда? Выберите два правильных ответа </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[52][answers][]" value="116056" id="116056">
                                                    <label class="__answer" for="116056">
                                                        На собственные взгляды </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[52][answers][]" value="116057" id="116057">
                                                    <label class="__answer" for="116057">
                                                        На другие компании </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[52][answers][]" value="116058" id="116058">
                                                    <label class="__answer" for="116058">
                                                        На комплексную оценку технического и организационного уровня рабочего места </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[52][answers][]" value="116059" id="116059">
                                                    <label class="__answer" for="116059">
                                                        На оценку факторов производственной среды и трудового процесса, которые могут влиять на физическое и психологическое состояние работников </label>
                                                </div>

                                            </div>
                                            <div class="b-quest-item js-question" id="question31146">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        53. </span>
                                                    <div>
                                                        Включают ли обучение по использованию СИЗ в общий объем обучения по охране труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[53][answers][]" value="116093" id="116093">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116093">Нет, не включают. Необходимо обучить отдельно или добавить дополнительные часы</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[53][answers][]" value="116094" id="116094">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116094">Да, можно включить в общий объем</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31137">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        54. </span>
                                                    <div>
                                                        Какие существуют принципы обеспечения безопасности труда? Выберите два правильных ответа </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[54][answers][]" value="116060" id="116060">
                                                    <label class="__answer" for="116060">
                                                        Предупреждение и профилактика опасностей </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[54][answers][]" value="116061" id="116061">
                                                    <label class="__answer" for="116061">
                                                        Минимизация повреждения здоровья работников </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[54][answers][]" value="116062" id="116062">
                                                    <label class="__answer" for="116062">
                                                        Таких принципов нет </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[54][answers][]" value="116063" id="116063">
                                                    <label class="__answer" for="116063">
                                                        Успешное управление персоналом </label>
                                                </div>

                                            </div>
                                            <div class="b-quest-item js-question" id="question31147">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        55. </span>
                                                    <div>
                                                        СОУТ не проводят в отношении: </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[55][answers][]" value="116095" id="116095">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116095">Надомников</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[55][answers][]" value="116096" id="116096">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116096">Дистанционных работников</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[55][answers][]" value="116097" id="116097">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116097">Работников, которые работают на физических лиц</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[55][answers][]" value="116098" id="116098">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116098">Работников, которые работают на религиозные организации</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[55][answers][]" value="116099" id="116099">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116099">Вакантных рабочих мест</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[55][answers][]" value="116100" id="116100">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116100">Рабочих мест госслужащих и муниципальных служащих</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[55][answers][]" value="116101" id="116101">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116101">Верно все вышеперечисленное</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31148">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        56. </span>
                                                    <div>
                                                        Как часто проводить плановую СОУТ? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[56][answers][]" value="116102" id="116102">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116102">Не реже одного раза в три года</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[56][answers][]" value="116103" id="116103">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116103">Не реже одного раза в пять лет</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[56][answers][]" value="116104" id="116104">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116104">Ежегодно</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31139">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        57. </span>
                                                    <div>
                                                        Какие вопросы должен задать себе сотрудник перед тем, как приступит к выполнению работ? Выберите четыре правильных ответа </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[57][answers][]" value="116069" id="116069">
                                                    <label class="__answer" for="116069">
                                                        Знаю ли я эту работу? </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[57][answers][]" value="116070" id="116070">
                                                    <label class="__answer" for="116070">
                                                        Готов ли её выполнять? </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[57][answers][]" value="116071" id="116071">
                                                    <label class="__answer" for="116071">
                                                        Зачем я вообще сюда пришел? </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[57][answers][]" value="116072" id="116072">
                                                    <label class="__answer" for="116072">
                                                        А когда обед? </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[57][answers][]" value="116073" id="116073">
                                                    <label class="__answer" for="116073">
                                                        Какое оборудование и материалы буду использовать? </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[57][answers][]" value="116074" id="116074">
                                                    <label class="__answer" for="116074">
                                                        Кто еще будет участвовать в выполнении работы или находиться рядом? </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[57][answers][]" value="116075" id="116075">
                                                    <label class="__answer" for="116075">
                                                        Могу ли уйти домой после обеда? </label>
                                                </div>

                                            </div>
                                            <div class="b-quest-item js-question" id="question31149">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        58. </span>
                                                    <div>
                                                        Вправе ли работодатель самостоятельно разработать свою форму реестра профрисков? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[58][answers][]" value="116105" id="116105">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116105">Да, вправе</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[58][answers][]" value="116106" id="116106">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116106">Нет, не вправе</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31120">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        59. </span>
                                                    <div>
                                                        Какие обязательные меры обязан предпринять работодатель в сфере охраны труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[59][answers][]" value="116005" id="116005">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116005">Разработать и исполнять систему управления охраной труда (СУОТ)</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[59][answers][]" value="116006" id="116006">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116006">Разработать и исполнять комплекс мер, направленных на сохранение жизни и здоровья работников, в частности: систему управления охраной труда (СУОТ), управление профрисками, мероприятия по охране труда, провести спецоценку, утвердить обязанности Руководителей и Работника в части охраны труда</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[59][answers][]" value="116007" id="116007">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116007">Провести Спецоценку на рабочих местах, утвердить обязанности Руководителей и Работника в части охраны труда</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question31121">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        60. </span>
                                                    <div>
                                                        Могут ли привлечь лицо, которое обязано соблюдать требования охраны труда на определенном участке работ в силу служебного положения, к уголовной ответственности за нарушение охраны труда? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[60][answers][]" value="116008" id="116008">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116008">Нет, возможна только административная ответственность</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[60][answers][]" value="116009" id="116009">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116009">Да, могут</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[60][answers][]" value="116010" id="116010">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="116010">Могут привлечь только руководителя компании</label>
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