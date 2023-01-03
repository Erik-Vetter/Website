<?php 
    // Besucherzähler
    $handle = fopen("visitors.txt", "r"); 
    $visitorcounter =  fgets($handle);
    fclose($handle);
    $visitorcounter++;
    $handle = fopen("visitors.txt", "w");
    fwrite($handle, $visitorcounter);
    fclose($handle);


    require("headder.php");
    require('connectDB.php');

    
    
    ?>
        
        <div class="box">
            
            
            <div class="artikel">
                <p class="pageheadline">Home<br>               
            </div>
            
            <?php
            require("countdown.php");
            ?>            
            
            <?php
                $db_res = mysqli_query($db_link, "SELECT name, bild, artikeltext FROM HomeArtikel ORDER BY id DESC");
               while($row = mysqlI_fetch_array($db_res))
               {
                echo('<div class="artikel2"><p class="artikelheadline">'.$row['name'].'</p><img src="https://dj-ara.de/'. $row['bild'] . '" width="100%"<p class = "artikeltext">'.$row['artikeltext'] . '</p></div>');
                }
                
                ?>
        </div>
        <?php
            require("footer.php");
        ?>

    </body>
    
    </html>
    
    