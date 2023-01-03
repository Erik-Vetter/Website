<?php 
    require("headder.php");
    require('connectDB.php');
?>

        <div class="box">
            <div class="artikel">
                <p class="pageheadline">Releases</p>
                
            </div>

            <?php
                $db_res = mysqli_query($db_link, "SELECT releasesHtml, text, name FROM releases ORDER BY id DESC");
                while($row = mysqlI_fetch_array($db_res))
                {
                    echo('<div class="releasesArtikel"><p class="artikelheadline">'.$row['name'].'</p>'. $row['releasesHtml'] . '<p class= "releasetext">'.$row['text'] . '</p></div>');
                }
            ?>

        </div>


        <?php
            require("footer.php");
        ?>

    </body>


</html>


