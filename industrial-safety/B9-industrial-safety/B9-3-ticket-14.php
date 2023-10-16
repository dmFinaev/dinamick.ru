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
                <h1 class="mb-2">Билет 14 (вопросы 131-140)</h1>
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="learn_test_answer">
                                        <div class="b-quest-item-wrap">
                                            <div class="b-quest-item js-question" id="question8302">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        131. </span>
                                                    <div>
                                                        Какое из перечисленных требований запрещается при перемещении груза ПС? Выберите 2 варианта ответа. </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[131][answers][]" value="30176" id="30176">
                                                    <label class="__answer" for="30176">
                                                        Горизонтальное перемещение груза на 0,5 м выше встречающихся на пути предметов. </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[131][answers][]" value="30177" id="30177">
                                                    <label class="__answer" for="30177">
                                                        Перемещение груза при нахождении под ним людей. </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[131][answers][]" value="30178" id="30178">
                                                    <label class="__answer" for="30178">
                                                        Подъем груза, масса которого неизвестна. </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[131][answers][]" value="30179" id="30179">
                                                    <label class="__answer" for="30179">
                                                        Кантовка грузов с применением ПС на весу по заранее разработанным ППР или технологической документации. </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[131][answers][]" value="30180" id="30180">
                                                    <label class="__answer" for="30180">
                                                        Перемещение кирпича на поддонах без ограждения при разгрузке транспортных средств на землю. </label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question8303">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        132. </span>
                                                    <div>
                                                        На каком расстоянии сбоку от кантуемого груза должен находиться стропальщик? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[132][answers][]" value="30181" id="30181">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30181">На расстоянии, равном высоте груза плюс 0,5 м.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[132][answers][]" value="30182" id="30182">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30182">На расстоянии, равном высоте груза плюс 1 м.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[132][answers][]" value="30183" id="30183">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30183">На расстоянии, равном высоте груза плюс 1,5 м.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[132][answers][]" value="30184" id="30184">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30184">На расстоянии, равном высоте груза плюс 2 м.</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question8304">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        133. </span>
                                                    <div>
                                                        Под чьим руководством следует производить кантовку грузов массой более 75% от паспортной грузоподъемности ПС и грузов со смещением центра тяжести? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[133][answers][]" value="30185" id="30185">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30185">Инженерно-технического работника, ответственного за безопасное производство работ с применением ПС.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[133][answers][]" value="30186" id="30186">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30186">Инженерно-технического работника, ответственного за содержание ПС в работоспособном состоянии.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[133][answers][]" value="30187" id="30187">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30187">Инженерно-технического работника, ответственного за осуществление производственного контроля при эксплуатации ПС.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[133][answers][]" value="30188" id="30188">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30188">Технического руководителя организации.</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question8305">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        134. </span>
                                                    <div>
                                                        Что из перечисленного допускается при выполнении работ с применением ПС? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[134][answers][]" value="30189" id="30189">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30189">Подъем груза непосредственно с места его установки (с земли, площадки, штабеля) только механизмом телескопирования стрелы.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[134][answers][]" value="30190" id="30190">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30190">Перемещение подъемников и вышек с людьми вдоль контактной сети или конструкций моста на минимальной скорости согласно требованиям разработанного для этого ППР.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[134][answers][]" value="30191" id="30191">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30191">Освобождение с применением ПС защемленных грузом стропов, канатов или цепей.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[134][answers][]" value="30192" id="30192">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30192">Перемещение груза, подвешенного за один рог двурогого крюка.</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question8306">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        135. </span>
                                                    <div>
                                                        Кем назначаются сигнальщики из числа стропальщиков для передачи сигнала оператору (крановщику)? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[135][answers][]" value="30193" id="30193">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30193">Техническим руководителем.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[135][answers][]" value="30194" id="30194">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30194">Инженерно-техническим работником, ответственным за содержание ПС в работоспособном состоянии.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[135][answers][]" value="30195" id="30195">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30195">Инженерно-техническим работником, ответственным за осуществление производственного контроля при эксплуатации ПС.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[135][answers][]" value="30196" id="30196">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30196">Инженерно-техническим работником, ответственным за безопасное производство работ с применением ПС.</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question8307">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        136. </span>
                                                    <div>
                                                        В соответствии с требованиями каких документов должна проводиться установка ПС в зданиях, на открытых площадках и других участках производства работ? Выберите 2 варианта ответа. </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[136][answers][]" value="30197" id="30197">
                                                    <label class="__answer" for="30197">
                                                        Руководство (инструкцией) по эксплуатации ПС. </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[136][answers][]" value="30198" id="30198">
                                                    <label class="__answer" for="30198">
                                                        В соответствии с проектом производства работ, разработанным эксплуатирующей организацией. </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input data-correct="1" type="checkbox" name="questions[136][answers][]" value="30199" id="30199">
                                                    <label class="__answer" for="30199">
                                                        Правила безопасности опасных производственных объектов, на которых используются подъемные сооружения" </label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <input type="checkbox" name="questions[136][answers][]" value="30200" id="30200">
                                                    <label class="__answer" for="30200">
                                                        В соответствии с паспортом ПС. </label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question8308">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        137. </span>
                                                    <div>
                                                        При установке опорных мостовых кранов с какой фактической группой классификации (режима) в пролетах зданий должны быть устроены галереи для прохода вдоль рельсового пути с обеих сторон пролета? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[137][answers][]" value="30201" id="30201">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30201">A4 и более.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[137][answers][]" value="30202" id="30202">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30202">A6 и более.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[137][answers][]" value="30203" id="30203">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30203">A6 и менее.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[137][answers][]" value="30204" id="30204">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30204">A4 и менее.</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question8309">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        138. </span>
                                                    <div>
                                                        Какое из перечисленных требований к люку (проему) для подъема и опускания грузов, находящегося в перекрытии производственного помещения, указано неверно? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[138][answers][]" value="30208" id="30208">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30208">Должен иметь надписи габаритов проема.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[138][answers][]" value="30205" id="30205">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30205">Должен иметь постоянное ограждение высотой не менее 1,1 м.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[138][answers][]" value="30206" id="30206">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30206">Обязательное устройство световой сигнализации.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[138][answers][]" value="30207" id="30207">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30207">Должен иметь сплошное ограждение понизу на высоту 0,15 м.</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question8310">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        139. </span>
                                                    <div>
                                                        Кем выдается наряд-допуск на работу вблизи находящихся под напряжением проводов и оборудования в случаях, когда работы с применением кранов стрелового типа, кранов-манипуляторов, подъемников (вышек) ведутся на действующих электростанциях, подстанциях и линиях электропередачи? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[139][answers][]" value="30209" id="30209">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30209">Организацией, эксплуатирующей электростанцию, подстанцию, линию электропередачи.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[139][answers][]" value="30210" id="30210">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30210">Ростехнадзором.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[139][answers][]" value="30211" id="30211">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30211">Специализированной организацией.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[139][answers][]" value="30212" id="30212">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30212">Организацией, эксплуатирующей ПС.</label>
                                                </div>
                                            </div>
                                            <div class="b-quest-item js-question" id="question8311">
                                                <div class="__quest js-question-block">
                                                    <span>
                                                        140. </span>
                                                    <div>
                                                        Сколько высотных засечек положения одного из поясов главной балки делается при проведении статического испытания мостового крана? </div>

                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[140][answers][]" value="30213" id="30213">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30213">Одна.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[140][answers][]" value="30214" id="30214">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30214">Две.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input data-correct="1" type="radio" name="questions[140][answers][]" value="30215" id="30215">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30215">Три.</label>
                                                </div>
                                                <div class="b-answer js-answer">
                                                    <div class="__checkbox">
                                                        <input type="radio" name="questions[140][answers][]" value="30216" id="30216">
                                                        <i class="--ico-check"></i>
                                                    </div>
                                                    <label class="__answer" for="30216">Четыре.</label>
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
                                            <input type="button" onclick="document.location.href = '/industrial-safety/B9-industrial-safety/B9-block-ticket.php'" class="b-btn js-select-quiz" value="Выбрать другой билет" style="display: none;">
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