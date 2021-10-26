<?php session_start(); ?>
<?php include 'ItemDAOImpl.php'?>
<?php 
    $io = new ItemDAOImpl();
    $io->addItem();
    echo "<script> window.location = 'menu.php' </script>;";
?>
    
    
    
   

