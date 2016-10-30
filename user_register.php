<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href=".../logo.png">
</head>

<body>
<div id="loginwrap">

	<h1>Register Area</h1>
    
    <div id="loginform">
	
        <form action="" method="post">
        	<input name="iebugaround" type="hidden" value="1"> 
            

			<label>First Name</label>
			
			
			<fieldset class="fieldset2"><input type="text" name="first_name" class="text requiredField subject"/></fieldset>
	

			<label>Last Name</label>
			
			
			<fieldset class="fieldset2"><input type="text" name="last_name" class="text requiredField subject"/></fieldset>

            
			<label>Email</label>
			
			
			<fieldset class="fieldset2"><input type="email" name="email" class="text requiredField subject"/></fieldset>
			

			<label>Username</label>
            
            
			<fieldset class="fieldset2"><input type="text" name="userName" class="requiredField" /></fieldset>
            
            
			<label>Password</label>
            
            
			<fieldset class="fieldset2"><input type="password" name="password" class="text requiredField subject"/></fieldset>

            <fieldset class="fieldset2"><input type="hidden" name="profile_img" value="images/photo.png" class="text requiredField subject"/></fieldset>

			<fieldset>
                <input name="submit" id="submit" value="Submit" class="button big round deep-red" type="submit"/>
            </fieldset>
			
			
        </form>
	
	</div>
    
    <div id="loginwarning">
	
		
	<a href='user_login.php' style="text-decoration:none; position:absolute overflow:hidden; color:#0099FF; left:233px; top:58px; width:60px; height:25px; z-index:0" >
	Login
	</a>
	</div>
	</div>

<?php
if(isset($_POST["submit"])){

if(!empty($_POST['userName']) && !empty($_POST['password'])) {
	$userName=$_POST['userName'];
	$password=$_POST['password'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$profile_img=$_POST['profile_img'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('comment_box') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM subscribers WHERE userName='".$userName."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO subscribers(userName,password,first_name,last_name,email,profile_img) VALUES('$userName','$password','$first_name','$last_name','$email','$profile_img')";

	$result=mysql_query($sql);


	if($result){
	header("Location: index2.php");
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>	
</body>
</html>
