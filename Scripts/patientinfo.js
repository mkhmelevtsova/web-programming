window.onload = function () {

    var gender = "none";
    var name = "none";
    var age = 0;

    String.prototype.hasDigit = function () {
        for (var i = this.length; i--;) {
            if (!isNaN(this[i])) return true;
        }
        return false;
    };

    function checkName() {
        var localName = document.getElementById('name-input').value;
        if (localName != null && !localName.hasDigit())
            name = localName;
        else name = "none";
    }

    function checkGender() {
        if (document.getElementById('man-gender').checked == true)
            gender = "man";
        if (document.getElementById('woman-gender').checked == true)
            gender = "woman";
    }

    function checkAge() {
        var localDays = document.getElementById('days').value;
        var localMonths = document.getElementById('months').value;
        var localYears = document.getElementById('years').value;

        var date = new Date();
        if (localDays != null && localDays > 0 && localDays <= 31
            && localMonths != null && localMonths > 0 && localMonths <= 12
            && localYears != null && localYears > 1900 && localYears <= date.getFullYear()) {
            var nowDay = date.getDate();
            var nowMonth = date.getMonth() + 1;
            var nowYear = date.getFullYear();
            if ((nowMonth > localMonths) || (nowMonth == localMonths) && ((nowDay > localDays) || (nowDay == localDays)))
                age = nowYear - localYears;
            if ((nowMonth < localMonths) || (nowMonth == localMonths) && (nowDay < localDays))
                age = nowYear - localYears - 1;
        }
    }

    function validateForms() {
        checkGender();
        checkName();
        checkAge();
        if (gender != "none" && age != 0 && name != "none") {
            if ((gender == "man" && age < 21) || (gender == "woman" && age < 18)) {
                alert("Нельзя зарегистрироваться");
            }
            else alert("Вы успешно зарегистрированы");
        }
        else alert("Нельзя зарегистрироваться");
    }

    document.getElementById('send').onclick = validateForms;
}