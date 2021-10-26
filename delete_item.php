<?php session_start(); ?>
<?php include "SQLConnection.php" ?>

<?php 
    
    $con = SQLConnection::getConn(); 
    $st = $con->prepare("DELETE from temp_order where email = ? and itemid = ?");
    $st->bind_param("si",$_SESSION[user], $_GET[id]);
    $st->execute();
    echo "<script>window.location = 'menu.php'</script>";
?>