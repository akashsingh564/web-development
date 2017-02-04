function validate()
{

   

   
   if( document.myForm.contact.value == "" ||
           isNaN( document.myForm.contact.value ) ||
           document.myForm.contact.value.length != 10 )
   {
     var x=document.getElementById("zipp");
			//x.className = "invalid"
	 var y=document.getElementById("Zip");
     alert( "Please Please provide a vlalid contact number" );
     document.myForm.Zip.focus() ;
	 document.myForm.Zip.onfocus=myfun(x,y);

     return false;
   }
   
	
   
   function myfun(p,q){
				//p.className="valid";
		var z=q.className;
		document.getElementById(z).style.color="#DE5E60";
		document.getElementById(z).style.fontSize="21px";
		document.getElementById(z).style.fontWeight="bold";
		q.value="";
		q.style.border="2px solid #FF3300";
		q.style.background="#FFFF66";
		return false;
	}
	
	
}



   
   