<?php include "header.php" ?>
<?php include "DAO/UserDAOImpl.php" ?>


    <?php
        echo "This session has ended and you have been successfully logged out.";
        
        $user = new UserDAOImpl();
        $user->logoff();
        
         echo "<h1>Return home <h2>"
        . "<script>window.location = 'index.php';</script>";
      
    ?>

<?php include "footer.php" ?>
