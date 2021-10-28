<?php session_start(); ?>
<?php include "DAO/SQLConnection.php" ?>
<?php 
    
    
    $con = SQLConnection::getConn(); 
    
    $qty_st=$con->prepare("select qty from temp_order where itemid = ? and email=?");
    $qty_st->bind_param("is", $_GET["id"], $_SESSION["user"]);
    $qty_st->execute();
    $qty_rs= $qty_st->get_result();
    
    
    if($qtyTotal= $qty_rs->fetch_assoc() < 1){  
        $del_st = $con->prepare("DELETE from temp_order where email = ? and itemid = ?");
        $del_st->bind_param("si",$_SESSION['user'], $_GET['id']);
        $del_st->execute();
    }
    
    else{
        $st=$con->prepare("update temp_order set qty=qty-1 where itemid = ? and email=?");
        $st->bind_param("is", $_GET["id"], $_SESSION["user"]);
        $st->execute();
    }
    
     
    echo "<script>window.location='menu.php'</script>";
?>
