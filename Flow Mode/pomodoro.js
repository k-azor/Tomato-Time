var minutes = 25;
var seconds = "00" ;

var click = new Audio("../assets/Sound/start.mp3");
var ring = new Audio("../assets/Sound/complete.mp3");

function template() {
    document.getElementById("min").innerHTML = minutes;
    document.getElementById("sec").innerHTML = seconds;
}

function start() {
    click.play();

    minutes = 24;
    seconds = 59;

    document.getElementById("min").innerHTML = minutes;
    document.getElementById("sec").innerHTML = seconds;

    var min_interval = setInterval(minTimer, 60000);
    var sec_interval = setInterval(secTimer, 1000);

    function minTimer() {
        minutes -= 1;
        document.getElementById("min").innerHTML = minutes;
    }

    function secTimer() {
        seconds -= 1;
        document.getElementById("sec").innerHTML = seconds;

        if(seconds <= 0) {
            if(minutes <= 0) {
                clearInterval(min_interval);
                clearInterval(sec_interval);

                document.getElementById("done").innerHTML = "Nice work! Time for a break";

                document.getElementById("done").classList.add("completed");

                ring.play();
            }
            seconds = 60;
        }
    }
}