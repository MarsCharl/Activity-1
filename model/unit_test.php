<?php
require("UserModel.php");

$dbusermodel = new UserModel();

//echo "Test Case #1 Result :".$dbutest->execute("INSERT INTO usertable(name) VALUES('Mars')");
//echo "<br>";
$dbusermodel->name="name";
$dbusermodel->email="email";
$dbusermodel->username="username";
$dbusermodel->password="password";

echo "Test Case #1 Result :";
var_dump($dbusermodel->insert());

/*$dbusermodel->name="mars";
$dbusermodel->email="charl";
$dbusermodel->username="charl";
$dbusermodel->password="charchar";
*/
echo "Test Case #2 Result :";
//var_dump($dbusermodel->update($id));
echo "<br>";


echo "Test Case #3 Result :";

var_dump($dbusermodel->readAll());

echo "Test Case #4 Result :";

var_dump($dbusermodel->delete($id));


$dbusermodel->name="name";
$dbusermodel->email="email";
$dbusermodel->user="username";
$dbusermodel->pass="password";

echo "Test Case #5 Result :";
var_dump($dbusermodel->insert());

echo "Test Case #6 Result :";

//var_dump($dbusermodel->update($id));
echo "<br>";

echo "Test Case #7 Result :";

var_dump($dbusermodel->delete($id));


?>