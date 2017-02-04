function funon(x){
		x.style.background="#F5F5F0";
		var y=x.className;
		document.getElementById(y).style.fontSize="21px";
		document.getElementById(y).style.color="#DE5E60";
		document.getElementById(y).style.fontWeight="bold";
		document.getElementById('conf1').style.fontWeight= "bold";

	}
	function funoff(x){
		x.style.background="white";
		x.style.border="1px solid grey";
		var y=x.className;
		document.getElementById(y).style.fontSize="20px";
		document.getElementById(y).style.fontWeight="lighter";
		document.getElementById(y).style.color="#7F8289";

	}