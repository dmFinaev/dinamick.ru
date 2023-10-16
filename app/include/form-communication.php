<form action="process_form.php" method="POST">
    <select name="subject">
        <option disabled selected>Тема письма</option>
        <option value="1">Вопрос по курсу</option>
        <option value="2">Личный вопрос</option>
        <option value="3">Отзыв</option>
        <label for="name">Name:</label>
    </select>
    <input type="email" name="email" placeholder="Введите свой email" maxlength="50" required>
    <textarea name="message" placeholder="Введите свое сообщение" maxlength="250" required></textarea>
    <input type="submit" value="Отправить">
</form>