<?php 
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "nurs";
$connection = mysql_connect($servername, $username, $password) or die("Connection_error");
mysql_select_db($dbname) or die("cannot select DB");

$email = $_POST['email'];
$name = $_POST['name'];
$msg = $_POST['msg'];
mysql_query("INSERT INTO info (email,name,msg_body) VALUES ('$email','$name','$msg')");
header('Location: index.php');
 ?>