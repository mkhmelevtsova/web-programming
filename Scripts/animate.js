window.onload = function () {
    document.getElementById('animation').onclick = function () {

        var element = document.getElementById('monets');
        var from = 25; // Начальная координата X
        var to = 100; // Конечная координата X  
        var duration = 1000; // Длительность - 1 секунда
        var start = new Date().getTime(); // Время старта

        function delta(progress, x) {
            return Math.pow(progress, 2) * ((x + 1) * progress - x);
        }

        setTimeout(function () {
            var now = (new Date().getTime()) - start; // Текущее время
            var progress = now / duration; // Прогресс анимации
            if (progress > 1)
                progress = 1;

            var result = (to - from) * delta(progress, 3) + from;

            element.style.marginRight = result + "px";

            if (progress < 1) // Если анимация не закончилась, продолжаем
                setTimeout(arguments.callee, 10);
        }, 10);
    }
}
