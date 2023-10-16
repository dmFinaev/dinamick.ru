
<?php

if ($_POST['subject'] == 1) {
  $subject = 'Вопрос по курсу';
} elseif ($_POST['subject'] == 2) {
  $subject = 'Личный вопрос';
} elseif ($_POST['subject'] == 3) {
  $subject = 'Отзыв';
} else {
  $subject = 'Вопрос по курсу';
}
$to = "d_fin@mail.ru";
$from = trim($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($message);

$headers = "From: $from" . "\r\n" . "Reply-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion();
if (mail($to, $subject, $message, $headers)) {
  echo "Письмо отправлено";
} else {
  "Письмо не отправлено";
}
?>