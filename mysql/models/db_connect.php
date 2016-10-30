<?php 

$connect = @mysql_connect('localhost','root','') or die( "problems" );
mysql_select_db('comment_box');




if( !$connect )
{ 
	echo "Failure!";
}

?>