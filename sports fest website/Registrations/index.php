<!DOCTYPE HTML5>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Registration</title>   
    <link rel="shortcut icon" href="favicon.ico">
<meta name="description" content="Pearl is the cultural fest of BITS Pilani Hyderabad Campus" /> 
    <meta name="keywords" content="Pearl, Cultural Fest, BITS Pilani">
    <meta name="author" content="BITS Pilani Hyderabad">

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>  
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
				
				<div class="gam">
				<label for="sport" id="game" class="">Sport to participate :    &nbsp &nbsp &nbsp</label>
				<select name="sport">
					<option value="">Select...</option>
					
					<option value="Stand up Comedy">Badminton</option>
					<option value="Street Play">Basketball</option>
					<option value="Street Play">Cricket</option>
					
					<option value="Stand up Comedy">Duatlaon</option>
					<option value="Sports Quiz">Football</option>
					<option value="Sports Quiz">Lawn tennis</option>
					
					<!--<option value="Glitterati">Glitterati</option>
					<option value="Till Deaf do We Part">Till Deaf do We Part</option>
					<option value="Terpsicore">Terpsicore</option>
					<option value="Abhilekh">Abhilekh</option>
					<option value="Abhivyaktika">Abhivyaktika</option>
					<option value="Anti-Image">Anti-Image</option>
					<option value="Anti-Shipwreck">Anti-Shipwreck</option>
					<option value="Avant Grade">Avant Grade</option>
					<option value="BITS 'talkies'">BITS 'talkies'</option>
					<option value="BITS Business Quiz">BITS Business Quiz</option>
					<option value="CMYK">CMYK</option>
					<option value="Deaf and Dumb">Deaf and Dumb</option>
					<option value="Double Trouble">Double Trouble</option>
					<option value="Entertainment Quiz">Entertainment Quiz</option>
					<option value="Expressions">Expressions</option>
					<option value="Fiesta Chroma">Fiesta Chroma</option>
					<option value="Football Manager">Football Manager</option>
					<option value="FX'ed">FX'ed</option>
					<option value="Gandhaara">Gandhaara</option>
					<option value="Indiana Tones">Indiana Tones</option>
					<option value="Jhankaar">Jhankaar</option>
					<option value="Kaleidoscope">Kaleidoscope</option>
					<option value="Knights Templar Ciphers">Knights Templar Ciphers</option>
					<option value="Light Painting">Light Painting</option>
					<option value="Lone Wolf Quiz">Lone Wolf Quiz</option>
					<option value="Mā">Mā</option>
					<option value="Midnight AV">Midnight AV</option>
					<option value="ythic Digital Art">ythic Digital Art</option>
					<option value="Nāṭyaśāstra">Nāṭyaśāstra</option>
					<option value="Pastiche">Pastiche</option>
					<option value="Pearl General Quiz">Pearl General Quiz</option>
					<option value="Pearl JAM">Pearl JAM</option>
					<option value="Photog Quiz">Photog Quiz</option>
					<option value="Photog Race">Photog Race</option>
					<option value="Retrospective">Retrospective</option>
					<option value="Schedios">Schedios</option>
					<option value="SCORE-D">SCORE-D</option>
					<option value="Sherlocked">Sherlocked</option>
					<option value="Slumber Party">Slumber Party</option>
					<option value="Soul' O">Soul' O</option>
					<option value="Spawn It">Spawn It</option>
					<option value="Sports Quiz">Sports Quiz</option>
					<option value="Stand up Comedy">Stand up Comedy</option>
					<option value="Street Play">Street Play</option>
					<option value="Template">Template</option>
					<option value="The 48 hour movie">The 48 hour movie</option>
					<option value="The Fourth Estate">The Fourth Estate</option>
					<option value="The Front Page">The Front Page</option>
					<option value="The Legendary quiz">The Legendary quiz</option>
					<option value="Themes 2K15">Themes 2K15</option>
					<option value="Thy Manga Myth">Thy Manga Myth</option>
					<option value="Waste smART">Waste smART</option>
					<option value="Words of a feather">Words of a feather</option>
					<option value="Yin Yang">Yin Yang</option>
					<option value="Youth Mahasaha">Youth Mahasaha</option>-->
					
				</select><br><br>
				<div>
				
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