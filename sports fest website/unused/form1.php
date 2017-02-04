<!DOCTYPE HTML5>
<head>
	<meta charset="utf-8" />
	<tittle></tittle>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script1.js"></script>
	<script type="text/javascript" src="script2.js"></script>
	<script type="text/javascript" src="script3.js"></script>
	<script type="text/javascript" src="script4.js"></script>
	<link rel="stylesheet" href="style4.css">   <!-- to load .css file externally -->
</head>	

<body>
<div class="contain" style="width:1300px; margin:0 auto;">
<form action="run.php" name="myForm" onsubmit="return( validate() );"  method="post" target="">
			<fieldset align="center">
			<legend>Registration Form</legend>
			<!--<h4>NOTE:</h4><p><b>Only team captains need to register here.</b> For the registrations of the rest of the team, you will be provided a Google document, sent through mail. </p>-->
			<div class="rasberry">
			
			<div class="conf">
			
				<h3 class="conf"><label for="conf" id="conf" class="conf" visibility: hidden;>You have successfully registered for Arena 15.</label></h3>
			</div>
				<label for="firstname" id="fn" class="">First-Name :&nbsp &nbsp &nbsp &nbsp &nbsp</label>
				<input type="text" maxlength="25" name="firstname" id="firstname" class="fn" onfocus="funon( this );" onblur="funoff( this );" autofocus required/> <br><br>
				 
				<label for="lastname" id="ln" class="">Last-Name :&nbsp &nbsp &nbsp &nbsp &nbsp </label> 
				<input type="text" maxlength="25" name="lastname" id="lastname" class="ln" onfocus="funon( this );" onblur="funoff( this );"/ required> <br><br>
				
				<label for="gender" id="sexx" class="styled">Gender :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
				<input type="radio" name="sex" id="gender" class="sexx" value="Male" required>Male&nbsp &nbsp &nbsp
				<input type="radio" name="sex" id="gender" class="sexx" value="Female" required>Female&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<br><br>
				
				<!--<div class="gam">
				<label for="sport" id="game" class="">Sport :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp</label>
				<select name="sport">
					<option value="">Select...</option>
					<option value="Athletics">Athletics</option>
					<option value="Badminton">Badminton</option>
					<option value="Basketball">BasketBall</option>
					<option value="Billiards">Billiards</option>
					<option value="Carrom">Carrom</option>
					<option value="Chess">Chess</option>
					<option value="Cricket">Cricket</option>
					<option value="Duathlon">Duathlon</option>
					<option value="Football">Football</option>
					<option value="Hockey">Hockey</option>
					<option value="Kabaddi">Kabaddi</option>
					<option value="Power Lifting">Power Lifting</option>
					<option value="TT">Tabel Tennis</option>
					<option value="Tennis">Tennis</option>
					<option value="Ultimate Frisbee">Ultimate Frisbee</option>
					<option value="Vollyball">Vollyball</option>
					
				</select><br><br>
				<div>-->
				
				<label for="college" id="col" class="">College :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp</label> 
				<input type="text" maxlength="100" name="college" id="college" class="col" onfocus="funon( this );" onblur="funoff( this );"/ required> <br><br>
				
				<label for="contact"  id="zipp" class="">Contact No. :&nbsp &nbsp &nbsp &nbsp </label>
				<input type="number" maxlength="10" name="contact" id="Zip" class="zipp" onfocus="funon( this );" onblur="funoff( this );"/ required> <br><br>
				
				<label for="email" id="em" class="">E-Mail address :&nbsp&nbsp</label> 
				<input type="email" maxlength="40" name="email" id="email" class="em" onfocus="funon( this );" onblur="funoff( this);" required/> <br><br>
				
				
					<br>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				&nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="submit" value="Submit" />
				<br><br><br>
				</div>
				</fieldset>

</form>
</div>
</body>