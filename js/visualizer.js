var canvas;
var canvasCtx;
var trigCount = 0;
var visPos = {x:1280/2,y:720/2};
var mousePos = {x:1280/2,y:720/2};
var currentVisuals = new Array();
var numVisuals = 6;
var visColors = {
	blue: 'rgba(29,144,153,1)',
	red: 'rgba(213,58,51,1)',
	yellow: 'rgba(231,156,16,1)'
}
var visuals = {
	0:function(){
		//360 length spinning rod
		canvasCtx.fillStyle = visColors.yellow;
		for(var i=10;i<=36;i++){
			//vis_drawRect(visPos.x+(Math.cos(trigCount)*20*i),visPos.y+(Math.sin(trigCount)*20*i));	
			vis_drawCircle(visPos.x,visPos.y,10*i,2,true,true);
		}
	},
	1:function(){
		canvasCtx.fillStyle = visColors.blue;
		vis_drawCircle(visPos.x,visPos.y,100+Math.tan(trigCount)*50,30);
	},
	2:function(){
		canvasCtx.fillStyle = visColors.red;
		vis_drawCircle(visPos.x,visPos.y,200+Math.cos(trigCount)*50,30);
	},
	3:function(){
		canvasCtx.fillStyle = visColors.yellow;
		vis_drawCircle(visPos.x,visPos.y,200+Math.cos(trigCount)*100,30,true);
		canvasCtx.fillStyle = visColors.blue;
		vis_drawCircle(visPos.x,visPos.y,50,10,true,true);
	},
	4:function(){
		canvasCtx.fillStyle = visColors.red;
		vis_drawCircle(visPos.x,visPos.y,100,2,true,true);
		canvasCtx.fillStyle = visColors.blue;
		vis_drawCircle(visPos.x,visPos.y,200,3,true,true);
		canvasCtx.fillStyle = visColors.yellow;
		vis_drawCircle(visPos.x,visPos.y,300,5,true,true);
	},
	5:function(){
		canvasCtx.fillStyle = visColors.red;
		vis_drawCircle(visPos.x,visPos.y,300,10,true,true);
	}
};

$(function(){
	vis_initVisualizer();
});

function vis_initVisualizer(){
	canvas = document.querySelector('.vis_visualizer');
	//canvas.style.width=vis_getScreenWidth()+"px";
	//canvas.style.height=vis_getScreenHeight()+"px";
	canvasCtx = canvas.getContext("2d");
	canvasCtx.fillStyle = '#202020';
	canvasCtx.fillRect(0, 0, canvas.width,  canvas.height);
	//MOUSE SUPPORT
	document.body.addEventListener('mousemove', vis_updateMouse, false);
	setInterval(vis_draw,10);
	vis_changeVisual();
}

function vis_getScreenWidth(){
	var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth;
	return x;
}
function vis_getScreenHeight(){
	var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;
	return y;
}

function vis_updateMouse(mouseEvent) {
	var rect = canvas.getBoundingClientRect();
	mousePos = {
		x: Math.round((mouseEvent.clientX-rect.left)/(rect.right-rect.left)*canvas.width),
		y: Math.round((mouseEvent.clientY-rect.top)/(rect.bottom-rect.top)*canvas.height)
	};
}

function vis_changeVisual(){
	currentVisuals[0] = Math.floor(Math.random()*numVisuals);
	currentVisuals[1] = Math.floor(Math.random()*numVisuals);
}

function vis_draw(){
	

	trigCount+=0.01;
	if(trigCount > Math.PI*2){
		trigCount = 0;
		vis_changeVisual();
	}

	/*
	//Just draws 2 basic sinewaves. Not interactive.
	for(var i=0;i<20;i++){
		if(i%2==0){
			canvasCtx.fillStyle = 'rgba(29,144,153,0.3)';
		}else{
			canvasCtx.fillStyle = 'rgba(213,58,51,0.3)';
		}
		vis_drawRect((canvas.width/20)*i,(canvas.height/2)+Math.sin(trigCount*(i+1))*(canvas.height/2));
	}
	*/

	//run current visuals
	for(var i in currentVisuals){
		visuals[currentVisuals[i]]();	
	}
	
	canvasCtx.fillStyle = visColors.yellow;
	vis_drawRect(mousePos.x,mousePos.y);

	canvasCtx.fillStyle = 'rgba(32,32,32,0.9)';
	canvasCtx.fillRect(0, 0, canvas.width,  canvas.height);
}

//Hope you know your trig! I left some notes so maybe you can learn off of me 
//<3 Jake
function vis_drawCircle(x,y,width,numPixels,spinX,spinY){
	for(var i=0;i<(2*Math.PI);i+=(2*Math.PI/numPixels)){ //'numPixels' point(s) in a circle, will loop over and spit evenly
		vis_drawRect(
			x //Center X
			+(
				Math.cos((spinX?trigCount:0)+i) // Cos = X edge of circle
				*width //Width of circle
			)
		,
			y //Center Y
			+(
				Math.sin((spinY?trigCount:0)+i)
				*width
			)
		);	
	}
}

function vis_drawRect(x,y){
	var gridSizeX = 40;
	var gridSizeY = 40;
	var gridOffsetX = gridSizeX/2;
	var gridOffsetY = gridSizeY/2;
	var ax=gridSizeX * Math.floor(x/gridSizeX);
	var ay=gridSizeY * Math.floor(y/gridSizeY);
	canvasCtx.fillRect(ax,ay,gridSizeX,gridSizeY);
}