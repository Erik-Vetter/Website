<?php
    $db_res = mysqli_query($db_link, "SELECT name, year, month, day FROM countdown");

        if(mysqli_num_rows($db_res)==1)
        {
            while($row = mysqli_fetch_array($db_res))
            {
                $countdownName = $row['name'];
                $tag = $row['day'];
                $monat = $row['month'];
                $jahr = $row['year'];
            }
            $CountTime = mktime(21,0,0,$monat-1,$tag,$jahr);
            $TimeDiff = $CountTime - time();       
            if($TimeDiff < 0){

?>
                <script>
                        var tag = <?=$tag?>;
                        var monat = <?=$monat?>;
                        var jahr = <?=$jahr?>;
                        CountdownTime = new Date(jahr,monat-1,tag);
                        const currentTime = new Date();
                        const TimeDifference = CountdownTime - currentTime;
                </script>

                <div class="time-box">

                    <?php
                        echo('<div class="time-head"><h1>'.$countdownName.'</h1></div>');
                    ?>                

                    <div class="time">
                        <p class ="time-head">Days</p>
                        <h2 id="days">00</h2>
                    </div>
                    
                    <div class="time">
                        <p class ="time-head">Hours</p>   
                        <h2 id="hours">00</h2>
                    </div>
                    
                    <div class="time">
                        <p class ="time-head">Minutes</p>   
                        <h2 id="minutes">00</h2>
                    </div>
                    
                    <div class="time">
                        <p class ="time-head">Seconds</p>
                        <h2 id="seconds">00</h2>
                    </div>   
                    
                    <script>
                        const days = document.getElementById('days');
                        const hours = document.getElementById('hours');
                        const minutes = document.getElementById("minutes");
                        const seconds = document.getElementById("seconds");




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

                            console.log(CountdownTime);
                        }

                        setInterval(UpdateCountdownTime, 1000);
                    </script>
                </div>
<?php }}?>
