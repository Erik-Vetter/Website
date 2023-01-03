<?php 
    require("headder.php");
    require('connectDB.php');
?>

        <div class="box">
            <div class="artikel">
                <p class="pageheadline">Pictures</p>
                
            </div>

            <?php
                $db_res = mysqli_query($db_link, "SELECT filename FROM pictures ORDER BY id DESC");
                while($row = mysqlI_fetch_array($db_res))
                {
                    echo('<div class="pictures"><img src='.$row['filename'].'></div>');
                }
            ?>

        </div>


        <?php
            require("footer.php");
        ?>

    </body>


</html>


