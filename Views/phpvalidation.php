<?php
require 'getVariable.php';
// определите переменные и задайте пустые значения
$name = trim(getVariable("name", "", "POST"));
$gender = trim(getVariable("gender", "", "POST"));
$days = trim(getVariable("days", "", "POST"));
$months = trim(getVariable("months", "", "POST"));
$years = trim(getVariable("years", "", "POST"));
$message = "";
$showform = true;

if (getVariable("done", 0, "POST") == 1) {
    $res = ValidateForms($name, $gender, $days, $months, $years);
    if ($res == 0) {
        $message = "Имя введено неверно, введите имя без цифр!";
    } else if ($res == 1) {
        $message = "Ошибка даты рождения";
    } else if ($res == 2) {
        $message = "Ошибка возраста!";
    } else if ($res == 3) {
        $message = "Регистрация прошла успешно!";
        $showform = false;
    }
}

function checkName($name)
{
    if ($name != null && ctype_digit($name) != true) {
        return true;
    }
    return false;
}

function checkAge($days, $months, $years)
{
    $datenow = getdate();
    if (checkdate($months, $days, $years)) {
        if (($datenow['mon'] > $months) || (($datenow['mon'] == $months) && ($datenow['mday'] >= $days)))
            return ($datenow['year'] - $years);
        else
            return $datenow['year'] - $years - 1;
    }
    return 0;
}

function ValidateForms($name, $gender, $days, $months, $years)
{
    $age = checkAge($days, $months, $years);
    if (checkName($name) == false) {
        return 0;
    } else if ($age == 0) {
        return 1;
    } else if ((($gender == "Мужской") && ($age < 21)) || (($gender == "Женский") && ($age < 18))) {
        return 2;
    } else {
        return 3;
    }
}

?>
<?php include "header.php"; ?>
<div class="registration-content">
    <div class="reg-area">

        <form method="POST">
            <?php
            if ($showform) {
            ?>
                <p id="name">Имя</p>
                <input type="text" name="name" id="name-input" value="<?=$name?>">
                <p id="gender">Пол</p>
                <p><input type="radio" id="man-gender" checked name="gender" value="Мужской"> Мужской</p>
                <p><input type="radio" id="woman-gender" name="gender" value="Женский"> Женский</p>
                <p id="days-label">ДД</p><input type="number" name="days" id="days" value="<?=$days?>">
                <p id="months-label">ММ</p><input type="number" name="months" id="months" value="<?=$months?>">
                <p id="years-label">ГГГГ</p><input type="number" name="years" id="years" value="<?=$years?>">
                <br>
                <input type="hidden" value="1" name="done"> 
            <?php
            } else {
            ?>
                <p></p>
            <?php
            }
            ?>
            <div class="center-button">
                <div id="check" class="message">
                    <?php echo $message ?>
                </div>
                <?php if ($showform) { ?>
                    <button type="submit">Зарегистрироваться</button>
                <?php } ?>
            </div>
    </div>
</div>
<?php include "footer.php"; ?>