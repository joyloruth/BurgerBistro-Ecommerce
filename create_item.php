<?php include "header.php" ?>
<?php include "DAO/ItemDAOImpl.php"?>

 <center>
     <br></br>
     <br>
        <h1>Add New Item</h1>
        <form action = "create_item.php" method = "post">
            <input type = "name"    name = "name"      placeholder= "name"     class = "form-control" style="width: 30%;" required/></br>
            <input type = "text"    name = "category"  placeholder= "category" class = "form-control" style="width: 30%;" required/></br>
            <input type = "number"  name = "price"     placeholder= "price"    class = "form-control" style="width: 30%;" required/></br>
            <input type = "text"    name = "photo"     placeholder= "photo"    class = "form-control" style="width: 30%;" required/></br>
            <input type = "submit"  name = "sub"       value = "Create Item"        class = "loginbutton" />
        </form>
 </center>
<?php
    
   if(isset($_POST["sub"]))
        {
           $create_item = new ItemDAOImpl();
           $create_item->createItem();
        }


?>