<?php include "DAO/SQLConnection.php" ?>
<?php include 'DAO/TempOrderDAO.php' ?>
<?php

/**
 * Description of TempOrderDAOImpl
 *
 * @author joylo
 */
class TempOrderDAOImpl implements TempOrderDAO{
   
    public function deleteOrder(){
      $delete_temp_order_stmt= $con->prepare("delete from temp_order where temp_order.email = ?");
      $delete_temp_order_stmt->bind_param("s", $_SESSION["user"]);
      $delete_order= $delete_temp_order_stmt->execute();
    }

    public function viewTempOrder() {
      $temp_order_stmt= $con->prepare("select * from temp_order left join items on temp_order.itemid = items.id where email = ?");
      $temp_order_stmt->bind_param("s", $_SESSION["user"]);
      $temp_order_stmt->execute();
      $temp_order_stmt_rs = $temp_order_stmt->get_result();
        
    }

}
