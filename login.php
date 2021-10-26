<?php include "header.php" ?>
<?php include "UserDAOImpl.php" ?>


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
             $user = new UserDAOImpl();
             $user->login();
            

            
        }
    ?>
    
<?php include "footer.php" ?>
