<?php 
    require("headder.php");

?>
        <div class="box">
            <div class="artikel">
                <div class="contact-box">
                    <h1>Contact</h1>

                    <?php
                    if(isset($_POST['submit'])) {
                        ?>
                        <p>Mail sended</p>
                        <?php
                    }
                    ?>


                    <form action="contact.php " method="post">
                        <input type="text" class="field" name="name" placeholder="Your Name">
                        <input type="email" class="field" name="mail" placeholder="Your E-Mail">
                        <input type="subject" class="field" name="subject" placeholder="Subject">
                        <input type="text" class="field" name="phone" placeholder="Your Phone Number">
                        <textarea class="field" name="message" rows="20" placeholder="Type in your message"  ></textarea>
                        <button type="submit" name="submit">Submit</button>
                    </form>

                </div>

            </div>
           
        </div>

        <?php 
        require("contactform.php");
        ?>

        <?php
            require("footer.php");
        ?>

    </body>


</html>


