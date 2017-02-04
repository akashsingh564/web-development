document.addEventListener('DOMContentLoaded', layout);

function layout() {
	var currentTime = new Date();
	var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var day = weekday[currentTime.getDay()];
	
		
	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
		
	ctx.font = "bold 16px Arial";
	ctx.fillText(day,270,200);
	
	ctx.fillText("12",190,20);
	ctx.fillText("6",200,390);
	ctx.fillText("3",380,200);
	ctx.fillText("9",10,200);
	
	var clockX = c.width / 2;
    var clockY = c.height / 2;
	
	var t1=Math.cos((Math.PI)/3) * 200;
	var t2=Math.sin((Math.PI)/3) * 200;
	
	ctx.beginPath();
	ctx.moveTo(clockX, clockY); 
	ctx.lineTo(t1, t2); 
	ctx.stroke();
}