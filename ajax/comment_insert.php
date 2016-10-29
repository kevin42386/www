<?php 

	require_once $_SERVER['DOCUMENT_ROOT'] . '/defines.php';

	if( isset( $_POST['task'] ) && $_POST['task'] == 'comment_insert' )
	{
		require_once $_SERVER['DOCUMENT_ROOT'] . '/defines.php';
		$userId = (int)$_POST['userId'];
		$comment = addslashes( str_replace( "\n" , "<br>" , $_POST['comment'] ) );
		
		$std = new stdClass();
		$std->user = null;
		$std->comment = null;
		$std->error = false;
		
		require_once MODELS_DIR . 'comments.php';
		
		if( class_exists( 'Comments' ) && class_exists( 'Subscribers' ) )
		{	
			
			$userInfo = Subscribers::getSubscriber( $userId );
			
			if( $userId == null )
			{
				$std->error = true;
			}
			
			$commentInfo = Comments::insert( $comment , $userId );
			
			if( $commentInfo == null )
			{
				$std->error = true;
			}
			
			
			$std->user = $userInfo;
			$std->comment = $commentInfo;
			
		}
		
		echo json_encode( $std );
		
	
	}
	else
	{
		header('location: /');
	}


?> 
