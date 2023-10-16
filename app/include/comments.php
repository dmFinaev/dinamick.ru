<?php

include SITE_ROOT . "/app/controllers/commentaries.php";
?>
<div class="col-md-12 col-12 comments">
    <h3>Написать вопрос администратору курса</h3>
    <form action="<?= BASE_URL . "/single.php?post=$page" ?>" method="post">
        <input type="hidden" name="page" value="<?= $page; ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email адрес (при регистрации)</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Напишите ваши вопрос</label>
            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" name="goComment" class="btn btn-primary">Отправить</button>
        </div>
    </form>

    <div class="row all-comments">
        <h3 class="col-12"></h3>
        <?php foreach ($commentsForAdm as $comment) : ?>
            <div class="one-comment col-12">
                <span><?= $comment['email']  ?></span>
                <span><?= $comment['created_date']  ?></span>
                <div class="col-12 text">
                    <?= $comment['comment']  ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</div>