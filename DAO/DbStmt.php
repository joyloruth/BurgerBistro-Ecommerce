<?php include 'SQLConnection.php' ?>

<?php



class DbStmt extends SQLConnection {
    public function persistData($sql,$datatype,$params){
        $con=$this->getConn();
        $st=$con->prepare($sql);
        call_user_func_array(array($st, "bind_params"), array_merge(array($dt),$params));
        $st->execute();
    }
}
