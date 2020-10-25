var interval;
$(document).on('mousemove', function () {
    clearInterval(interval);
    var coutdown = 60 * 60, $timer = $('.timer'); // After 5 minutes session expired  (mouse button click code)
    $timer.text(coutdown);
    interval = setInterval(function () {
        $timer.text(--coutdown);

        if (coutdown === 0) {

            alert("User is logged out due to inactivity.");
            window.location = "/Dummy/redirect.php";
        }

    }, 1000);
}).mousemove();

var interval;
$(document).on('keydown', function () {
    clearInterval(interval);
    var coutdown = 5 * 60, $timer = $('.timer'); // After 5 minutes session expired (keyboard button press code)
    $timer.text(coutdown);
    interval = setInterval(function () {
        $timer.text(--coutdown);

        if (coutdown === 0) {

            alert("User is logged out due to inactivity.");
            window.location = "/Dummy/redirect.php";
        }

    }, 1000);
}).mousemove();