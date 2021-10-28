<?php include "header.php" ?>

    
  <center>
      <h2>Sign up for an account</h2>
    <form action="signup.php" method="post">
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
    if(isset($_POST["sub"])) {
        
        if($_POST[password] === $_POST[confirm])
        {
            $con = SQLConnection::getConn();
            $st_check=$con->prepare("select * from users where email = ?");
            $st_check->bind_param("s", $_POST['email']);
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
?>
    
<?php include "footer.php" ?> 
