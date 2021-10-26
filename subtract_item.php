<?php session_start(); ?>
<?php include "SQLConnection.php" ?>
<?php 

    $con = SQLConnection::getConn(); 
    $st=$con->prepare("update temp_order set qty=qty-1 where itemid = ? and email=?");
    $st->bind_param("is", $_GET["id"], $_SESSION["user"]);
    $st->execute();
     
    echo "<script>window.location='menu.php'</script>";
?>
