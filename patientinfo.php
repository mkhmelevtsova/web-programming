<?php include "Views/header.php"; ?>?>
<script src="<?=SITE_HOST;?>Scripts/patientinfo.js"></script>
<div class="registration-content">
    <div class="reg-area">
        <p id="name">Имя</p>
        <input type="text" id="name-input">
        <p id="gender">Пол</p>
        <p><input type="radio" id="man-gender" name="gender" value="Мужской"> Мужской</p>
        <p><input type="radio" id="woman-gender" name="gender" value="Женский"> Женский</p>
        <p id="days-label">ДД</p><input type="number" id="days">
        <p id="months-label">ММ</p><input type="number" id="months">
        <p id="years-label">ГГГГ</p><input type="number" id="years">
        <br>
        <input type="button" id="send" value="Отправить">
    </div>
</div>
<?php include "Views/footer.php"; ?>