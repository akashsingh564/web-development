 $(document).ready(function(){
	$(".white").mousedown(function(){
			$(this).css('backgroundColor','#E6E6E6');
		});
	$(".white").mouseout(function(){
			$(this).css("background-color","#fff");
		});
	$(".black").mousedown(function(){
			$(this).css('backgroundColor','#1A1A1A');
		});
	$(".black").mouseout(function(){
			$(this).css("background-color","#000");
		});
});

	/*function play(s) {
		document.getElementById(s).play();
	}*/

	channels = new Array();
	for (a=0;a<50;a++) {									
		channels[a] = new Array();
		channels[a]['channel'] = new Audio();						
		channels[a]['finished'] = -1;							
	}
	function play(s) 
	{
		for (a=0;a<channels.length;a++) 
		{
			time = new Date();
			if (channels[a]['finished'] < time.getTime()) 
			{		
				channels[a]['finished'] = time.getTime() + document.getElementById(s).duration*1000;
				channels[a]['channel'].src = document.getElementById(s).src;
				channels[a]['channel'].load();
				channels[a]['channel'].play();
				break;
			}
		}
	}
