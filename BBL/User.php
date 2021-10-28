<?php include 'DAO/DbStmt.php' ?>
<?php

class User extends DbStmt {
    
    private $email;
    private $password;
    private $name;
    private $address;
    private $mobile;
    
    public function createUser($email, $password, $name, $address, $mobile){
       $sql="INSERT INTO users(email,password,name,address,mobile) values(?,?,?,?,?)";
       $datatype = "sssss";
       $params = array(&$email, &$password, &$name, &$address, &$mobile);
       $this->persistData($sql, $datatype, $params);
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setUsername($username): void {
        $this->username = $username;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setMobile($mobile): void {
        $this->mobile = $mobile;
    }

    
}
?>