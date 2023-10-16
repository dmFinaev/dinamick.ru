
const questions = [
{
question: "Могут ли наказания, штрафы и запреты мотивировать сотрудников на безопасный труд?",
answers: ["Не могут. Сотрудник не перестанет нарушать и продолжит работать «по принуждению» и «на автомате». Такой сотрудник уже не будет задумываться о последствиях", "Могут. Сотрудник будет замотивирован получить премию в полном объеме и перестанет нарушать", "Могут. Чем сильнее напугаешь человека – тем выше мотивация"],
correct: 1,
},
{
question: "Что делать с теми сотрудниками, которые не прошли обучение и инструктаж по охране труда?",
answers: ["Уволить", "Не допускать к работе", "Применить к ним дисциплинарное взыскание - замечание или выговор", "Аннулировать трудовой договор"],
correct: 2,
},
{
question: "Какой объем практических занятий необходимо включить в обучение оказанию первой помощи пострадавшим на производстве?",
answers: ["Не менее 50 % практических занятий", "Не менее 20 % практических занятий", "Не менее 80 % практических занятий", "Вся программа обучения должна быть построена на практике"],
correct: 1,
},

{
question: "Могут ли привлечь лицо, которое обязано соблюдать требования охраны труда на определенном участке работ в силу служебного положения, к уголовной ответственности за нарушение охраны труда?",
answers: ["Нет, возможна только административная ответственность", "Да, могут", "Могут привлечь только руководителя компании"],
correct: 2,
},
                    
{
question: "В каком случае провести внеплановую СОУТ в течение двенадцати месяцев?",
answers: ["Если ввели новые рабочие места", "Если поменяли оборудование", "Если поменяли технологию производства", "Верно все вышеперечисленное"],
correct: 4,
},
{
question: "Вы вызвали скорую пострадавшему, но не можете дозвониться до руководителя и сообщить о происшествии. Можете ли вы приступить к оказанию первой помощи?",
answers: ["Нет, не могу. Необходимо сначала сообщить о несчастном случае руководителю, затем можно оказывать помощь", "Да, могу. Чем быстрее начну оказывать помощь, тем выше шансы на спасение"],
correct: 2,
},
{
question: "Можно ли оценить эффективность СУОТ при введении новых технологий производства в организации?",
answers: ["Нельзя, оценку СУОТ проводят при других обстоятельствах", "Нельзя, проводят только периодическую оценку во время планирования бюджета на СУОТ", "Можно, в качестве внеочередной оценки эффективности"],
correct: 3,
},
{
question: "Если инспектор выявит нарушения в порядке проведения спецоценки условий труда, какой штраф наложат на организацию? ",
answers: ["От 130 000 до 200 000 рублей", "От 60 000 до 80 000 рублей", "От 20 000 до 50 000 рублей"],
correct: 3,
},
{
question: "Обязан ли работодатель создать систему управления охраной труда в организации?",
answers: ["Да", "По своему усмотрению", "От 20 000 до 50 000 рублей"],
correct: 1,
},
{
question: "Обязан ли работник немедленно извещать своего непосредственного руководителя о любой ситуации, угрожающей здоровью людей?",
answers: ["Нет, извещать нужно только о несчастных случаях", "Нет, только о чрезвычайной ситуации", "Да"],
correct: 1,
},
{
question: "От какого показателя зависит количество душевых на предприятии?",
answers: ["Класс условий труда на конкретных рабочих местах", "Количество работников на всем предприятии", "Количество работников в многочисленную смену"],
correct: 3,
},
{question: "Как действовать, если работник должен пройти обучение по нескольким программам?",
answers: ["Выбрать одну программу обучения, которая наиболее подходит сотруднику", "Сотрудника нужно обучить отдельно по каждой программе", "Работодатель вправе снизить минимальную продолжительность обучения, если сотрудник проходит все три программы обучения. Тогда сотрудник обязан учиться не менее 40 часов"],
correct: 3,
},
{
question: "Могут ли работники участвовать в управлении охраной труда?",
answers: ["Да, могут при условии, что прошли специальное обучение по охране труда", "Нет, не могут", "Да, могут"],
correct: 3,
},
{
question: "Как организовать комнату приема пищи, если на предприятии работают инвалиды на креслах-колясках?",
answers: ["Прибавить к площади комнаты 1,65 кв.м на каждого работника с ограниченными возможностями", "Прибавить к площади комнаты 3 кв.м на каждого работника с ограниченными возможностями", "Прибавить к площади комнаты 1 кв.м на каждого работника с ограниченными возможностями"],
correct: 1,
},
{
question: "В какой срок проводить внеплановое обучение после актуализации программ обучения?",
answers: ["В течение 60 дней после актуализации программ", "В течение 30 дней после актуализации программ", "В течение 60 дней до актуализации программ"],
correct: 1,
},
{question: "Когда нужно проинформировать работника, если условия на рабочем месте отнесли к опасным?",
answers: ["В течение 30 рабочих дней", "В течение 30 календарных дней", "Немедленно"],
correct: 3,
},
{
question: "Какой срок носки теплых СИЗ?",
answers: ["Срок носки теплых СИЗ определяют по климатическому поясу", "Срок носки теплых СИЗ определяет сам работник", "Срок носки теплых СИЗ указывают в результатах СОУТ"],
correct: 1,
},
{
question: "Какая задача стоит перед работодателем, когда он организует СУОТ?",
answers: ["Распределить права по охране труда на всех уровнях управления", "Распределить задачи по охране труда на всех уровнях управления", "Распределить обязанности по охране труда на всех уровнях управления "],
correct: 3,
},
{
question: "Какие работодатели обязаны создать и обеспечить функционирование системы управления охраной труда? ",
answers: ["Только ИП", "Только ООО, АО", "Организации с численностью сотрудников от 10 человек, в независимости от формы собственности", "Организации с численностью сотрудников от 50 человек, в независимости от формы собственности", "Все работодатели обязаны создать и обеспечить функционирование системы управления охраной труда"],
correct: 5,
},
{
question: "Как действовать работодателю, если сроки планового и внепланового обучения совпадают?",
answers: ["Провести только плановое обучение", "Провести только внеплановое обучение", "Провести и оформить оба обучения"],
correct: 1,
},
{question: "Какой документ оформить, чтобы задокументировать результаты оценки профрисков? ",
answers: ["Приказ о результатах оценки профрисков", "Реестр профессиональных рисков", "Документ оформлять не нужно"],
correct: 2,
},
{
question: "Кто утверждает реестр опасностей в организации? ",
answers: ["Специалист по охране труда", "Руководитель организации или его заместитель, уполномоченный по охране труда", "Ответственный за проведение оценки профрисков", "Заместитель руководителя, уполномоченный по охране труда"],
correct: 2,
},
{
question: "Можно ли компенсацию в виде молока заменить денежной выплатой?",
answers: ["Да, с согласия работника и профсоюза", "Нет, молоко можно заменить только равноценными продуктами"],
correct: 1,
},
{
question: "Где можно обучить сотрудников безопасным методам и приемам выполнения работ?",
answers: ["В любом месте", "В учебной лаборатории, мастерских участках, цехах или полигонах"],
correct: 2,
},
{
question: "С какой периодичностью проводить обучение по общим вопросам охраны труда и функционированию систему управления охраной труда?",
answers: ["Один раз в год", "Один раз в три года", "Один раз в пять лет"],
correct: 1,
},
{
question: "При какой численности работников, работодатель обязан ввести должность специалиста по охране труда в штатное расписание?",
answers: ["от 50 и выше", "равное 50 и выше", "Если имеются Работники, должен быть специалист по охране труда"],
correct: 1,
},
{
question: "Обязан ли работодатель информировать сотрудников об условиях и охране труда? ",
answers: ["Да, обязан", "Нет, не обязан"],
correct: 1,
},
{
question: "Когда нужно проводить обучение приемам и методам безопасного выполнения работ? ",
answers: ["Когда переводите сотрудника на другую работу", "Когда принимаете на работу сотрудника или переводите на другую", "Когда принимаете нового сотрудника"],
correct: 2,
},
{
question: "Можно ли обучить сотрудников вопросам охраны труда, используя дистанционные технологии?",
answers: ["Нет, дистанционные технологии использовать запрещено", "Да, обучающие организации и работодатель вправе использовать дистанционные технологии, чтобы обучить сотрудников", "Да, но только если обучают руководителя организации"],
correct: 2,
},
{
question: "На каком этаже разместить туалет, если на двух смежных этажах работают 30 и менее человек? ",
answers: ["На первом этаже", "На втором", "На этаже, где больше работников", "В таком случае туалет можно не размещать"],
correct: 3,
},
{
question: "Могут ли работники участвовать в управлении охраной труда?",
answers: ["Да, могут при условии, что прошли специальное обучение по охране труда", "Нет, не могут", "Да, могут"],
correct: 3,
},
{
question: "Могут ли наказания, штрафы и запреты мотивировать сотрудников на безопасный труд?",
answers: ["Не могут. Сотрудник не перестанет нарушать и продолжит работать «по принуждению» и «на автомате». Такой сотрудник уже не будет задумываться о последствиях", "Могут. Сотрудник будет замотивирован получить премию в полном объеме и перестанет нарушать", "Могут. Чем сильнее напугаешь человека – тем выше мотивация"],
correct: 1,
},
{
question: "Можно ли сократить рабочее время сотрудников за счет обеденного перерыва?",
answers: ["Да, можно", "Нет, нельзя. Это прямое нарушение Трудового кодекса"],
correct: 2,
},
{
question: "Что такое микротравма?",
answers: ["Небольшое повреждение, которое получил сотрудник, например порезал палец канцелярской бумагой.", "Понятия микротравма в законе нет.", "Повреждение кожи более 50%."],
correct: 1,
},
{
question: "Можно ли проверять дыхание пострадавшего с помощью зеркальца или перышка?",
answers: ["Да, можно. Проверить дыхание можно любым способом. Чем больше способов - тем лучше", "Нет, нельзя. Есть риск неправильно оценить состояние пострадавшего"],
correct: 2,
},
{
question: "Как влияет мотивация сотрудников на травматизм?",
answers: ["Травматизм – это результат низкой мотивации на безопасный труд", "Никак не влияет. Мотивация – это одно, а незнание правил безопасности – это другое"],
correct: 1,
 },
{
question: "Кто разрабатывает карты оценки профрисков?",
answers: ["Ответственный за оценку профрисков", "Руководитель организации", "Руководители структурных подразделений"],
correct: 1,
},
{
question: " В каком документе узнать характер и степень тяжести травмы?",
answers: ["Медицинское заключение по форме 316/у", "Медицинское заключение по форме 315/у", "Протокол опроса пострадавшего по форме № 8"],
correct: 2,
},
{
question: "Что необходимо сделать, прежде чем оказать первую помощь пострадавшему?",
answers: ["Осмотреть место происшествия", "Сообщить руководителю о несчастном случае", "Позвать коллег"],
correct: 1,
},
{
question: "Кому положена компенсация в виде повышенной оплаты труда не менее 4 процентов?",
answers: ["Всем работникам с вредными и опасными условиями труда", "Работникам с классами условий труда 3.3, 3.4, 4", "Работникам с классом условий труда 3.1"],
correct: 1,
},
{
question: "Комиссии по расследованию НС нужны сведения о том, был ли погибший на момент несчастного случая, в алкогольном или наркотическом опьянении. За чей счет будет проводиться исследование?",
answers: ["За счет председателя комиссии", "За счет работодателя", "За общий счет комиссии", "За счет государства", "За счет пострадавшего"],
correct: 2,
},
{
question: "Обязательно ли обучать сотрудников вопросам лидерства в охране труда и мотивации на безопасный труд? ",
answers: ["Нет, не обязательно. Работодатель решает сам", "Да, обязательно", "Сотрудников не нужно обучать таким вопросам"],
correct: 2,
},
{
question: "Когда нужно проинформировать работника, если условия на рабочем месте отнесли к опасным?",
answers: ["В течение 30 рабочих дней", "В течение 30 календарных дней", "Немедленно"],
correct: 3,
},
{
question: "В какой срок нужно направить сообщение о последствиях несчастного случая на производстве и принятых мерах в ГИТ?",
answers: ["В течение 10 календарных дней после завершения расследования, а если НС смертельный – в течение месяца", "В течение месяца", "В течение 15 календарных дней"],
correct: 1,
},
{
question: "Что использовать при составлении норм выдачи СИЗ, если профессии работника нет в отраслевых и межотраслевых типовых нормах по виду деятельности и сквозных типовых нормах?",
answers: ["Типовые нормы для работников, профессии которых характерны для выполняемых работ", "Ничего, если профессии нет – не выдавать СИЗ", "Типовые нормы бесплатной выдачи работникам смывающих или обезвреживающих средств"],
correct: 1,
},
{
question: "Нужно ли оформлять больничный при микротравме?",
answers: ["Да.", "Нет, не нужно.", "Больничный оформляется всегда.", "Первым делом оформляется больничный, а только потом расследуется микротравма."],
correct: 2,
},
{
question: "Включают ли обучение по использованию СИЗ в общий объем обучения по охране труда?",
answers: ["Нет, не включают. Необходимо обучить отдельно или добавить дополнительные часы", "Да, можно включить в общий объем"],
correct: 1,
},
{
question: "СОУТ не проводят в отношении:",
answers: ["Надомников","Дистанционных работников", "Работников, которые работают на физических лиц", "Работников, которые работают на религиозные организации", "Вакантных рабочих мест", "Рабочих мест госслужащих и муниципальных служащих", "Верно все вышеперечисленное"],
correct: 7,
},
{
question: "Как часто проводить плановую СОУТ?",
answers: ["Не реже одного раза в три года", "Не реже одного раза в пять лет", "Ежегодно"],
correct: 2,
},
{
question: "Вправе ли работодатель самостоятельно разработать свою форму реестра профрисков?",
answers: ["Да, вправе", "Нет, не вправе"],
correct: 1,
},
{
question: "Какие обязательные меры обязан предпринять работодатель в сфере охраны труда?",
answers: ["Разработать и исполнять систему управления охраной труда (СУОТ)", "Разработать и исполнять комплекс мер, направленных на сохранение жизни и здоровья работников, в частности: систему управления охраной труда (СУОТ), управление профрисками, мероприятия по охране труда, провести спецоценку, утвердить обязанности Руководителей и Работника в части охраны труда", "Провести Спецоценку на рабочих местах, утвердить обязанности Руководителей и Работника в части охраны труда"],
correct: 2,
},
{
question: "Могут ли привлечь лицо, которое обязано соблюдать требования охраны труда на определенном участке работ в силу служебного положения, к уголовной ответственности за нарушение охраны труда?",
answers: ["Нет, возможна только административная ответственность", "Да, могут", "Могут привлечь только руководителя компании"],
correct: 2,
},
{
question: "Можно ли включить в Коллективный договор условия, которые не предусмотрены законодательством? ",
answers: ["Можно, если они не ухудшают положение Работников в соответствии с действующим законодательством и иными нормативными правовыми актами, содержащими нормы трудового права", "Нельзя, необходимо действовать согласно рекомендуемого Макета Коллективного договора (утв. Минтрудом России 06.11.2003)"],
correct: 1,
},
{
question: "Кто является сторонами Коллективного договора? ",
answers: ["Работники и Работодатель", "Работники и Работодатель, а также профсоюз", "Работники и Работодатель в лице их представителей"],
correct: 3,
},
{
  question: "Какие условия обязательны к включению в Коллективный договор?",
  answers: ["Условия включают в зависимости от решения работников и работодателя", "Условия по финансированию мероприятий по улучшению условий и охране труда, спецоценке, нормам выдачи СИЗ, обязанности работника и работодателя в части охраны труда", "Создание службы охраны труда, выделение должности специалиста по охране труда в организации, при численности работников более 50 человек"],
  correct: 1,
  },
  {
    question: "Какая статья Трудового кодекса устанавливает обязанности работника в сфере охраны труда?",
    answers: ["Статья 212", "Статья 215", "Статья 57"],
    correct: 2,
    },
    {
      question:"Условием для привлечения к уголовной ответственности является:",
      answers: ["Причинение тяжкого вреда здоровью, причинение смерти, причинение крупного ущерба", "Причинение смерти", "Любые последствия, в результате которых наступил вред здоровью работника"],
      correct: 1,
      },
      {
        question: "Кого могут привлечь к уголовной ответственности за нарушение охраны труда? ",
        answers: ["Работника и работодателя", "Должностных лиц и организации", "Только физических лиц"],
        correct: 3,
        },
        {
          question: "Существует ли ответственность должностных лиц за нарушение правил техники безопасности работ, когда последние проводились на основании договора подряда?",
          answers: ["Ответственность по данной категории преступлений предусматривается за любые действия, в результате которых при нарушении правил охраны труда был причинен вред здоровью средней тяжести", "Ответственность по данной категории преступлений не предусматривается<", "Ответственность по данной категории преступлений предусматривается лишь за неосторожное действие (бездействие), в результате которых при нарушении правил охраны труда был причинен тяжкий вред здоровью"],
          correct: 3,
          },
          {
            question: "Обязан ли работодатель создать систему управления охраной труда в организации?",
            answers: ["Да", "По своему усмотрению"],
            correct: 1,
            },
            {
              question:"Какие вопросы помогут оценить эффективность СУОТ?",
              answers: ["Требуется ли вносить изменения в систему?", "Достигнуты ли цели в области охраны труда?", "Эффективны ли действия, которые наметили по результатам предыдущих анализов?", "Нужно ли менять критерии оценки эффективности СУОТ?", "Все перечисленные вопросы"],
              correct: 5,
              },
              {
                question: "Что войдет в меры по совершенствованию СУОТ, если изменилась организационная структура компании?",
                answers: ["Перераспределение трудовых функций работников", "Объединение сотрудников в комитет по охране труда", "Перераспределение обязанностей между должностными лицами"],
                correct: 3,
                },
                
                  {
                    question: " Как организовать места для курения на предприятии?",
                    answers: ["Разместить на улице, не обозначая соответствующим знаком", "Разместить во всех санитарно-бытовых помещениях, обозначить территорию соответствующим знаком", "Разместить на улице, обозначить территорию соответствующим знаком"],
                    correct: 2,
                    },
                    
                     
];

/*const headerContainer = document.querySelector('#header');
const listContainer = document.querySelector('#list');
const submitBtn = document.querySelector('#submit');

let score = 0;
let questionIndex = 0;
let selectedQuestions = [];

clearPage();
showQuestion();
submitBtn.onclick = checkAnswer;*/









 
/*const headerContainer = document.querySelector('#header');
const listContainer = document.querySelector('#list');
const submitBtn = document.querySelector('#submit');

let score = 0;
let questionIndex = 0;
let selectedQuestions = [];

clearPage();
showQuestion();
submitBtn.onclick = checkAnswer;

function clearPage() {
  headerContainer.innerHTML = '';
  listContainer.innerHTML = '';
}

function getRandomQuestions(questions, n) {
  if (n >= questions.length) {
    return questions;
  } else {
    const shuffled = questions.slice(0);
    for (let i = shuffled.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
    }
    return shuffled.slice(0, n);
  }
}

function showQuestion() {
  selectedQuestions = getRandomQuestions(questions, 10); // Выбираем 10 случайных вопросов
  const currentQuestion = selectedQuestions[questionIndex];

  const headerTemplate = `<div>%title%</div>`;
  const title = headerTemplate.replace('%title%', currentQuestion['question']);
  headerContainer.innerHTML = title;

  let answerNumber = 1;
  for (item of currentQuestion['answers']) {
    const questionTemplate = ` <div class="b-answer js-answer" id="list">
      <div class="__checkbox">
          <input type="radio" name="answer" value="%number%" id="">
          <i class="--ico-check"></i>
      </div>
      <label class="__answer" for="">%answer%</label>
    </div>`;

    const answerHTML = questionTemplate.replace('%answer%', item).replace('%number%', answerNumber);
    listContainer.innerHTML += answerHTML;
    answerNumber++;
  }
}

function checkAnswer() {
  const checkedRadio = listContainer.querySelector('input[type="radio"]:checked');
  if (!checkedRadio) {
    submitBtn.blur();
    return;
  }
  const userAnswer = parseInt(checkedRadio.value);
  const currentQuestion = selectedQuestions[questionIndex];
  if (userAnswer === currentQuestion['correct']) {
    score++;
  }
  if (questionIndex !== selectedQuestions.length - 1) {
    questionIndex++;
    clearPage();
    showQuestion();
  } else {
    clearPage();
    showResults();
  }
}

function showResults() {
  const resultsTemplate = `
    <div class="b-answer js-answer" id="list">
      <div class="container">
        <div class="row">
          <h2>%title%</h2>
        </div>
        <h3>%message%</h3>
        <p>%result%</p>
      </div>
    </div>
  `;

  let title, message;

  if ((score * 100) / selectedQuestions.length >= 50) {
    title = 'Хороший результат!';
    message = 'Вы прошли итоговое тестирование';
  } else {
    title = 'Попробуйте еще!';
    message = 'Вы не прошли итоговое тестирование';

    submitBtn.innerHTML = 'Начать заново!';
    submitBtn.onclick = () => history.go();
  }

  const resultText = score === 1 ? 'правильный ответ' : 'правильных ответа';
  let result = `${score} ${resultText} из ${selectedQuestions.length}`;

  const finalMessage = resultsTemplate.replace('%title%', title).replace('%message%', message).replace('%result%', result);

  headerContainer.innerHTML = finalMessage;

  //submitBtn.blur();
  submitBtn.style.display = 'none';
}
/*const headerContainer = document.querySelector('#header');
const listContainer = document.querySelector('#list');
const submitBtn = document.querySelector('#submit');

let score = 0;
let questionIndex = 0;
let selectedQuestions = [];
let attempts = 3; // Устанавливаем максимальное количество попыток

clearPage();
showQuestion();
submitBtn.onclick = checkAnswer;

function clearPage() {
  headerContainer.innerHTML = '';
  listContainer.innerHTML = '';
}

function getRandomQuestions(questions, n) {
  if (n >= questions.length) {
    return questions;
  } else {
    const shuffled = questions.slice(0);
    for (let i = shuffled.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
    }
    return shuffled.slice(0, n);
  }
}

function showQuestion() {
  if (attempts === 0) {
    clearPage();
    showResults();
    return;
  }
  selectedQuestions = getRandomQuestions(questions, 10);
  const currentQuestion = selectedQuestions[questionIndex];

  const headerTemplate = `<div>%title%</div>`;
  const title = headerTemplate.replace('%title%', currentQuestion['question']);
  headerContainer.innerHTML = title;

  let answerNumber = 1;
  for (item of currentQuestion['answers']) {
    const questionTemplate = ` <div class="b-answer js-answer" id="list">
      <div class="__checkbox">
          <input type="radio" name="answer" value="%number%" id="">
          <i class="--ico-check"></i>
      </div>
      <label class="__answer" for="">%answer%</label>
    </div>`;

    const answerHTML = questionTemplate.replace('%answer%', item).replace('%number%', answerNumber);
    listContainer.innerHTML += answerHTML;
    answerNumber++;
  }
}

function checkAnswer() {
  if (attempts === 0) {
    clearPage();
    showResults();
    return;
  }
  const checkedRadio = listContainer.querySelector('input[type="radio"]:checked');
  if (!checkedRadio) {
    submitBtn.blur();
    return;
  }
  const userAnswer = parseInt(checkedRadio.value);
  const currentQuestion = selectedQuestions[questionIndex];
  if (userAnswer === currentQuestion['correct']) {
    score++;
  } else {
    attempts--; // Уменьшаем количество попыток при неверном ответе
  }
  if (questionIndex !== selectedQuestions.length - 1) {
    questionIndex++;
    clearPage();
    showQuestion();
  } else {
    clearPage();
    showResults();
  }
}

function showResults() {
  const resultsTemplate = `
    <div class="b-answer js-answer" id="list">
      <div class="container">
        <div class="row">
          <h2>%title%</h2>
        </div>
        <h3>%message%</h3>
        <p>%result%</p>
      </div>
    </div>
  `;

  let title, message;

  if (score >= 5) {
    title = 'Неплохой результат!';
    message = 'Вы прошли итоговое тестирование';
  } else {
    title = 'Попробуйте еще!';
    message = 'Вы не прошли итоговое тестирование';

    submitBtn.innerHTML = 'Начать заново!';
    submitBtn.onclick = () => history.go();
  }

  const resultText = score === 1 ? 'правильный ответ' : 'правильных ответа';
  let result = `${score} ${resultText} из ${selectedQuestions.length}`;

  const finalMessage = resultsTemplate.replace('%title%', title).replace('%message%', message).replace('%result%', result);

  headerContainer.innerHTML = finalMessage;

  submitBtn.blur();
}
/*const headerContainer = document.querySelector('#header');
const listContainer = document.querySelector('#list');
const submitBtn = document.querySelector('#submit');

let score = 0;
let questionIndex = 0;
let attempts = 0;
const maxAttempts = 3;
const questionsPerAttempt = 10;
const requiredCorrectAnswers = 5;
let currentQuestions = [];

clearPage();
showQuestion();
submitBtn.onclick = checkAnswer;

function clearPage() {
  headerContainer.innerHTML = '';
  listContainer.innerHTML = '';
}

function getRandomQuestions(questions, n) {
  if (n >= questions.length) {
    return questions;
  } else {
    const shuffled = questions.slice(0);
    for (let i = shuffled.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
    }
    return shuffled.slice(0, n);
  }
}

function showQuestion() {
  currentQuestions = getRandomQuestions(questions, questionsPerAttempt);
  const currentQuestion = currentQuestions[questionIndex];

  const headerTemplate = `<div>%title%</div>`;
  const title = headerTemplate.replace('%title%', currentQuestion['question']);
  headerContainer.innerHTML = title;

  listContainer.innerHTML = '';

  let answerNumber = 1;
  for (item of currentQuestion['answers']) {
    const questionTemplate = ` <div class="b-answer js-answer" id="list">
      <div class="__checkbox">
          <input type="radio" name="answer" value="%number%" id="">
          <i class="--ico-check"></i>
      </div>
      <label class="__answer" for="">%answer%</label>
    </div>`;

    const answerHTML = questionTemplate.replace('%answer%', item).replace('%number%', answerNumber);
    listContainer.innerHTML += answerHTML;
    answerNumber++;
  }
}

function checkAnswer() {
  const checkedRadio = listContainer.querySelector('input[type="radio"]:checked');
  if (!checkedRadio) {
    submitBtn.blur();
    return;
  }
  const userAnswer = parseInt(checkedRadio.value);
  const currentQuestion = currentQuestions[questionIndex];
  if (userAnswer === currentQuestion['correct']) {
    score++;
  }
  if (questionIndex !== questionsPerAttempt - 1) {
    questionIndex++;
    showQuestion();
  } else {
    questionIndex = 0;
    attempts++;

    showResult(score, attempts);

    if (attempts >= maxAttempts || score >= requiredCorrectAnswers) {
      submitBtn.style.display = 'none';
    } else {
      score = 0;
      showQuestion();
    }
  }
}

function showResult(score, attempts) {
  const resultTemplate = `
    <div class="b-answer js-answer" id="list">
      <div class="container">
        <div class="row">
          <h2>%title%</h2>
        </div>
        <h3>%message%</h3>
        <p>%result%</p>
      </div>
    </div>
  `;

  let title, message;

  if (score >= requiredCorrectAnswers) {
    title = 'Поздравляем';
    message = 'Вы успешно прошли тест';
  } else if (attempts >= maxAttempts) {
    title = 'Извините';
    message = 'Доступ к тесту заблокирован';
  } else {
    title = 'Попробуйте еще раз';
    message = 'Вы не прошли тест';
  }

  const resultText = score === 1 ? 'правильный ответ' : 'правильных ответа';
  let result = `${score} ${resultText} из ${questionsPerAttempt}`;

  const finalMessage = resultTemplate.replace('%title%', title).replace('%message%', message).replace('%result%', result);

  headerContainer.innerHTML = finalMessage;
}*/