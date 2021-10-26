<?php include "header.php" ?>
<?php include "SQLConnection.php" ?>
    <center>
        <h2>Login</h2>
        <form action = "login.php" method = "post">
            <input type = "email"    name = "email"     placeholder= "E-mail"   class = "form-control" style="width: 30%;" required/></br>
            <input type = "password" name = "password"  placeholder= "Password" class = "form-control" style="width: 30%;" required/></br>
            <input type = "submit"   name = "sub"       value = "Log in"        class = "loginbutton" />
        </form>

        <br></br>
        <a href="signup.php">Create an Account</a>
    </center>

    <?php 
        if(isset($_POST["sub"]))
        {
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
    ?>
    
<?php include "footer.php" ?>
