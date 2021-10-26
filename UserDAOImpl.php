<?php include "SQLConnection.php" ?>
<?php include "UserDAO.php" ?>
<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of UserDAOImpl
 *
 * @author joylo
 */
class UserDAOImpl implements UserDAO{
    
    public function login() {
        $con = SQLConnection::getConn();
        $st_check=$con->prepare("select * from users where email = ? and password = ?");
        $st_check->bind_param("ss", $_POST[email], $_POST[password]);
        $st_check->execute();
        $rs=$st_check->get_result();
        
            if($rs->num_rows === 0)
            {
                echo "<script>alert('Account not found.');</script>";
            }
            else
            {
                $_SESSION["user"]=$_POST["email"];
                echo "<script>window.location = 'menu.php';</script>";
            }
        
    }

    public function signup() {
             if($_POST[password] === $_POST[confirm])
        {
            $con = SQLConnection::getConn();
            $st_check=$con->prepare("select * from users where email = ?");
            $st_check->bind_param("s", $_POST[email]);
            $st_check->execute();
            $rs=$st_check->get_result();
            
            if($rs->num_rows>0)
            {
                echo "<script>alert('email already exists. Try to login with your existing account')</script>";
            }
            else
            {
                $st = $con->prepare("insert into users(email,password,name,mobile,address) values(?,?,?,?,?)");
                $st->bind_param("sssss", $_POST["email"], $_POST["password"], $_POST["name"], $_POST["mobile"], $_POST["address"]);
                $st->execute();
                
                $_SESSION["user"]=$_POST["email"];
                echo "<script>window.location = 'menu.php';</script>";
            }
        } 
        
        else {
            echo "<script>alert('Confirmation Password does not match');</script>";
        }
    }

    
    

}
