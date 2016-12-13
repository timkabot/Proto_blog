<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nurs";
$connection = mysql_connect($servername, $username, $password) or die("Connection_error");
mysql_select_db($dbname) or die("cannot select DB"); 
$pic_name = $_POST['name']."_image.jpg";
  $full_url = "post_img/".$pic_name;
  $name = $_POST['name'];
  $post_body = $_POST['text'];
  $img  = $full_url;
  echo $name.", ".$post_body;
if(is_uploaded_file($_FILES['img']['tmp_name']))
      {
        move_uploaded_file($_FILES['img']['tmp_name'],$full_url);
       }
       else 
       {
        $full_url = "";
       }
   		mysql_query("INSERT INTO post (name,post_body,img) VALUES ('$name','$post_body','$img')") or 
        die ("INSERT_ERROR");
        
        header('Location: index.php');
?>