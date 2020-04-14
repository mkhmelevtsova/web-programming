<?php include "header.php"; ?>
<script src="../Scripts/jqueryvalidation.js"></script>
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
        <label for="sport">Спорт</label> <br>
        <input type="checkbox" name="auto">
        <label for="auto">Автомобили</label> <br>
        <input type="checkbox" name="reading">
        <label for="reading">Чтение</label> <br>
        <input type="checkbox" name="programming">
        <label for="programming">Программирование</label> <br>
        <input type="checkbox" name="gardening">
        <label for="gardening">Садоводство</label> <br>
        <input type="checkbox" name="traveling">
        <label for="traveling">Путешествия</label> <br>
        <input type="checkbox" name="psychology">
        <label for="psychology">Психология</label> <br>
        <input type="checkbox" name="science">
        <label for="science">Наука</label> <br>
        <input type="checkbox" name="boardgames">
        <label for="boardgames">Настольные игры</label> <br>
        <input type="checkbox" name="computergames">
        <label for="computergames">Компьютерные игры</label> <br>
    </div>
</div>
<?php include "footer.php"; ?>