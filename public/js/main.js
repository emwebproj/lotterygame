
jQuery('document').ready(function($){

	var cnt		 = 0;
	var betArray = [];
	var tglClass = 'btn-success';

	$('.btn-play').click(function(){

		var dis 	= $( this );
		var disId 	= dis.attr( 'id' );

		if(dis.hasClass(tglClass) && cnt) {
			cnt--;
			betArray.splice( $.inArray(disId, betArray), 1 );

		} else {
			if(cnt == 6) {
				$('.alert').show();
				return;
			}

			betArray.push(disId);
			cnt++;
		}		

		dis.toggleClass(tglClass);
	});



	$('.close').click(function(){
		$('.alert').hide();
	});



	$('#submit').click(function(){
		if(cnt != 6) {
			alert('Please complete your bet!');
			return false;
		}

		console.log(betArray); return false;
	});

});