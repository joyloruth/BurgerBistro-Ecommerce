<?php include "DAO/SQLConnection.php" ?>
<?php include "DAO/UserDAO.php" ?>
<?php

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
        
        
    }
    
    public function logoff(){
        session_destroy();
        session_unset();
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
