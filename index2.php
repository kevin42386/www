<?php
session_start();
$connect = @mysql_connect("localhost","root","" ) or die("this error");
mysql_select_db("comment_box")or die("filed to connect database");

if(isset($_SESSION['userName'])){
	
	$userName = $_SESSION['userName'];
	$password = $_SESSION['password'];
	$query = mysql_query("select * from subscribers where userName='$userName' and password='$password'  limit 1");
	
	while($row = mysql_fetch_assoc($query)){
		
		$fname1 = $row['userId'];
		$fname2 = $row['userName'];
		$fname3 = $row['first_name'];
		$fname4 =  $row['last_name'];
	}
	

	

}else{

header("Location: user_login.php");		
}



?>
<?php 

if(!isset($_SESSION["userName"])){
	header("location:login.php");
} else {
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/defines.php'; ?>
<?php require_once MODELS_DIR . 'comments.php';

	$UserId = $fname1

?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/styles.css">
		<link href="css/layout.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/comment_insert.js?t=1414315248"></script>
		<script type="text/javascript" src="js/comment_delete.js?t=1414315248"></script>
		<script src="http://jwpsrv.com/library/kPeNbr6CEeOE1CIACrqE1A.js"></script>
		<link rel="shortcut icon" href=".../logo.png">
	</head>
		<body>
		
			<div class="wrapper">
				<center>
				<div id="cssmenu" class="align-center">
				<ul>
				   <li class="active"><a href="index2.php">Home</a></li>
				   <li><a href="index5.php">About</a></li>
				   <li><a href="index6.php">Contact</a></li>
				</ul>
				</div>
				</center>	
				<div style="position:relative; overflow:hidden; left:30px; top:30px; width:693px; height:360px; z-index:0">
				<center>
				<iframe src="" frameborder="0" width="645" height="365"></iframe> 
				</center>
			</div>
			<div class="page-data">
				
			</div>
			<div class="comment-wrapper">
				<h3 class="comment-title">
				Welcome, <?php echo $fname3 ?> <?php echo $fname4 ?>! <a href="logout.php" style="text-decoration:none; color:#0099FF;">Logout</a>
				</h3>
				
				<div class="comment-insert">
					<h3 class="who-says"><span>Says: </span><?php echo $fname3 ?> <?php echo $fname4 ?></h3>
					<input type="hidden" id="userId" value="<?php echo $fname1 ?>">
					<input type="hidden" id="userName" value="<?php echo $fname2 ?>">
					
					<div class="comment-insert-container">
					<textarea id="comment-post-text" class="comment-insert-text"></textarea>
					</div>
					<div id="comment-post-btn" class="comment-post-btn-wrapper">
						Post
					</div>
				</div>
				<div class="comments-list">
					<ul class="comments-holder-ul">
					<?php $comments = Comments::getComments(); ?>
					<?php require_once 'INCLUDES/' . 'comment_box.php' ;?>
										
							
						</ul>
					</div>
				</div>
			</div>
		</body>
<?php
}
?>

