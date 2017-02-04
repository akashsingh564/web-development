var i=0;
var classname = ["main1","main2","main3"]; 

$(document).ready(function(){
		var target_date = new Date(2015, 01, 05,19,0,0,0).getTime();
		time();
		
		var t=$("#splash_img2").height();
		
		/*window.addEventListener("resize", myFunction);
		function myFunction() {
			location.reload(false);
		}*/
		
		if (navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0) {
			alert("Seems like you are using INTERNET EXPLORER. For best results, PLEASE use GOOGLE CHROME");
		}
		else
		if ((navigator.appVersion.indexOf(" Apple") == -1) && !((navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0))) {
			alert("Best viewed on Google chrome");
		}
		if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) 
		{
		   alert("Best viewed on Google chrome or Mozila Firefox");          
		}


	var height = $(window).height();
	var width = $(window).width();
	
	var minwid = screen.width;
	$('body').css({"minWidth":(minwid)});
	
	if(minwid<1366)
	{
		$('body').css({"minWidth":'1366px'});
	}
	
	
	var h2=height-t-50;
	$('#holder').css({"top":h2});
	
	var w1=width- 100;
	$('#splashscreen').css({"width":(width)});
	$('#splashscreen').css({"height":(height)});
	
	$('#about_us').css({"height":(height-64)});
	
	$("#splash_img2").click(function(){
		$("#splashscreen").fadeOut(400);
		$('#container').css({"display":'initial'});
		$('#test1').css({"display":'initial'});
	});
	
	$("#unique").mouseenter(function(){
		$('.drop_down').css({"display":'initial'});
	});
	$("#fffff, .lets").mouseenter(function(){
		$('.drop_down').css({"display":'none'});
	});

	$(".drop_down").click(function(){
		$(".drop_down").css({"display":'none'});
	});
	
		
	var height_menu= $("#main_menu").outerHeight();
	var h3= height;
	$('#slide_show').css({"height":'650px',marginTop:'height_menu'});
	
	//var h4=height-60;
	var h4=590;
	$('#about_us').css({"height":'550px'});
	$('#register , #vihang, #spons').css({"height":h4});
	$('.hold').css({"height":(h4-120)});
	var h5=h4+50+60;
	$('#event').css({"height":h5});
	
	var t1=$(".testa").outerHeight();
	
	
	
	/*myVar = setInterval(function(){classChange()}, 3500);		
		function classChange() {
			$("#slide_show").attr("class", classname[i]);
			if (i == 2){
				i = 0;
			} else {
				i++;
			}
		}*/
		
		
	$("#display1").mouseenter(function(){
		$('#one1').css({"visibility":'visible',"left":'0px'});
		$('#two1').css({"visibility":'visible',"left":'110px'});
	});
	$("#display1").mouseleave(function(){
		$('#one1').css({"left":'-140px'});
		$('#two1').css({"left":'250px'});
	});	
	$("#two1, #display1").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show1').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show1').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});	
	
	$("#display2").mouseenter(function(){
		$('#one2').css({"visibility":'visible',"left":'0px'});
		$('#two2').css({"visibility":'visible',"left":'110px'});
	});
	$("#display2").mouseleave(function(){
		$('#one2').css({"left":'-140px'});
		$('#two2').css({"left":'250px'});
	});	
	$("#two2, #display2").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show2').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show2').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});	
	
	$("#display3").mouseenter(function(){
		$('#one3').css({"visibility":'visible',"left":'0px'});
		$('#two3').css({"visibility":'visible',"left":'110px'});
	});
	$("#display3").mouseleave(function(){
		$('#one3').css({"left":'-140px'});
		$('#two3').css({"left":'250px'});
	});	
	$("#two3, #display3").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show3').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show3').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});	
	
	$("#display4").mouseenter(function(){
		$('#one4').css({"visibility":'visible',"left":'0px'});
		$('#two4').css({"visibility":'visible',"left":'110px'});
	});
	$("#display4").mouseleave(function(){
		$('#one4').css({"left":'-140px'});
		$('#two4').css({"left":'250px'});
	});	
	$("#two4, #display4").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show4').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show4').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display5").mouseenter(function(){
		$('#one5').css({"visibility":'visible',"left":'0px'});
		$('#two5').css({"visibility":'visible',"left":'110px'});
	});
	$("#display5").mouseleave(function(){
		$('#one5').css({"left":'-140px'});
		$('#two5').css({"left":'250px'});
	});	
	$("#two5, #display5").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show5').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show5').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display6").mouseenter(function(){
		$('#one6').css({"visibility":'visible',"left":'0px'});
		$('#two6').css({"visibility":'visible',"left":'110px'});
	});
	$("#display6").mouseleave(function(){
		$('#one6').css({"left":'-140px'});
		$('#two6').css({"left":'250px'});
	});	
	$("#two6, #display6").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show6').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show6').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display7").mouseenter(function(){
		$('#one7').css({"visibility":'visible',"left":'0px'});
		$('#two7').css({"visibility":'visible',"left":'110px'});
	});
	$("#display7").mouseleave(function(){
		$('#one7').css({"left":'-140px'});
		$('#two7').css({"left":'250px'});
	});	
	$("#two7, #display7").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show7').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show7').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display8").mouseenter(function(){
		$('#one8').css({"visibility":'visible',"left":'0px'});
		$('#two8').css({"visibility":'visible',"left":'110px'});
	});
	$("#display8").mouseleave(function(){
		$('#one8').css({"left":'-140px'});
		$('#two8').css({"left":'250px'});
	});	
	$("#two8, #display8").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show8').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show8').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display9").mouseenter(function(){
		$('#one9').css({"visibility":'visible',"left":'0px'});
		$('#two9').css({"visibility":'visible',"left":'110px'});
	});
	$("#display9").mouseleave(function(){
		$('#one9').css({"left":'-140px'});
		$('#two9').css({"left":'250px'});
	});	
	$("#two9, #display9").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show9').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show9').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display10").mouseenter(function(){
		$('#one10').css({"visibility":'visible',"left":'0px'});
		$('#two10').css({"visibility":'visible',"left":'110px'});
	});
	$("#display10").mouseleave(function(){
		$('#one10').css({"left":'-140px'});
		$('#two10').css({"left":'250px'});
	});	
	$("#two10, #display10").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show10').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show10').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display11").mouseenter(function(){
		$('#one11').css({"visibility":'visible',"left":'0px'});
		$('#two11').css({"visibility":'visible',"left":'110px'});
	});
	$("#display11").mouseleave(function(){
		$('#one11').css({"left":'-140px'});
		$('#two11').css({"left":'250px'});
	});	
	$("#two11, #display11").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show11').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show11').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display12").mouseenter(function(){
		$('#one12').css({"visibility":'visible',"left":'0px'});
		$('#two12').css({"visibility":'visible',"left":'110px'});
	});
	$("#display12").mouseleave(function(){
		$('#one12').css({"left":'-140px'});
		$('#two12').css({"left":'250px'});
	});	
	$("#two12, #display12").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show12').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show12').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display13").mouseenter(function(){
		$('#one13').css({"visibility":'visible',"left":'0px'});
		$('#two13').css({"visibility":'visible',"left":'110px'});
	});
	$("#display13").mouseleave(function(){
		$('#one13').css({"left":'-140px'});
		$('#two13').css({"left":'250px'});
	});	
	$("#two13, #display13").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show13').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show13').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display14").mouseenter(function(){
		$('#one14').css({"visibility":'visible',"left":'0px'});
		$('#two14').css({"visibility":'visible',"left":'110px'});
	});
	$("#display14").mouseleave(function(){
		$('#one14').css({"left":'-140px'});
		$('#two14').css({"left":'250px'});
	});	
	$("#two14, #display14").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show14').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show14').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	
	$("#display15").mouseenter(function(){
		$('#one15').css({"visibility":'visible',"left":'0px'});
		$('#two15').css({"visibility":'visible',"left":'110px'});
	});
	$("#display15").mouseleave(function(){
		$('#one15').css({"left":'-140px'});
		$('#two15').css({"left":'250px'});
	});	
	$("#two15, #display15").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show15').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show15').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	$("#display16").mouseenter(function(){
		$('#one16').css({"visibility":'visible',"left":'0px'});
		$('#two16').css({"visibility":'visible',"left":'110px'});
	});
	$("#display16").mouseleave(function(){
		$('#one16').css({"left":'-140px'});
		$('#two16').css({"left":'250px'});
	});	
	$("#two16, #display16").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show16').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show16').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});

	
	
	var days, hours, minutes, seconds;
	var countdown = document.getElementById("countdown");
	myVar = setInterval(function(){time()}, 1000);
	function time() {
		var current_date = new Date().getTime();
		var seconds_left = (target_date - current_date) / 1000;
		days = parseInt(seconds_left / 86400);
		seconds_left = seconds_left % 86400;
		 
		hours = parseInt(seconds_left / 3600);
		seconds_left = seconds_left % 3600;
		  
		minutes = parseInt(seconds_left / 60);
		seconds = parseInt(seconds_left % 60);
		if(days<=0 && hours<=0 && minutes<=0 && seconds<=0)
			{
				//clearInterval(myVar);
				days=0;
				hours=0;
				minutes=0;
				seconds=0;
			}
		d.innerHTML = days;
		h.innerHTML = hours;
		m.innerHTML = minutes;
		s.innerHTML = seconds;
		
		
	}

	
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
	
	
	$("#cont1").mouseenter(function(){
		$('.testa1').css({"visibility":'hidden'});
		$('#cont4').css({"visibility":'visible',"top":'-50px'});
	});
	$("#cont1").mouseleave(function(){
		$('.testa1').css({"visibility":'initial'});
		$('#cont4').css({"visibility":'hidden',"top":'222px'});
	});	

	$("#cont2").mouseenter(function(){
		$('.testa2').css({"visibility":'hidden'});
		$('#cont5').css({"visibility":'visible',"top":'-50px'});
	});
	$("#cont2").mouseleave(function(){
		$('.testa2').css({"visibility":'initial'});
		$('#cont5').css({"visibility":'hidden',"top":'222px'});
	});	
		
	$("#cont3").mouseenter(function(){
		$('.testa3').css({"visibility":'hidden'});
		$('#cont6').css({"visibility":'visible',"top":'-50px'});
	});
	$("#cont3").mouseleave(function(){
		$('.testa3').css({"visibility":'initial'});
		$('#cont6').css({"visibility":'hidden',"top":'222px'});
	});	
	
	$("#cont4").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show17').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show17').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});

	$("#cont5").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show18').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show18').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});	
	
	$("#cont6").click(function(){
		$('#overlay').css({"visibility":'initial'});
		$('#show19').css({"visibility":'initial',"marginTop":'-214px'});
	});	
	$(".close , #overlay").click(function(){
		$('#show19').css({"marginTop":'-1204px'});
		$('#overlay').css({"visibility":'hidden'});
	});
	

});