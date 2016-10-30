<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href=".../logo.png">
</head>

<body>
<div id="loginwrap">

	<h1>Login Area</h1>
    
    <div id="loginform">
	
        <form action="login.php" method="post">
        	<input name="iebugaround" type="hidden" value="1"> 
            
            <label>Username</label>
            
            <fieldset class="fieldset2"><input type="text" name="userName" class="requiredField" /></fieldset>
            
            <label>Password</label>
            
            <fieldset class="fieldset2"><input type="password" name="password" class="text requiredField subject"/></fieldset>

            <fieldset>
                <input name="submit" id="submit" value="Submit" class="button big round deep-red" type="submit"/>
            </fieldset>
        
        </form>
	
	</div>
    
    <div id="loginwarning">
	
		
	<a href='user_register.php' style="text-decoration:none; position:absolute overflow:hidden; color:#0099FF; left:233px; top:58px; width:60px; height:25px; z-index:0" >
	Sign up
	</a>
	</div>
	
</div>
</body>
</html>
