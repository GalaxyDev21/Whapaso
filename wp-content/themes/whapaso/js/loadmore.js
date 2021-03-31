jQuery(function($){
	$('.loadmore').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': loadmore_params.posts,
			'page' : loadmore_params.current_page
		};
 
		$.ajax({
			url : loadmore_params.ajaxurl,
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...');
			},
			success : function( data ){
				if( data ) { 
					button.text( 'Load More' ).prev().after(data);
					loadmore_params.current_page++;
 
					// if ( loadmore_params.current_page == loadmore_params.max_page ) 
					// 	button.remove();
				} else {
					//button.remove();
				}
			}
		});
	});
});