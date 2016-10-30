$( document ).ready( function(){

	//this will fire once the page has been fully loaded
	
	$( '#comment-post-btn' ).click( function(){ 
		comment_post_btn_click();
	});
});


function comment_post_btn_click()
{

//Text within textarea which the person has entered
	var _comment = $( '#comment-post-text' ).val();
	var _userId = $( '#userId' ).val();
	var _userName = $( '#userName' ).val();
	var _first_name = $( '#first_name' ).val();
	var _last_name = $( '#last_name' ).val();
	
	
	if( _comment.length > 0 && _userId != null )
	{
		//proceed with our ajax callback
		$('.comment-insert-container').css( 'border' , '1px solid #e1e1e1' );  
		
		$.post( "ajax/comment_insert.php" ,
			{
				task : "comment_insert",
				userId : _userId,
				comment : _comment,
				userName : _userName,
				first_name : _first_name,
				last_name : _last_name,
				
			}	
		)
		.error(
	
			function(  )
			{
				console.log( "Error:" );
			})
		.success(
		
			function( data )
			{
				//Seccess
				//Task Insert html into the ul/li
				comment_insert( jQuery.parseJSON( data ) );
				console.log( "ResponseText:" + data );
			}
		);
		
		
		
		
		console.log( _comment + "UserName: " + _userName + "User Id" + _userId );
	}
	else
	{
		//the textarea is empty, lets put a border of red on it
		//in a second
		$('.comment-insert-container').css( 'border' , '1px solid #ff0000' );  
		console.log( "The text area was empty" )
	}
	
	
	
	//remove the text from the textarea, ready for another comment
	//possibly
	$( '#comment-post-text' ).val("");
	

}


function comment_insert( data )
{
	var t = '';
	t += '<li class="comment-holder" id="_'+data.comment.comment_id+'">';			
	t += '<div class="user-img">';
	t += '<img src="'+data.user.profile_img+'" class="user-img-pic"/>';
	t += '</div>';
	t += '<div class="comment-body">';
	t += '<h3 class="username-field">'+data.user.first_name+' '+data.user.last_name+'</h3>';
	t += '<div class="comment-text">'+data.comment.comment+'</div>';
	t += '</div>';
	t += '<div class="comment-buttons-holder">';
	t += '<ul>';
	t += '<li id="'+data.comment.comment_id+'" class="delete-btn">x</li>';
	t += '</ul>';
	t += '</div>';
	t += '</li>';
	
	$( '.comments-holder-ul' ).prepend( t );
	add_delete_handlers();

}