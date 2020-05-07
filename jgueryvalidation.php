<?php include "Views/header.php"; ?>
<script src="<?=SITE_HOST;?>Scripts/jqueryvalidation.js"></script>

<div class="registration-content jquery">
    <div class="reg-area left">
        <p id="name">Имя</p>
        <input type="text" id="name-input">
        <p id="gender">Пол</p>
        <p id="man"><input type="radio" id="man-gender" name="gender" value="Мужской"> Мужской</p>
        <p id="woman"><input type="radio" id="woman-gender" name="gender" value="Женский"> Женский</p>
        <p id="days-label">ДД</p><input type="number" id="days">
        <p id="months-label">ММ</p><input type="number" id="months">
        <p id="years-label">ГГГГ</p><input type="number" id="years">
        <br>
        <input type="button" id="send" value="Отправить">
    </div>
    <div class="interests-registration">
        <button id="mark-all">Отметить все</button>
        <button id="mark-none">Снять выделение</button>
        <button id="mark-invert">Инвертировать</button>
        <br>
        <input type="checkbox" name="sport" id="first-interest-input">
        <label for="first-interest-input">Спорт</label> <br>
        <input type="checkbox" name="auto" id="second-interest-input">
        <label for="second-interest-input">Автомобили</label> <br>
        <input type="checkbox" name="reading" id="third-interest-input">
        <label for="third-interest-input">Чтение</label> <br>
        <input type="checkbox" name="programming" id="fourth-interest-input">
        <label for="fourth-interest-input">Программирование</label> <br>
        <input type="checkbox" name="gardening" id="fifth-interest-input">
        <label for="fifth-interest-input">Садоводство</label> <br>
        <input type="checkbox" name="traveling" id="sixth-interest-input">
        <label for="sixth-interest-input">Путешествия</label> <br>
        <input type="checkbox" name="psychology" id="seventh-interest-input">
        <label for="seventh-interest-input">Психология</label> <br>
        <input type="checkbox" name="science" id="eighth-interest-input">
        <label for="eighth-interest-input">Наука</label> <br>
        <input type="checkbox" name="boardgames" id="ninth-interest-input">
        <label for="ninth-interest-input">Настольные игры</label> <br>
        <input type="checkbox" name="computergames" id="tenth-interest-input">
        <label for="tenth-interest-input">Компьютерные игры</label> <br>
    </div>
</div>
<?php include "Views/footer.php"; ?>