var currentBox = false;
var screenHeight = $( window ).height();
var sendingEmail = false;

$(function(){
	js_adjustHeader();
	$('.js_menuLink').click(function(){
		if($(this).attr('linkTo')){
			js_changeBox($(this).attr('linkTo'));
			return false; //stops the link from going anywhere.
		}else{
			return true;
		}
	});
});

function js_adjustHeader(){
	var newMargin = 30;
	var totalHeight = $('#js_content_wrap').height()+$('#js_head').height();
	if((totalHeight/2) > screenHeight/2){
		newMargin = 20;
	}else{
		newMargin = (screenHeight/2)-(totalHeight/2);
	}

	$('#js_head').animate({
		'margin-top':newMargin+'px'
	},300,function(){js_showHead();}); //show the header if it's not already showing.
}

function js_showHead(){
	$('#js_head').animate({
		'opacity':'1'
	},500);
}

function js_reCalcScreenHeight(){
	screenHeight = $( window ).height();
}

function js_changeBox(box){
	if(currentBox === box){
		js_hideBox();
		return false;
	}
	if(currentBox !== false){
		$('#js_content_wrap').animate({
			'opacity':'0'
			,'margin-top':'-60px'
		},300,function(){ //happens after the animation ends.
			js_showBox(box);
		});
	}else{
		js_showBox(box);
	}
}

function js_hideBox(){
	$('#js_content_wrap').animate({
		'opacity':'0'
		,'margin-top':'-60px'
	},300,function(){
		$('#js_content_wrap').html('');
		js_reCalcScreenHeight();
		js_adjustHeader();
		$('.js_menuLink').removeClass('js_activeMenuLink');
	});
	currentBox = false;
}

function js_showBox(box){
	$('#js_content_wrap').html('');
	js_reCalcScreenHeight();
	$('#js_content_wrap').html($('#'+box).html());
	js_adjustHeader();
		$('#js_content_wrap').animate({
		'opacity':'1'
		,'margin-top':'30px'
	},300);
	currentBox = box;
	$('.js_menuLink').removeClass('js_activeMenuLink');
	$('[linkto = "'+box+'"]').addClass('js_activeMenuLink');
}

function js_sendMessage(){
	if(sendingEmail){
		return false;
	}
	sendingEmail = true;
	$('[wrapping]').removeClass('has-error');
	$('.js_emailLoader').html('<i class="fa fa-refresh fa-spin"></i>');
	$('.js_emailErrorMessage').html('');
	$('.js_emailHappyMessage').html('');
	$.ajax({
		url:'mail.php'
		,data:$('#js_contactForm').serializeArray()
		,type:'POST'
		,dataType:'json'
		,success:function(reply){
			sendingEmail = false;
			$('.js_emailLoader').html('');
			if(reply.success){
				$('#js_contactForm').each(function(){this.reset();});
				$('.js_emailHappyMessage').html("(Message Sent, Thanks!)");
			}else{
				for(var i in reply.fields){
					$('[wrapping="'+reply.fields[i]+'"]').addClass('has-error');
				}
				$('.js_emailErrorMessage').html("("+reply.error+")");
			}
		}
		,error:function(){
			sendingEmail = false;
			$('.js_emailLoader').html('');
			alert('Sorry, something went wrong!');
		}
	})
}