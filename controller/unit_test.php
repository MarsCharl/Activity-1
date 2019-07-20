<?php
require("UserController.php");

$dbobj = new UserController();
//Inserting record
/*
$name= "Mars";
$email="email";
$username="username";
$password="password";

echo "Test Case #1 Result :";
var_dump($dbobj->addUser($name, $email, $username, $password));

*/
//updating record
/*
$id = "53";
$name="Mars";
$email="emmars@gmail.com";
$username="usermars";
$password="marssword";

echo "Test Case #2 Result :";
var_dump($dbobj->updateUser($id, $name, $email, $username, $password));
*/

//Read All record
/*
echo "Test Case #3 Result :";
var_dump($dbobj->getAllUser());
*/

//Delete record
/*
echo "Test Case #4 Result :";
$id = "54";
var_dump($dbobj->deleteUser($id));
*/

//Inserting record with 1 field empty
/*
$name="name";
$email="email";
$username=" ";
$password="password";

echo "Test Case #5 Result :";
var_dump($dbobj->addUser($name, $email, $username, $password));
*/

//Updating a record and setting 1 field as blank
/*
$id = "67";
$name="nmars";
$email=" ";
$username="umarschaqame";
$password="pa123ord";

echo "Test Case #6 Result :";
var_dump($dbobj->updateUser($id, $name, $email, $username, $password));
*/

//updating record with a non-existing ID
/*
$id = "60";
$name="name";
$email="charl@yahoo.com";
$username="charlaq";
$password="cha123";

echo "Test Case #7 Result :";
var_dump($dbobj->updateUser($id, $name, $email, $username, $password));
*/

//Deleting record with a non-existing ID
/*
echo "Test Case #8 Result :";
$id = "60";
var_dump($dbobj->deleteUser($id));
*/
?>