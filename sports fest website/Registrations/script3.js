function validateEmail() {
    var x = document.myForm.EMail.value;
	var y = document.myForm.ReEMail.value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		var i=document.getElementById("em");
				//i.className = "invalid"
		var j=document.getElementById("EMail");
		alert("Not a valid e-mail address. Please provide a vadid email address");
		document.myForm.EMail.focus();
		document.myForm.EMail.onfocus=myfun(i,j);
		
        return false;
    }
	if(x!=y){
		var i=document.getElementById("rem");
				//i.className = "invalid"
		var j=document.getElementById("ReEMail");
		alert("please enter the same email as above!");
		document.myForm.ReEMail.focus();
		document.myForm.EMail.onfocus=myfun(i,j);
		
        return false;
    }
	
	function myfun(p,q){
				//p.className="valid";
		var z=q.className;
		document.getElementById(z).style.color="#F00000";
		document.getElementById(z).style.fontSize="18px";
		document.getElementById(z).style.fontWeight="bold";
		q.value="";
		q.style.border="2px solid FF3300";
		q.style.background="#FFFF66";
		return false;
	}
	
	 
	
	return false;	
}