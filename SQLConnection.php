<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of SQLC    private $conn = "";
onnection
 *
 * @author joylo
 */
class SQLConnection {
    
   
    
     public static function getConn(){
     try{
         return new mysqli("localhost","joylorut_joy","joylorut_joy","joylorut_eodb");
     }
     
     catch(Exception $e){
         echo "connection interupted" + $e->getMessage();
     }
        
    }
    
    
    
}
?>