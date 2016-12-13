<?php 
$servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "nurs";
       $output = "";
       $connection = mysql_connect($servername, $username, $password) or die("Connection_error");
       mysql_select_db($dbname) or die("cannot select DB"); 
       $zapros = mysql_query("SELECT * FROM post WHERE name LIKE '%".$_POST['search']."%'") or die ("logushki");
         while($res = mysql_fetch_array($zapros))
       {
       	$output.='<div class = "col-md-12 b_border">';
       	$output.='<a href = ""><h2>'.$res['name'].'</h2></a>';
       	$output.='<p class="text-left bg-info" style="padding: 5px;">';
       	$output.='<img src="'.$res['img'].'" class=" image-rounded" style="max-width: 50%;height:200px;margin: 15px;" align="left">';
       	$output.=$res['post_body'];
       	$output.='</div>';
       }
       echo $output;
 ?>