<?php

class SQLConnection {
    
   
    
     public static function getConn(){
         
        try{
             $con= new mysqli("localhost","joylorut_joy","joylorut_joy","joylorut_eodb");
             return $con;
             
        }
        catch(Exception $e){
            echo "<script> window.location = 'error.php' </script>";
        }
    }
    
    
    
}
?>