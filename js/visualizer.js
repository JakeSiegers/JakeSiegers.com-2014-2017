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

	sinCount+=0.1;
	if(sinCount > Math.PI*2){
		sinCount = 0;
	}
	canvasCtx.fillStyle = '#1d9099';
	vis_drawRect(canvas.width/2 + Math.cos(sinCount)*(canvas.width/2), canvas.height/2)
}

function vis_drawRect(x,y){
	var gridSize = 100
	var gridOffset = gridSize/2;
	var ax=gridSize * Math.floor((x + gridOffset) / gridSize);
	var ay=gridSize * Math.floor((y + gridOffset) / gridSize);
	console.log(ax);
	canvasCtx.fillRect(ax,ay,gridSize,gridSize);
}