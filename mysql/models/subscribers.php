<?php 

class Subscribers{


	public static function getSubscriber( $userId )
	{
		$sql = "select * from subscribers where userId=$userId";
		
		$query = mysql_query( $sql );
		
		if( $query )
		{
			if( mysql_num_rows( $query ) == 1 )
			{
			return mysql_fetch_object( $query );
			}
		}
		
		return null;
		
	}


}

?>