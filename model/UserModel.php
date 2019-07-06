<?php
require("../database/Database.php");
class UserModel{
    public $name;
    public $email;
    public $username;
    public $password;
    private $db;
    private $tablename = "tableuser";

    public function __construct(){
        $this->db = new Database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, email,username,password) VALUES('$this->name','$this->email','$this->username', '$this->password')";
        if($this->db->execute($sql) == 1){
		return true;
		}
		else{
		return false;
		}
		
    }
	 public function update($id){
     $sql = "UPDATE $this->tablename SET name = $this->name, email = $this->email ,username = $this->username, password = $this->password WHERE $id";
      if($this->db->execute($sql) == 1){
		return true;
		}
		else{
		return false;
		}
    }
	
	 public function delete($id){
     $sql = "DELETE FROM $this->tablename WHERE $id";
      if($this->db->execute($sql) == 1){
		return true;
		}
		else{
		return false;
		}
    }
    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        $this->db->execute($sql);
		
    }
    public function __destruct(){
        unset($this->db);
    }
}
// $userModel = new UserModel();
// $userModel->name = "Art";
// $userModel->email = "a@y.ocm";
// $userModel->username = "art123";
// $userModel->password = "testpassword";
// $userModel->insert();
?>