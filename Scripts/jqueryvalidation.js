$(document).ready(function() {

    var gender = "none";
    var name = "none";
    var age = 0;

    String.prototype.hasDigit = function() {
        for (var i = this.length; i--;) {
            if (!isNaN(this[i])) return true;
        }
        return false;
    };

    function checkName() {
        var localName = $('#name-input').val();
        if (localName != null && !localName.hasDigit() && localName != "")
            name = localName;
        else name = "none";
    }

    function checkGender() {
        if ($('#man-gender').prop("checked") == true)
            gender = "man";
        if ($('#woman-gender').prop("checked") == true)
            gender = "woman";
    }

    function checkAge() {
        var localDays = $('#days').val();
        var localMonths = $('#months').val();
        var localYears = $('#years').val();

        var date = new Date();
        if (localDays != null && localDays > 0 && localDays <= 31 &&
            localMonths != null && localMonths > 0 && localMonths <= 12 &&
            localYears != null && localYears > 1900 && localYears <= date.getFullYear()) {
            var nowDay = date.getDate();
            var nowMonth = date.getMonth() + 1;
            var nowYear = date.getFullYear();
            if ((nowMonth > localMonths) || (nowMonth == localMonths) && ((nowDay > localDays) || (nowDay == localDays)))
                age = nowYear - localYears;
            if ((nowMonth < localMonths) || (nowMonth == localMonths) && (nowDay < localDays))
                age = nowYear - localYears - 1;
        }
    }

    function lightElement(element) {
        $(element[0]).addClass("inperror");
    }

    function unlightElement(element) {
        $(element[0]).css("border", "none");
    }

    function validateForms() {
        var errorMessage = "";
        checkGender();
        checkName();
        checkAge();
        if (gender != "none" && age != 0 && name != "none") {
            if ((gender == "man" && age < 21) || (gender == "woman" && age < 18)) {
                lightElement($("#days"));
                lightElement($("#months"));
                lightElement($("#years"));
                alert("Для выбранного пола введен некоректный возраст!");
            } else {
                $(".inperror").removeClass("inperror");
                alert("Вы успешно зарегистрированы");
            }
        } else {
            if (gender == "none") {
                lightElement($("#man"));
                lightElement($("#woman"));
                errorMessage += "Не введен пол!\n";
            } else {
                unlightElement($("#man"));
                unlightElement($("#woman"));
            }
            if (age == 0) {
                lightElement($("#days"));
                lightElement($("#months"));
                lightElement($("#years"));
                errorMessage += "Не введен возраст!\n";
            } else {
                unlightElement($("#days"));
                unlightElement($("#months"));
                unlightElement($("#years"));
            }
            if (name == "none") {
                lightElement($("#name-input"));
                errorMessage += "Не введено имя!\n";
            } else {
                unlightElement($("#name-input"));
            }
            alert(errorMessage);
        }
    }

    $('#send').click(validateForms);

    $("#mark-all").click(function() {
        $("input[type='checkbox'").prop('checked', true);
    });

    $("#mark-none").click(function() {
        $("input[type='checkbox'").prop('checked', false);
    });

    $("#mark-invert").click(function() {
        var checkboxes = $("input[type='checkbox']");
        console.log(checkboxes);
        for (checkbox of checkboxes) {
            console.log(checkbox);
            if (checkbox.checked == true) {
                checkbox.checked = false;
            } else {
                checkbox.checked = true;
            }
        };
    })
})