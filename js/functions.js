var currentBox = false;
var screenHeight = $( window ).height();
var sendingEmail = false;

$(function(){
	js_adjustHeader();
	js_loadPortfolio();
	$('.js_menuLink').click(function(){
		if($(this).attr('linkTo')){
			js_changeBox($(this).attr('linkTo'));
			return false; //stops the link from going anywhere.
		}else{
			return true;
		}
	});
});


var portfolioItems = {};

function js_loadPortfolio(){
	$.ajax({
		url:'portfolio.php',
		dataType:'json',
		success:function(reply){
			portfolioItems = reply
			js_generatePortfolio();
		},
		error:function(){

		},
		context:this
	});
}

function js_generatePortfolio(){
	var html = '';
	html += '<div class="row">';
	for(var key in portfolioItems){
		html += '<div class="col-xs-6">';
		html += '<a href="#" class="js_menuLink" onclick="js_loadPortfolioDetail(\''+key+'\'); return false;">';
		html += '<a href="'+portfolioItems[key].url+'" target="_blank" class="js_menuLink">';
		html += '<div class="js_zoomImageBox">';
		html += '<div class="js_zoomImageBoxImage" style="background-image:url('+portfolioItems[key].image+');"></div>';
		html += '<div class="js_zoomImageBoxTextWrap"><div class="js_zoomImageBoxTextTable"><div class="js_zoomImageBoxText">'+portfolioItems[key].title+'</div></div></div>';
		html += '</div>';
		html += '</a>';
		html += '</div>';
	}
	html += '</div>';
	$("#js_workBox").html(html);
}

function js_loadPortfolioDetail(item){
	var html = '';

	html += '<a href="#" class="js_menuLink" onclick="js_changeBox(\'js_workBox\'); return false;"><- Go Back</a>'
	html += '<div class="js_portfolioTitle">'+portfolioItems[item].title+'</div>';


	html += '<div class="js_portfolioDesc">'+portfolioItems[item].desc+'</div>';
	html += '<a class="js_portfolioLink" href="'+portfolioItems[item].url+'" target="_blank">[ Visit Project ]</a>';
	html += '<div class="js_portfolioPhotos">';
	for(var i in portfolioItems[item].screens) {
		html += '<div><img src="' + portfolioItems[item].screens[i]+ '"/></div>';
	}
	html += '</div>';

	$("#js_workDetail").html(html);
	js_changeBox('js_workDetail');
}

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
	$('.vis_visualizer').animate({
		'opacity':'1'
	},500);
}

function js_reCalcScreenHeight(){
	screenHeight = $( window ).height();
}

function js_changeBox(box){
	if(sendingEmail){
		return false;
	}

	if(currentBox === box){
		js_hideBox();
		return false;
	}

	if(currentBox !== false){
		$('#js_content_wrap').animate({
			'opacity':'0'
			,'margin-top':'60px'
		},300,function(){ //happens after the animation ends.
			js_showBox(box);
		});
	}else{
		js_showBox(box);
	}
}

function js_hideBox(){
	if(sendingEmail){
		return false;
	}

	$('#js_content_wrap').animate({
		'opacity':'0'
		,'margin-top':'60px'
	},300,function(){
		$('#js_content_wrap').html('');
		js_reCalcScreenHeight();
		js_adjustHeader();
		$('.js_menuLink').removeClass('js_activeMenuLink');
	});
	currentBox = false;
}

function js_showBox(box){
	if(sendingEmail){
		return false;
	}

	console.log(box);

	var contentWrap = $('#js_content_wrap');

	contentWrap.html('');
	js_reCalcScreenHeight();
	contentWrap.html($('#'+box).html());
	js_adjustHeader();
	contentWrap.animate({
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