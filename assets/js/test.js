let blocked = false;
$('.js-check-result').click(function (e) {
    e.preventDefault();
    if (blocked) {
        return;
    }

    const $self = $(this);
    blocked = true;
    $('body,html').animate({
        scrollTop: 0
    }, 800);

    let correctCount = 0;
    $('.js-question').each(function (q_index, question) {
        const $question = $(question);
        const $questionBlock = $question.find('.js-question-block');
        $questionBlock.addClass('--dop');
        let correct = true;
        let atLeastOneChecked = false;
        $question.find('.js-answer').each(function (a_index, answer) {
            if ($(answer).find('input').is(':checked')) {
                atLeastOneChecked = true;
            }
        });

        if (atLeastOneChecked) {
            $question.find('.js-answer').each(function (a_index, answer) {
                const $answer = $(answer);
                const $input = $answer.find('input');
                $answer.addClass('--result');
                const answerText = $answer.find('label').html();
                if ($input.data('correct')) {
                    if ($input.is(':checked')) {
                        $answer.addClass('--correct').html('<img src="/img/correct.svg" alt=""><div>' + answerText + '<span>Ваш&nbsp;ответ&nbsp;правильный</span></div>');
                    } else {
                        $answer.addClass('--correct').html('<img src="/img/correct.svg" alt=""><div>' + answerText + '</div>');
                    }
                } else {
                    if ($input.is(':checked')) {
                        correct = false;
                        $answer.addClass('--uncorrect').html('<img src="/img/uncorrect.svg" alt=""><div><span class="--uncorrect-text">' + answerText + '</span><span>Ваш&nbsp;ответ&nbsp;не&nbsp;верен</span></div>');
                    } else {
                        $answer.html('<img src="/img/radio-normal.svg" alt=""><div>' + answerText + '</div>');
                    }
                }
            });
                } else {
                  $question.find('.js-answer').each(function (a_index, answer) {
                const $answer = $(answer);
                const answerText = $answer.find('label').html();
                $answer.addClass('--result --skipped');
                $answer.html('<img src="/img/radio-normal.svg" alt=""><div>' + answerText + '</div>');
                 });
              }

        if (correct && atLeastOneChecked) {
            $questionBlock.addClass('--correct');
            $question.find('.js-found-error').before('<img src="/images/quest/crcorrect.svg" alt="">');
            ++correctCount;
        } else {
            $questionBlock.addClass('--wrong');
            $question.find('.js-found-error').before('<img src="/images/quest/crnocorrect.svg" alt="">');
            if (atLeastOneChecked) {
                $question.find('.js-quest-comment-block').show();
            }
        }
    });

    $('.js-correct-count').html(correctCount);
    $('.js-result-block').show();
    $self.hide();
    $('.js-select-quiz').show();
});





