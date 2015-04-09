var canvas;
var canvasCtx;
var sinCount = 0;

$(function(){
	vis_initVisualizer();
});

function vis_initVisualizer(){
	canvas = document.querySelector('.vis_visualizer');
	canvas.style.width=vis_getScreenWidth()+"px";
	canvas.style.height=vis_getScreenHeight()+"px";
	canvasCtx = canvas.getContext("2d");
	canvasCtx.fillStyle = '#202020';
	canvasCtx.fillRect(0, 0, canvas.width,  canvas.height);
	setInterval(vis_draw,100);
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

function vis_draw(){
	canvasCtx.fillStyle = '#202020';
	canvasCtx.fillRect(0, 0, canvas.width,  canvas.height);

	sinCount+=0.005;
	if(sinCount > Math.PI*2){
		sinCount = 0;
	}
	
	for(var i=0;i<40;i++){
		if(i%2==0){
			canvasCtx.fillStyle = 'rgba(29,144,153,0.5)';
		}else{
			canvasCtx.fillStyle = 'rgba(213,58,51,0.5)';
		}
		vis_drawRect(((canvas.width/40)*i)+Math.sin(sinCount)*50,(canvas.height/2)+Math.sin(sinCount*(i+1))*(canvas.height/2));
	}
	
}

function vis_drawRect(x,y){
	var gridSizeX = 40
	var gridSizeY = 40
	var gridOffsetX = gridSizeX/2;
	var gridOffsetY = gridSizeY/2;
	var ax=gridSizeX * Math.floor((x + gridOffsetX) / gridSizeX);
	var ay=gridSizeY * Math.floor((y + gridOffsetY) / gridSizeY);
	canvasCtx.fillRect(ax,ay,gridSizeX,gridSizeY);
}