<?php session_start(); ?>
<?php include "SQLConnection.php" ?>
<div class =" cart">
           
            <?php
                        $con = SQLConnection::getConn();
                        $st=$con->prepare("select * from temp_order join items on items.id = temp_order.itemid where email = ? group by temp_order.itemid");
                        $st->bind_param("s",$_SESSION["user"]);
                        $st->execute();
                        $rs=$st->get_result();
                        
                        while($row=$rs->fetch_assoc())
                        {
                            echo '<div class =" col-sm-1">
                                 <div class ="thumbnail">
                                    <img src="images/'.$row["photo"].'"/>
                                    <p>'.$row["name"].'</p>
                                    
                                    <a href="add_item.php?id='.$row["itemid"].'">Add</a>
                                    <p>'.$row["qty"].'</p>
                                    <a href="delete_item.php?id='.$row["itemid"].'">Delete</a>
                                    </div>
                                  </div>';
                        }
        ?>
    </div>