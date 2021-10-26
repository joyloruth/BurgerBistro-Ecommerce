<?php include "header.php" ?>

    <?php
        echo "This session has ended and you have been successfully logged out.";
        session_destroy();
        session_unset();
        
         echo "<h1>Return home <h2>"
        . "<script>window.location = 'index.php';</script>";
      
    ?>

<?php include "footer.php" ?>
