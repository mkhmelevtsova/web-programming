<?php include "Views/header.php"; ?>
<script src="<?=SITE_HOST;?>Scripts/html5validation.js"></script>
<div class="registration-content">
    <div class="reg-area">
        <form>
            <p id="name">Имя</p>
            <input type="text" id="name-input" required>
            <p id="gender">Пол</p>
            <p><input type="radio" id="man-gender" name="gender" value="Man" required> Мужской</p>
            <p><input type="radio" id="woman-gender" name="gender" value="Woman" required> Женский</p>
            <p id="date">День рождения</p><input type="date" id="date-input" max="2002-04-28" required>
            <br>
            <br>
            <input type="submit" id="send" value="Отправить">
        </form>
    </div>
</div>

<?php include "Views/footer.php"; ?>