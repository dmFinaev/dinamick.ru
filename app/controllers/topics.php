


<?php

include SITE_ROOT . "/app/database/db.php";


$errMsg = [];
$id = '';
$name = '';
$description = '';

$topics = selectAll('topics');


// Код для формы создания категории
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])) {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === '') {
        $errMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errMsg = "Категория должна быть более 2-х символов";
    } else {
        $existence = selectOne('topics', ['name' => $name]);
        if ($existence['name'] === $name) {
            $errMsg = "Такая категория уже есть в базе";
        } else {
            $topic = [
                'name' => $name,
                'description' => $description
            ];
            $id = insert('topics', $topic);
            $topic = selectOne('topics', ['id' => $id]);
            header('location: ' . BASE_URL . '/admin/topics/index.php');
        }
    }
} else {
    $name = '';
    $description = '';
}


// Апдейт категории
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === '') {
        $errMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errMsg = "Категория должна быть более 2-х символов";
    } else {
        $topic = [
            'name' => $name,
            'description' => $description
        ];
        $id = $_POST['id'];
        $topic_id = update('topics', $id, $topic);
        header('location: ' . BASE_URL . '/admin/topics/index.php');
    }
}

// Удаление категории
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    delete('topics', $id);
    header('location: ' . BASE_URL . '/admin/topics/index.php');
}
//Отправка письма с формы на email.
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
    $errMsg = "Письмо отправлено";
} else {
    $errMsg = "Письмо не отправлено";
}
// Sending a letter from the form to email.
//if ($_POST['subject'] == 1) {
    //$subject = 'Question about the course';
//} elseif ($_POST['subject'] == 2) {
    //$subject = 'Personal question';
//} elseif ($_POST['subject'] == 3) {
    //$subject = 'Review';
//} else {
    //$subject = 'Question about the course';
//}

//$to = "d_fin@mail.ru";
//$from = trim($_POST['email']);
//$name = htmlspecialchars($_POST['name']);
//$message = htmlspecialchars($_POST['message']);

//$headers = "From: $name <$from>" . "\r\n" .
    //"Reply-To: $from" . "\r\n" .
    //"X-Mailer: PHP/" . phpversion();

//if (mail($to, $subject, $message, $headers)) {
    //$errMsg = "Email sent";
//} else {
    //$errMsg = "Email not sent";
//}
