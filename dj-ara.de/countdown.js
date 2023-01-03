const days = document.getElementById('days');
const hours = document.getElementById('hours');
const minutes = document.getElementById("minutes");
const seconds = document.getElementById("seconds");

const CountdownTime = json_encode($Datum);
//const CountdownTime = new Date("April 1 2022 00:00:00");

function UpdateCountdownTime(){
    const currentTime = new Date();
    const TimeDifference = CountdownTime - currentTime;

    const daysCalculated = Math.floor(TimeDifference / 1000/60/60/24);
    const hoursdaysCalculated = Math.floor(TimeDifference / 1000/60/60/24) % 24;
    const minutesCalculated = Math.floor(TimeDifference / 1000/60) % 60;
    const secondsCalculated = Math.floor(TimeDifference / 1000) %60;

    days.textContent = daysCalculated;
    hours.textContent = hoursdaysCalculated < 10 ? '0' + hoursdaysCalculated : hoursdaysCalculated;
    minutes.textContent = minutesCalculated < 10 ? '0' + minutesCalculated : minutesCalculated;
    seconds.textContent = secondsCalculated < 10 ? '0' + secondsCalculated : secondsCalculated;

    console.log(secondsCalculated);
}

setInterval(UpdateCountdownTime, 1000);