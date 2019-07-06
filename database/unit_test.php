<?php
require("Database.php");

$dbutest = new Database();

// Inserting data using valid SQL insert command
//echo "Test Case #1 Result :".$dbutest->execute("INSERT INTO usertable(name) VALUES('Mars')");
//echo "<br>";

//Updating data using valid SQL update command
//echo "Test Case #2 Result :".$dbutest->execute("UPDATE usertable SET username = 'charl mars' WHERE id = 23");
//echo "<br>";

//Extracting data using valid SQL select command.
//echo "Test Case #3 Result :".$dbutest->execute("SELECT *FROM usertable");
//echo "<br>";

//Deleting data using valid SQL delete command.
//$result = $dbutest->execute("DELETE FROM usertable WHERE id = 20");
//echo "Test Case #4 Result :".$result;

// Inserting data using invalid SQL insert command
//echo "Test Case #5 Result :".$dbutest->execute("INSERT INTO user(name) VALUES('Mars')");
//echo "<br>";

//Updating data using invalid SQL update command
//echo "Test Case #6 Result :".$dbutest->execute("UPDATE user SET 'username' = 'charl mars' WHERE 'id' = 1");
//echo "<br>";

//Extracting data using invalid SQL select command.
//echo "Test Case #7 Result :".$dbutest->execute("SELECT *FROM user");
//echo "<br>";

//Deleting data using invalid SQL delete command.
//$result = $dbutest->execute("DELETE FROM user WHERE id = 1");
//echo "Test Case #8 Result :".$result;

?>