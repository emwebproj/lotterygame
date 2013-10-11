
jQuery('document').ready(function($){

	var cnt = 0;

	$('.btn-play').click(function(){

		if($(this).hasClass('btn-primary') && cnt)
			cnt--;
		else {
			if(cnt == 6) {
				alert('anim na');
				return;
			}
			cnt++;
		}		

		$( this ).toggleClass('btn-primary');
	});

});