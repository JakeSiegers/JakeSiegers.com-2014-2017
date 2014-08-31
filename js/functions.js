var boxShowing = false;

$(function(){
	$('.jake_menuLink').click(function(){
		jake_changeBox($(this).attr('linkTo'));
		return false; //stops the link from going anywhere.
	});
});

function jake_changeBox(box){
	console.log(boxShowing);
	if(boxShowing){
		$('#jake_content').animate({
			'opacity':'0'
			,'margin-top':'60px'
		},500);
	}else{
		jake_showBox(box);
	}
}

function jake_showBox(box){
	$('#jake_content').html($('#'+box).html());
	$('#jake_content').animate({
		'opacity':'1'
		,'margin-top':'30px'
	},500);
	boxShowing = true;
}