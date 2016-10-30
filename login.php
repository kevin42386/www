<?php
session_start();
$connect = @mysql_connect("localhost","root","" ) or die("this error");
mysql_select_db("comment_box")or die("filed to connect database");


if($_POST['submit']){
	
	
	$userName = $_POST['userName'];
	$password = $_POST['password'];

	
	$query = mysql_query("select * from Subscribers where userName='$userName' AND password='$password' limit 1");
  $num_rows = mysql_num_rows($query);
			
  if($num_rows == 1){
  
  $_SESSION['userId'] = $userId;	
  $_SESSION['password'] = $password;	
  $_SESSION['userName'] = $userName;
  
  header("Location: index2.php");
			
  }else{
			
  echo "There is a Error!";

  }

}else{

header("Location: user_login.php");
}
		


?>