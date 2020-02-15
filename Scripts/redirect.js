window.onload = function () {

  document.getElementById('time').innerText = '0';
  var timeNumber = 0;

  function redirect() {
    document.location.replace("home.php");
  }

  function count() {
    timeNumber += 1;
    document.getElementById('time').innerText = timeNumber;
  }

  this.setTimeout(redirect, 3000);
  this.setInterval(count, 1000);
}