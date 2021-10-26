<?php include "header.php" ?>
<?php include "SQLConnection.php" ?>
<div id = "order-summary">
    <div id = "order-summary-sheet">
        
    <?php
        $con = SQLConnection::getConn(); 
        $bill_email_stmt= $con->prepare("insert into bill(email) values(?)");
        $bill_email_stmt->bind_param("s", $_SESSION["user"]);
        $bill_email_stmt->execute();

        $bill_no_stmt= $con->prepare("select bill_date,MAX(bill_no) as bill_no from bill where email = ? ");
        $bill_no_stmt->bind_param("s", $_SESSION["user"]);
        $bill_no_stmt->execute();
        $bill_no_stmt_results=$bill_no_stmt->get_result();
        $row = $bill_no_stmt_results->fetch_assoc();
        $bill_no_rs= $row["bill_no"];
        $bill_date_rs= $row["bill_date"];
        
        $temp_order_stmt= $con->prepare("select * from temp_order left join items on temp_order.itemid = items.id where email = ?");
        $temp_order_stmt->bind_param("s", $_SESSION["user"]);
        $temp_order_stmt->execute();
        $temp_order_stmt_rs = $temp_order_stmt->get_result();
        
        
        $delete_temp_order_stmt= $con->prepare("delete from temp_order where temp_order.email = ?");
        
        $delete_temp_order_stmt->bind_param("s", $_SESSION["user"]);
        $delete_order= $delete_temp_order_stmt->execute();
        $total = 0;
        echo '<div class = "order-summary-heading"'
           . '<h1> Order Summary</h1>'
           
                . '<p><b>Logged in: </b> '.$_SESSION["user"].'<p>'
                . '<p><b>Order Number: </b> '.$bill_no_rs.'</p>'
                . '<p><b>Order Date: </b> '.$bill_date_rs.'</p>'
                . '</div>';
       
        
        while($temp_order_item= $temp_order_stmt_rs->fetch_assoc())
        {
           $bill_det_stmt= $con->prepare("insert into bill_det values(?,?,?)");
           $bill_det_stmt->bind_param("iii",$bill_no_rs,$temp_order_item['itemid'], $temp_order_item['qty'] );
           $bill_det_stmt->execute();
           
            $total = $total + ($temp_order_item["qty"] * $temp_order_item["price"]);
           
           echo  '<div class = "order-summary-block">
                    <div class = "order-summary-photo">
                      <img src="ecommerce_images/'.$temp_order_item["photo"].'" id = "summary-photo"/>
                    </div>
                    <div class = "order-summary-info">
                        <h3><b>'.$temp_order_item["name"]. '</b></h3>
                        <h3><b>$'.$temp_order_item["price"] .'</b></h3>
                        <p><b>Qty:  '.$temp_order_item["qty"] .'</b></p>
                        <p><b>Category: '.$temp_order_item['category'].'</b></p>
                        
                        
                        <a href="delete_item.php?id='.$temp_order_item["itemid"].'" >Remove item</a>
                       
                        
                    </div>
                  </div> ';

        }
            
            echo '<a href="delete_item.php?id='. $delete_order.'" >Delete Order</a>';
            echo '<a href="menu.php?" >Return to Menu</a>';
        
    ?>
     
    </div>
    <div id ="paypal">
        <?php 
            echo  "Total: $ $total";
            
            echo 
            '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type ="hidden" name ="business"      value="sb-4hlop6885563@business.example.com"/>
                <input type ="hidden" name ="cmd"           value="_xclick"/>
                <input type ="hidden" name ="item-name"     value="Food E-commere"/>
                <input type ="hidden" name ="amount"        value="<?php echo $total ?>"/>
                <input type ="hidden" name ="currency_code" value="USD"/>
                <input type ="image"  name ="submit"        src=" ecommerce_images/paypalbutton.png" id = "paypalbutton"/>
            </form>';
        ?>
        
    </div>
</div>


<?php include "footer.php"?>