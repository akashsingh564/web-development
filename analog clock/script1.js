document.addEventListener('DOMContentLoaded', time);
document.addEventListener('DOMContentLoaded', layout);

setInterval(function(){time()}, 1000);

function time() {
    var currentTime = new Date();

	var hr = currentTime.getHours();
	var min = currentTime.getMinutes();
	var sec = currentTime.getSeconds();
	var time = hourCorrect(hr) + ":" + zeros(min) + ":" + zeros(sec) + " " + AmPm(hr);
    document.querySelector("#time").innerHTML = time;
	//document.querySelector("#day_display").innerHTML = day;
	
	var canvas = document.querySelector("#clock");
    var context = canvas.getContext("2d");
     
    var clockRadius = 200;
    var clockX = canvas.width / 2;
    var clockY = canvas.height / 2;

    Math.TAU = 2 * Math.PI;	
     
    function drawArm(progress, armThickness, armLength, armColor) 
	{
		var armRadians = (Math.TAU * progress) - (Math.TAU/4);
		var targetX = clockX + Math.cos(armRadians) * (armLength * clockRadius);
		var targetY = clockY + Math.sin(armRadians) * (armLength * clockRadius);
	 
		context.lineWidth = armThickness;
		context.strokeStyle = armColor;
	 
		context.beginPath();
		context.moveTo(clockX, clockY); 
		context.lineTo(targetX, targetY); 
		context.stroke();
	}
     
	context.clearRect(0, 0, canvas.width, canvas.height);
	
	layout();
    drawArm(hr / 12, 8, 0.70, '#000000');
    drawArm(min / 60,  4, 0.80, '#000000');
    drawArm(sec / 60,  2, 0.90, '#FF0000'); 
}

function hourCorrect(h) {
    var hour = h % 12;
 
    if (hour == 0) 
        hour = 12;    
    return String(hour)
}

function zeros(num) {
    if (num < 10) { 
        return "0" + String(num);
    }
    else {
        return String(num);
    }
}

function AmPm(h) {
    if(h<12)
	return "AM";
	else 
	return "PM";	
}

function layout() {
	var currentTime = new Date();
	var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var day = weekday[currentTime.getDay()];
	
		
	var c = document.getElementById("clock");
	var ctx = c.getContext("2d");
		
	ctx.font = "bold 20px 'Comic Sans MS' ";
	ctx.fillText(day,280,200);
	ctx.font = "bold 16px arial ";
	ctx.fillText("12",190,20);
	ctx.fillText("6",195,393);
	ctx.fillText("3",380,202);
	ctx.fillText("9",10,200);
	ctx.fillText("2",360,112);
	ctx.fillText("4",357,296);
	ctx.fillText("8",32,293);
	ctx.fillText("10",30,112);
	ctx.fillText("1",285,42);
	ctx.fillText("5",292,365);
	ctx.fillText("7",95,368);
	ctx.fillText("11",92,42);
	

}