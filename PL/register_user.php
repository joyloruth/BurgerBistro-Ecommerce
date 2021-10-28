<?php include 'header.php' ?>
<?php include 'BBL/User.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register New Account</title>
    </head>
    <body>
    <center>
    <h2>Sign up for an account</h2>
        <form action="register_user.php" method="post">
          <input type = "email"    name="email"     placeholder= "E-mail"   class = "form-control"  style="width: 30%;" required /></br>
          <input type = "password" name="password"  placeholder= "Password" class = "form-control"  style="width: 30%;" required/></br>
          <input type = "password" name="confirm"   placeholder= "Confirm"  class = "form-control"  style="width: 30%;" required/></br>
          <input type = "text"     name="name"      placeholder= "Name"     class = "form-control"  style="width: 30%;" required/></br>
          <input type = "text"     name="mobile"    placeholder= "Mobile"   class = "form-control"  style="width: 30%;" required/></br>
          <input type = "text"     name="address"   placeholder= "Address"  class = "form-control"  style="width: 30%;" required/></br>
          <input type = "submit"   name="sub"       value = "Create"         class = "btn btn-danger"/>
        </form>
      <br></br>
      
      <a href="login.php">Login to an existing account</a>
    </center>
        <?php
            if(isset($_POST["sub"])){
                $user = new User();
                $user->createUser($POST[$email], $_POST[$password], $_POST[$name], $_POST[$address], $_POST[$mobile]);
            }
        ?>
    </body>
</html>



    
  