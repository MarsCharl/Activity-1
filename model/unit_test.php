<?php
require("UserModel.php");

$dbusermodel = new UserModel();

//Inserting record
/*$dbusermodel->name="name";
$dbusermodel->email="email";
$dbusermodel->username="username";
$dbusermodel->password="password";

echo "Test Case #1 Result :";
var_dump($dbusermodel->insert());
*/

//updating record
/*
echo "Test Case #2 Result :";
$id = "53";
$dbusermodel->name="name";
$dbusermodel->email="email";
$dbusermodel->username="username";
$dbusermodel->password="password";
var_dump($dbusermodel->update($id));
echo "<br>";
*/

//Read All record
/*echo "Test Case #3 Result :";

var_dump($dbusermodel->readAll());
*/

//Delete record
/*echo "Test Case #4 Result :";
$id = "52";
var_dump($dbusermodel->delete($id));
*/

//Inserting record with 3 missing fields
//echo "Test Case #5 Result :";

//updating record with a non-existing ID
/*echo "Test Case #6 Result :";
$id = "asa";
$dbusermodel->name="name";
$dbusermodel->email="email";
$dbusermodel->username="username";
$dbusermodel->password="password";
var_dump($dbusermodel->update($id));
echo "<br>";
*/

//Deleting record with a non-existing ID
echo "Test Case #7 Result :";
$id = "asa";
var_dump($dbusermodel->delete($id));


?>