<?php
require("../model/UserModel.php");
class UserController{
    private $usermodelObj;
	

    public function __construct(){
        $this->usermodelObj = new userModel();
    }
    public function addUser($name, $email, $username, $password){
        //perform data validation
		
		if($name == " " || $email == " " ){
			echo "<br/>"."All Feilds Must Be Fill In";
		}
		else if ($username == " " || $password == " "){
			echo "<br/>"."All Feilds Must Be Fill In";
		}
		else{
        $this->usermodelObj->name = $name;
        $this->usermodelObj->email = $email;
        $this->usermodelObj->username = $username;
        $this->usermodelObj->password = $password;
        $query = $this->usermodelObj->insert();
		
		
		if($query){
		 return true;
		}
		else
		{
		 $fail = "Failed to add";
		 return $fail;
		}
		}
    }
	
	public function updateUser($id, $name, $email, $username, $password){
	    //perform data validation
		if($name == " " || $email == " " ){
			echo "<br/>"."All Feilds Must Be Fill In";
		}
		else if ($username == " " || $password == " "){
			echo "<br/>"."All Feilds Must Be Fill In";
		}
		else{
		$this->usermodelObj->name = $name;
        $this->usermodelObj->email = $email;
        $this->usermodelObj->username = $username;
        $this->usermodelObj->password = $password;
		$query = $this->usermodelObj->update($id);
		
		if($query){
		 return true;
		}
		else
		{
		 $fail = "Failed to update";
		 return $fail;
		}
		}
	}
    public function getAllUser(){
        $this->usermodelObj->readAll();
    }
 
    public function deleteUser($id){
		
		
		$query = $this->usermodelObj->delete($id);
		if($query){
		 return true;
		}
		else
		{
		 $fail = "Failed to update";
		 return $fail;
		}
	}
	
    public function __destruct(){
        unset($this->usermodelObj);
    }
}
/*
$userCont = new UserController();
$return = $userCont->getAllUser();
while($data = mysqli_fetch_assoc($return)){
    echo "name: ".$data["name"]."<br/>";
    echo "email: ".$data["email"]."<br/>";
    echo "username: ".$data["username"]."<br/>";
    echo "password: ".$data["password"]."<br/>";
    echo "------------------------------------------<br/>";
}*/
?>