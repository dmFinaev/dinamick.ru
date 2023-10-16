 const headerContainer = document.querySelector('#header');
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


