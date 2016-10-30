<?php 

require_once MODELS_DIR . 'subscribers.php';

class Comments {


	public static function getComments(  )
	{
		$output = null;
	
		$sql = "select * from comments order by comment_id desc";
		
		$query = mysql_query( $sql );
		
		if( $query )
		{
			$output = array();
			if( mysql_num_rows( $query ) > 0 )
			{
			
				while( $row = mysql_fetch_object( $query ) )
				{
					$output[] = $row;
				}
			
			}
		}
		
		return $output;
		
	}
	//return stdClass Object from the database
	public static function insert( $comment_txt , $userId )
	{
		//insert data into the database
		
		$comment_txt = addslashes( $comment_txt );
		
		$sql = "insert into comments values( '' , '$comment_txt' , '$userId' )";
		
		$query = mysql_query( $sql );
		
		if( $query )
		{
			$insert_id = mysql_insert_id();
			
			$std = new stdClass();
			$std->comment_id = $insert_id;
			$std->comment = $comment_txt;
			$std->userId = (int)$userId;		
			
			return $std;
			
		}
		
		return null;
	
	}
	
	public static function update( $data )
	{
	
	}
	
	public static function delete( $commentId )
	{
		$sql = "delete from comments where comment_id=$commentId";
		
		$query = mysql_query( $sql );
		
		if( $query )
		{
			return true;
		}
		
		return null;
	}


}

?>
