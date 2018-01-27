<!DOCTYPE html>
<?php
	//connect
	$dbconn = mysqli_connect("localhost","root","","profile-generator");
	//Get names
	//
	//African
		//female
		$resAfrFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayAfrFemaleNames = array ();
		while ($row = mysqli_fetch_array($resAfrFN)){
			array_push ($arrayAfrFemaleNames, $row['African']);
		}
		//male
		$resAfrMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayAfrMaleNames = array ();
		while ($row = mysqli_fetch_array($resAfrMN)){
			array_push ($arrayAfrMaleNames, $row['African']);
		}
		//last
		$resAfrLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayAfrLastNames = array ();
		while ($row = mysqli_fetch_array($resAfrLN)){
			array_push ($arrayAfrLastNames, $row['African']);
		}
	//Egyptian
		//female
		$resEGAfrFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayEGAfrFemaleNames = array ();
		while ($row = mysqli_fetch_array($resEGAfrFN)){
			array_push ($arrayEGAfrFemaleNames, $row['Egyptian']);
		}
		//male
		$resEGAfrMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayEGAfrMaleNames = array ();
		while ($row = mysqli_fetch_array($resEGAfrMN)){
			array_push ($arrayEGAfrMaleNames, $row['Egyptian']);
		}
		//last
		$resEGAfrLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayEGAfrLastNames = array ();
		while ($row = mysqli_fetch_array($resEGAfrLN)){
			array_push ($arrayEGAfrLastNames, $row['Egyptian']);
		}
	//South African
		//female
		$resSAfrFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arraySAfrFemaleNames = array ();
		while ($row = mysqli_fetch_array($resSAfrFN)){
			array_push ($arraySAfrFemaleNames, $row['SouthAfrican']);
		}
		//male
		$resSAfrMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arraySAfrMaleNames = array ();
		while ($row = mysqli_fetch_array($resSAfrMN)){
			array_push ($arraySAfrMaleNames, $row['SouthAfrican']);
		}
		//last
		$resSAfrLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arraySAfrLastNames = array ();
		while ($row = mysqli_fetch_array($resSAfrLN)){
			array_push ($arraySAfrLastNames, $row['SouthAfrican']);
		}
	//Oceania
		//female
		$resOceFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayOceFemaleNames = array ();
		while ($row = mysqli_fetch_array($resOceFN)){
			array_push ($arrayOceFemaleNames, $row['Oceania']);
		}
		//male
		$resOceMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayOceMaleNames = array ();
		while ($row = mysqli_fetch_array($resOceMN)){
			array_push ($arrayOceMaleNames, $row['Oceania']);
		}
		//last
		$resOceLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayOceLastNames = array ();
		while ($row = mysqli_fetch_array($resOceLN)){
			array_push ($arrayOceLastNames, $row['Oceania']);
		}
	//Oriental
		//female
		$resAsOrFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayAsOrFemaleNames = array ();
		while ($row = mysqli_fetch_array($resAsOrFN)){
			array_push ($arrayAsOrFemaleNames, $row['Oriental']);
		}
		//male
		$resAsOrMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayAsOrMaleNames = array ();
		while ($row = mysqli_fetch_array($resAsOrMN)){
			array_push ($arrayAsOrMaleNames, $row['Oriental']);
		}
		//last
		$resAsOrLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayAsOrLastNames = array ();
		while ($row = mysqli_fetch_array($resAsOrLN)){
			array_push ($arrayAsOrLastNames, $row['Oriental']);
		}
	//Middle Eastern
		//female
		$resAsMEFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayAsMEFemaleNames = array ();
		while ($row = mysqli_fetch_array($resAsMEFN)){
			array_push ($arrayAsMEFemaleNames, $row['MiddleEastern']);
		}
		//male
		$resAsMEMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayAsMEMaleNames = array ();
		while ($row = mysqli_fetch_array($resAsMEMN)){
			array_push ($arrayAsMEMaleNames, $row['MiddleEastern']);
		}
		//last
		$resAsMELN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayAsMELastNames = array ();
		while ($row = mysqli_fetch_array($resAsMELN)){
			array_push ($arrayAsMELastNames, $row['MiddleEastern']);
		}
	//Indian
		//female
		$resAsInFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayAsInFemaleNames = array ();
		while ($row = mysqli_fetch_array($resAsInFN)){
			array_push ($arrayAsInFemaleNames, $row['Indian']);
		}
		//male
		$resAsInMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayAsInMaleNames = array ();
		while ($row = mysqli_fetch_array($resAsInMN)){
			array_push ($arrayAsInMaleNames, $row['Indian']);
		}
		//last
		$resAsInLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayAsInLastNames = array ();
		while ($row = mysqli_fetch_array($resAsInLN)){
			array_push ($arrayAsInLastNames, $row['Indian']);
		}
	//Slavic
		//female
		$resEUSlaFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayEUSlaFemaleNames = array ();
		while ($row = mysqli_fetch_array($resEUSlaFN)){
			array_push ($arrayEUSlaFemaleNames, $row['Slavic']);
		}
		//male
		$resEUSlaMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayEUSlaMaleNames = array ();
		while ($row = mysqli_fetch_array($resEUSlaMN)){
			array_push ($arrayEUSlaMaleNames, $row['Slavic']);
		}
		//last
		$resEUSlaLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayEUSlaLastNames = array ();
		while ($row = mysqli_fetch_array($resEUSlaLN)){
			array_push ($arrayEUSlaLastNames, $row['Slavic']);
		}
	//Nordic
		//female
		$resEUNorFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayEUNorFemaleNames = array ();
		while ($row = mysqli_fetch_array($resEUNorFN)){
			array_push ($arrayEUNorFemaleNames, $row['Nordic']);
		}
		//male
		$resEUNorMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayEUNorMaleNames = array ();
		while ($row = mysqli_fetch_array($resEUNorMN)){
			array_push ($arrayEUNorMaleNames, $row['Nordic']);
		}
		//last
		$resEUNorLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayEUNorLastNames = array ();
		while ($row = mysqli_fetch_array($resEUNorLN)){
			array_push ($arrayEUNorLastNames, $row['Nordic']);
		}
	//Hispanic
		//female
		$resHispFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayHispFemaleNames = array ();
		while ($row = mysqli_fetch_array($resHispFN)){
			array_push ($arrayHispFemaleNames, $row['Hispanic']);
		}
		//male
		$resHispMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayHispMaleNames = array ();
		while ($row = mysqli_fetch_array($resHispMN)){
			array_push ($arrayHispMaleNames, $row['Hispanic']);
		}
		//last
		$resHispLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayHispLastNames = array ();
		while ($row = mysqli_fetch_array($resHispLN)){
			array_push ($arrayHispLastNames, $row['Hispanic']);
		}
	//Germanic
		//female
		$resGerFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayGerFemaleNames = array ();
		while ($row = mysqli_fetch_array($resGerFN)){
			array_push ($arrayGerFemaleNames, $row['Germanic']);
		}
		//male
		$resGerMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayGerMaleNames = array ();
		while ($row = mysqli_fetch_array($resGerMN)){
			array_push ($arrayGerMaleNames, $row['Germanic']);
		}
		//last
		$resGerLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayGerLastNames = array ();
		while ($row = mysqli_fetch_array($resGerLN)){
			array_push ($arrayGerLastNames, $row['Germanic']);
		}
	//French
		//female
		$resFreFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayFreFemaleNames = array ();
		while ($row = mysqli_fetch_array($resFreFN)){
			array_push ($arrayFreFemaleNames, $row['French']);
		}
		//male
		$resFreMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayFreMaleNames = array ();
		while ($row = mysqli_fetch_array($resFreMN)){
			array_push ($arrayFreMaleNames, $row['French']);
		}
		//last
		$resFreLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayFreLastNames = array ();
		while ($row = mysqli_fetch_array($resFreLN)){
			array_push ($arrayFreLastNames, $row['French']);
		}
	//Italian
		//female
		$resItaFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayItaFemaleNames = array ();
		while ($row = mysqli_fetch_array($resItaFN)){
			array_push ($arrayItaFemaleNames, $row['Italian']);
		}
		//male
		$resItaMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayItaMaleNames = array ();
		while ($row = mysqli_fetch_array($resItaMN)){
			array_push ($arrayItaMaleNames, $row['Italian']);
		}
		//last
		$resItaLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayItaLastNames = array ();
		while ($row = mysqli_fetch_array($resItaLN)){
			array_push ($arrayItaLastNames, $row['Italian']);
		}
	//US/UK
		//female
		$resUSUKFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arrayUSUKFemaleNames = array ();
		while ($row = mysqli_fetch_array($resUSUKFN)){
			array_push ($arrayUSUKFemaleNames, $row['USUK']);
		}
		//male
		$resUSUKMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arrayUSUKMaleNames = array ();
		while ($row = mysqli_fetch_array($resUSUKMN)){
			array_push ($arrayUSUKMaleNames, $row['USUK']);
		}
		//last
		$resUSUKLN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arrayUSUKLastNames = array ();
		while ($row = mysqli_fetch_array($resUSUKLN)){
			array_push ($arrayUSUKLastNames, $row['USUK']);
		}
	//South America
		//female
		$resSAFN = mysqli_query($dbconn,"SELECT * FROM tblFemaleNames");
		$arraySAFemaleNames = array ();
		while ($row = mysqli_fetch_array($resSAFN)){
			array_push ($arraySAFemaleNames, $row['SouthAmerica']);
		}
		//male
		$resSAMN = mysqli_query($dbconn,"SELECT * FROM tblMaleNames");
		$arraySAMaleNames = array ();
		while ($row = mysqli_fetch_array($resSAMN)){
			array_push ($arraySAMaleNames, $row['SouthAmerica']);
		}
		//last
		$resSALN = mysqli_query($dbconn,"SELECT * FROM tblLastNames");
		$arraySALastNames = array ();
		while ($row = mysqli_fetch_array($resSALN)){
			array_push ($arraySALastNames, $row['SouthAmerica']);
		}
	//email parts
	//bus
	$resBS = mysqli_query($dbconn,"SELECT * FROM tblEstablishments");
	$arrayBusNames = array ();
	while ($row = mysqli_fetch_array($resBS)){
		array_push ($arrayBusNames, $row['BusName']);
	}
	//edu
	$resES = mysqli_query($dbconn,"SELECT * FROM tblEstablishments");
	$arrayEduNames = array ();
	while ($row = mysqli_fetch_array($resES)){
		array_push ($arrayEduNames, $row['EduName']);
	}
	//email extras
	//female
	$resFE = mysqli_query($dbconn,"SELECT * FROM tblExtras");
	$arrayFemaleExtras = array ();
	while ($row = mysqli_fetch_array($resFE)){
		array_push ($arrayFemaleExtras, $row['FemaleExtra']);
	}
	//male
	$resME = mysqli_query($dbconn,"SELECT * FROM tblExtras");
	$arrayMaleExtras = array ();
	while ($row = mysqli_fetch_array($resME)){
		array_push ($arrayMaleExtras, $row['MaleExtra']);
	}
	//disconnect
	mysqli_close($dbconn);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Generate Profiles</title>
		<link rel="stylesheet" type="text/css" href="mainstyle.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="bg">
				<div class = "mainContent">
					<h1>User Profile Generator</h1>
					<hr>
					<br>
					<p>Enter the amount of people you would like to generate and click the button below. You will get a set of pretend data to use for testing.</p>
					<p style="color:grey; font-size:10px;"><i>Note: You may attempt to generate anywhere from 1 to 1,000,000 people though higher amounts may cause crashing. If a message stating that this site is slowing your browser appears, click wait when it asks and the results will eventually finish.</i></p>
					<br>
					<center>
						<div class="contentcontainer">
							<form name="userInput">
								<p>Amount of people to generate:</p>
								<input type="text" name="amount"></input>
								<p><div id="getMinYear"></div></p>
								<input type="text" name="minYear"></input>
								<p><div id="getMaxYear"></div></p>
								<input type="text" name="maxYear"></input>
								<p>Include unprofessional emails?</p>
								<input type="checkbox" name="unprofEmailQ"></input>
								<br>
								<input type="button" name="btnSubmit" value="Generate" onclick="fieldCheck()"></input>
							</form>
						</div>
					</center>
					<br>
					<center>
						<div id="result">
							<div class="contentcompressor">
								<h3>Guide:</h3>
								<br>
								<br>
								<p>This tool will generate a set amount of pretend user profiles to use for testing/populating databases and other such applications. This has been created with pure JavaScript as well as a little HTML, CSS and PHP. Each pretend user profile will contain a full-name, gender, email address, place or origin and date of birth. There are a lot of random chances in the code meaning the results are very unpredictable and the combinations are great. Please refer to the guide below.</p>
								<br>
								<ol>
									<li>Enter the amount of people you would like to create</li><br>
									<li>Choose a minimum and maximum birthday year. Your results will sit between the two years.</li><br>
									<li>If you would like unprofessional emails for additional realism, select the check box</li><br>
									<li>Hit the 'Generate' button and a table containing your data will be created</li><br>
									<li>If any alerts from your browser ask if you would like to stop or wait, please click wait as large amounts will take time but eventually will be created.</li><br>
									<li>You may use this data for whatever purpose you like.</li>
								</ol>
							</div>
						</div>
					</center>
				</div>
				<div class = "footer">
					<div class="flex-item">
						<center>
							<table id="tblFooter">
								<tr>
									<td><p><strong style = "font-family: 'Josefin Slab', serif; color: #ff3b00 ;">Robert</strong><i style = "font-family: 'Josefin Slab', serif; color:#ffffff;">Dixon</i></p><p style = "color:#ffffff;"><i style = "color:#ffffff;"><script>document.write(new Date().getFullYear());</script></i></p></td>
									<td><br></td>
									<td>|</td>
									<td style="color:#ff3b00;">Professional Links:</td>
									<td>|</td>
									<td>Other Links:</td>
								</tr>
								<tr>
									<td></td>
									<td><br></td>
									<td>|</td>
									<td><a href="https://github.com/RDixon626" target="_blank" style="color:white;">GitHub</a></td>
									<td>|</td>
									<td><a href="https://www.youtube.com/channel/UCJzbn2nXw6h0lyC3XwLnlVQ" target="_blank" style="color:white;">YouTube</a></td>
								</tr>
								<tr>
									<td>This was created for a small challenge and has not been put to professional use.</td>
									<td><br></td>
									<td>|</td>
									<td><a href="https://www.linkedin.com/in/robert-dixon-42944a158" target="_blank" style="color:white;">LinkedIn</a></td>
									<td>|</td>
									<td><a href="https://e-h-music.bandcamp.com/" target="_blank" style="color:white;">BandCamp</a></td>
								</tr>
								<tr>
									<td>Feel free to use this as you please.</td>
									<td><br></td>
									<td>|</td>
									<td><a href="https://www.sololearn.com/Profile/3364736" target="_blank" style="color:white;">SoloLearn</a></td>
									<td>|</td>
									<td><a href="https://soundcloud.com/e-h-music" target="_blank" style="color:white;">Soundcloud</a></td>
								
								</tr>
							</table>
						</center>
					</div>
				</div>
			</div>
		<script type="text/javascript">
		//script for footer
			//home
			function homeFunction() {
				location.href="index.php";
			}
			function myBasket() {
				location.href="basket.php";
			}
			//website links
			function facebookFunction(){
				location.href="http://www.facebook.com";
			}
			function twitterFunction() {
				location.href="http://www.twitter.com";
			}
			function soundcloudFunction(){
				location.href="https://soundcloud.com/e-h-music";
			}
			function youtubeFunction(){
				location.href="https://www.youtube.com/c/EHMusic";
			}
			//page top
			var delay;
			function topFunction() {
				if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
					window.scrollBy(0,-50);
					delay=setTimeout('topFunction()',10);
				}
				else clearTimeout(delay);
			}
		//script for generator
			//arrays of names and other data
			//African
			var arrAfrMaleFirst = <?php echo (json_encode($arrayAfrMaleNames));?>;
			var arrAfrFemaleFirst = <?php echo (json_encode($arrayAfrFemaleNames));?>;
			var arrAfrLastName = <?php echo (json_encode($arrayAfrLastNames));?>;
			//Egyptian
			var arrEGAfrMaleFirst = <?php echo (json_encode($arrayEGAfrMaleNames));?>;
			var arrEGAfrFemaleFirst = <?php echo (json_encode($arrayEGAfrFemaleNames));?>;
			var arrEGAfrLastName = <?php echo (json_encode($arrayEGAfrLastNames));?>;
			//South African
			var arrSAfrMaleFirst = <?php echo (json_encode($arraySAfrMaleNames));?>;
			var arrSAfrFemaleFirst = <?php echo (json_encode($arraySAfrFemaleNames));?>;
			var arrSAfrLastName = <?php echo (json_encode($arraySAfrLastNames));?>;
			//Oceania
			var arrOceMaleFirst = <?php echo (json_encode($arrayOceMaleNames));?>;
			var arrOceFemaleFirst = <?php echo (json_encode($arrayOceFemaleNames));?>;
			var arrOceLastName = <?php echo (json_encode($arrayOceLastNames));?>;
			//Oriental
			var arrAsOrMaleFirst = <?php echo (json_encode($arrayAsOrMaleNames));?>;
			var arrAsOrFemaleFirst = <?php echo (json_encode($arrayAsOrFemaleNames));?>;
			var arrAsOrLastName = <?php echo (json_encode($arrayAsOrLastNames));?>;
			//Middle Eastern
			var arrAsMEMaleFirst = <?php echo (json_encode($arrayAsMEMaleNames));?>;
			var arrAsMEFemaleFirst = <?php echo (json_encode($arrayAsMEFemaleNames));?>;
			var arrAsMELastName = <?php echo (json_encode($arrayAsMELastNames));?>;
			//Indian
			var arrAsInMaleFirst = <?php echo (json_encode($arrayAsInMaleNames));?>;
			var arrAsInFemaleFirst = <?php echo (json_encode($arrayAsInFemaleNames));?>;
			var arrAsInLastName = <?php echo (json_encode($arrayAsInLastNames));?>;
			//Slavic
			var arrEUSlaMaleFirst = <?php echo (json_encode($arrayEUSlaMaleNames));?>;
			var arrEUSlaFemaleFirst = <?php echo (json_encode($arrayEUSlaFemaleNames));?>;
			var arrEUSlaLastName = <?php echo (json_encode($arrayEUSlaLastNames));?>;
			//Nordic
			var arrEUNorMaleFirst = <?php echo (json_encode($arrayEUNorMaleNames));?>;
			var arrEUNorFemaleFirst = <?php echo (json_encode($arrayEUNorFemaleNames));?>;
			var arrEUNorLastName = <?php echo (json_encode($arrayEUNorLastNames));?>;
			//Hispanic
			var arrHispMaleFirst = <?php echo (json_encode($arrayHispMaleNames));?>;
			var arrHispFemaleFirst = <?php echo (json_encode($arrayHispFemaleNames));?>;
			var arrHispLastName = <?php echo (json_encode($arrayHispLastNames));?>;
			//Germanic
			var arrGerMaleFirst = <?php echo (json_encode($arrayGerMaleNames));?>;
			var arrGerFemaleFirst = <?php echo (json_encode($arrayGerFemaleNames));?>;
			var arrGerLastName = <?php echo (json_encode($arrayGerLastNames));?>;
			//French
			var arrFreMaleFirst = <?php echo (json_encode($arrayFreMaleNames));?>;
			var arrFreFemaleFirst = <?php echo (json_encode($arrayFreFemaleNames));?>;
			var arrFreLastName = <?php echo (json_encode($arrayFreLastNames));?>;
			//Italian
			var arrItaMaleFirst = <?php echo (json_encode($arrayItaMaleNames));?>;
			var arrItaFemaleFirst = <?php echo (json_encode($arrayItaFemaleNames));?>;
			var arrItaLastName = <?php echo (json_encode($arrayItaLastNames));?>;
			//US/UK
			var arrUSUKMaleFirst = <?php echo (json_encode($arrayUSUKMaleNames));?>;
			var arrUSUKFemaleFirst = <?php echo (json_encode($arrayUSUKFemaleNames));?>;
			var arrUSUKLastName = <?php echo (json_encode($arrayUSUKLastNames));?>;
			//South America
			var arrSAMaleFirst = <?php echo (json_encode($arraySAMaleNames));?>;
			var arrSAFemaleFirst = <?php echo (json_encode($arraySAFemaleNames));?>;
			var arrSALastName = <?php echo (json_encode($arraySALastNames));?>;
			//arrays for countries
			var arrAfrican = ["Nigeria","South Sudan","Gabon","Chad","Sudan","Libya","Morocco","Liberia","Ghana","Uganda","Kenya","Ivory Coast"];
			var arrOceania = ["Fiji","Kiribati","Palau","Nauru","New Zealand","Marshall Islands","Papua New Guinea","Samoa","Vanuatu","Tonga","Solomon Islands","Tuvalu"];
			var arrOriental = ["Japan","China","Tibet","Hong Kong","North Korea","South Korea","Mongolia","Taiwan"];
			var arrMiddleEastern = ["Iran","Turkey","Iraq","Syria","Saudi Arabia","Yemen","Jordan","Kuwait","Oman","Israel","Qatar"];
			var arrSlavic = ["Russia","Belarus","Ukraine","Poland","Czech Republic","Slovakia","Croatia","Serbia","Bosnia","Bulgaria","Herzegovina","Montenegro","Macedonia"];
			var arrNordic = ["Denmark","Finland","Sweeden","Norway","Iceland"];
			var arrHispanic = ["Spain","Argentina","Bolivia","Chile","Colombia","Costa Rica","Cuba","Dominican Republic","Ecuador","El Savador","Guatemala","Honduras","Mexico","Nicaragua","Panama","Paraguay","Peru","Puerto Rico","Uruguay","Venezuela"];
			var arrGermanic = ["Germany","Belgium","Austria","Switzerland","Luxembourg","Liechtenstein"];
			var arrFrench = ["France","Belgium","Switzerland","Luxembourg"];
			var arrUSUK = ["United Kingdom","United States","United Kingdom","United States","Australia","United Kingdom","United States","Australia","New Zealand","South Africa"];
			var arrSouthAmerican = ["Venezuela","Chile","Argentina","Uruguay","Bolivia","Paraguay","Peru","Brazil","Colombia","Guyana","Suriname","French Guiana"];
			//additional email building blocks
			var arrMaleString = <?php echo (json_encode($arrayMaleExtras));?>;
			var arrFemaleString = <?php echo (json_encode($arrayFemaleExtras));?>;
			var arrBusSource = <?php echo (json_encode($arrayBusNames));?>;
			var arrEduSource = <?php echo (json_encode($arrayEduNames));?>;
			//more variables for other functions
			var finalArray = [];
			var debugLog = [];
			var searchDups;
			var limitReachedQ;
			var overLimitFails = 0;
			//gets year for display
			var htmlDate = new Date();
			var htmlYear = htmlDate.getFullYear();
			document.getElementById("getMinYear").innerHTML = ("Minimum year of birth (1900 to "+(htmlYear-1)+"):");
			document.getElementById("getMaxYear").innerHTML = ("Maximum year of birth (1901 to "+htmlYear+"):");
			//person object constructor
			function objPerson(fName, lName, gender, email, pob, dob){
				this.firstName = fName;
				this.lastName = lName;
				this.gender = gender;
				this.emailAddress = email;
				this.placeOfBirth = pob;
				this.dateOfBirth = dob;
			}
			//object constructor for date of birth
			function objDate(year, month, day){
				this.year = year;
				this.month = month;
				this.day = day;
			}
			//checks if the random year is a leap year
			function isLeapYearQ(yearToCheck){
				var retVal;
				if (yearToCheck%4==0&&yearToCheck%100!=0||yearToCheck%400==0){
					retVal = true;
				}
				else{
					retVal = false;
				}
				return retVal;
			}
			//gets a random date
			var rndYear;
			function randomDate(){
				//initialising the date object
				var myDate = new objDate();
				//gets the current year
				var currentDate = new Date();
				var currentYear = currentDate.getFullYear();
				//gets random year between current date and 1900
				do{
					rndYear = Math.floor(Math.random()*(formMaxYr()));
				}while(rndYear<(formMinYr()));
				//gets random month
				var rM = Math.floor(Math.random()*12)+1;
				if (rM < 10){
					var rndMonth = ("0"+rM);
				}
				else{
					var rndMonth = rM;
				}
				//gets random day
				switch (rM){
					case (1):
					case (3):
					case (5):
					case (7):
					case (8):
					case (10):
					case (12):
						var rD = Math.floor((Math.random()*31)+1);
						break;
					case (2):
						if (isLeapYearQ(rndYear)==true){
							var rD = Math.floor((Math.random()*29)+1);
						}
						else{
							var rD = Math.floor((Math.random()*28)+1);
						}
						break;
					case (4):
					case (6):
					case (9):
					case (11):
						var rD = Math.floor((Math.random()*30)+1);
						break;
				}
				if (rD < 10){
					var rndDay = ("0"+rD);
				}
				else{
					var rndDay = rD;
				}
				//concatenates the values				
				var retVal = (rndDay + "/" + rndMonth + "/" + rndYear);
				return retVal;
			}
			//random email building blocks
			function rndSource(){
				var retVal;
				var x = Math.floor(Math.random()*11);
				switch (x){
					case 0:
					case 1:
					case 2:
					case 3:
					case 4:
						retVal = "gmail";
						break;
					case 5:
					case 6:
					case 7:
						retVal = "outlook";
						break;
					case 8:
						retVal = "googlemail";
						break;
					case 9:
						retVal = "hotmail";
						break;
					case 10:
						retVal = "live";
						break;
					default:
						retVal = "gmail";
				}
				return retVal;
			}
			//gets business name and extension
			function rndBusSource(){
				var x = Math.floor(Math.random()*arrBusSource.length);
				var retVal = arrBusSource[x];
				return retVal;
			}
			//gets educational institution name
			function rndEduSource(){
				var x = Math.floor(Math.random()*arrEduSource.length);
				var retVal = arrEduSource[x];
				return retVal;
			}
			//gets an extension for normal emails
			function rndExtension(){
				var retVal;
				var x = Math.floor(Math.random()*5);
				switch (x){
					case 0:
					case 1:
					case 2:
					case 3:
						retVal = ".com";
						break;
					case 4:
						retVal = ".co.uk";
						break;
					default:
						retVal = ".com";
						break;
				}
				return retVal;
			}
			//male and female stereotypical additional random words and styles
			function getRandomFemaleStyle(){
				var retVal;
				var x = Math.floor(Math.random()*10);
				retVal = arrFemaleString[x];
				return retVal;
			}
			function getRandomMaleStyle(){
				var retVal;
				var x = Math.floor(Math.random()*10);
				retVal = arrFemaleString[x];
				return retVal;
			}			
			//email constructor functions
			function emailConstructorDef(fName, lName, dob){
				var retVal = (fName + lName + dob.slice(8,9) + "@" + rndSource() + rndExtension());
				return retVal.toLowerCase();
			}
			function emailConstructor1( fName, lName, dob){
				var retVal = (fName + lName + dob.slice(8,10) + "@" + rndSource() + rndExtension());
				return retVal.toLowerCase();
			}
			function emailConstructor2( fName, lName, dob){
				var retVal = (fName.slice(0,1) + lName + dob.slice(8,10) + "@" + rndSource() + rndExtension());
				return retVal.toLowerCase();
			}
			function emailConstructor3(fName, lName, dob){
				var retVal = (lName + fName + dob.slice(8,10) + "@" + rndSource() + rndExtension());
				return retVal.toLowerCase();
			}
			function emailConstructor4(fName, lName, dob){
				var retVal = (fName.slice(0,1) + lName + dob.slice(6,10) + "@" + rndSource() + rndExtension());
				return retVal.toLowerCase();
			}
			function emailConstructorBus1(fName, lName){
				var retVal = (fName.slice(0,1) + lName + "@" + rndBusSource());
				return retVal.toLowerCase();				
			}
			function emailConstructorBus2(fName, lName){
				var retVal = (lName + fName + "@" + rndBusSource());
				return retVal.toLowerCase();	
			}
			function emailConstructorEdu1(fName, lName){
				var retVal = (fName.slice(0,1) + lName + "@" + rndEduSource() + ".ac.uk");
				return retVal.toLowerCase();	
			}
			function emailConstructorEdu2(fName, lName){
				var retVal = (lName + fName + "@" + rndEduSource() + ".ac.uk");
				return retVal.toLowerCase();	
			}
			function emailConstructorUnprof1(fName, lName, gender){
				var retVal;
				if (gender == "Female"){
					var rndNumFS = Math.floor(Math.random()* arrFemaleString.length);
					retVal = (fName + arrFemaleString[rndNumFS] + "@" + rndSource() + rndExtension());
				}
				else{
					var rndNumMS = Math.floor(Math.random()* arrMaleString.length);
					retVal = (fName + arrMaleString[rndNumMS] + "@" + rndSource() + rndExtension());
				}
				return retVal.toLowerCase();
			}
			function emailConstructorUnprof2(fName, lName, gender){
				var retVal;
				if (gender == "Female"){
					var rndNumFS1 = Math.floor(Math.random()* arrFemaleString.length);
					var rndNumFS2 = Math.floor(Math.random()* arrFemaleString.length);
					retVal = (arrFemaleString[rndNumFS1] + fName.slice(0,1) + lName + arrFemaleString[rndNumFS2] + "@" + rndSource() + rndExtension());
				}
				else{
					var rndNumMS1 = Math.floor(Math.random()* arrMaleString.length);
					var rndNumMS2 = Math.floor(Math.random()* arrMaleString.length);
					retVal = (arrMaleString[rndNumMS1] + fName.slice(0,1) + lName + arrMaleString[rndNumMS2] + "@" + rndSource() + rndExtension());
				}
				return retVal.toLowerCase();				
			}
			//return values from the HTML form
			function formAmount(){
				var retVal = document.forms["userInput"]["amount"].value;
				return retVal;
			}
			function formMinYr(){
				var retVal = document.forms["userInput"]["minYear"].value;
				return retVal;
			}
			function formMaxYr(){
				var retVal = document.forms["userInput"]["maxYear"].value;
				return retVal;
			}
			function formUnprofEmail(){
				var retVal;
				var checkedQ = document.forms["userInput"]["unprofEmailQ"].value;
				if (checkedQ=="on"){
					retVal = 6;
				}
				else{
					retVal = 4;
				}
				return retVal;
			}
			function fieldCheck(){
				if (isNaN(document.forms["userInput"]["amount"].value)||isNaN(document.forms["userInput"]["minYear"].value)||isNaN(document.forms["userInput"]["maxYear"].value)){
					alert ("Error: Only whole numbers are allowed");
				}
				else if (document.forms["userInput"]["minYear"].value<1900||document.forms["userInput"]["minYear"].value>=htmlYear||document.forms["userInput"]["maxYear"].value<=1900||document.forms["userInput"]["maxYear"].value>htmlYear||document.forms["userInput"]["amount"].value>1000000){
					alert ("Error: Please stay within the provided limitations and keep amounts below 1 million");
				}
				else{
					generatePeople();
					getResultAsTable(finalArray, debugLog);
					clearForm();
				}
			}
			function clearForm(){
				document.getElementById("userInput").reset(); 
			}
			//the primary function activated by the 'generate' button
			function generatePeople(){
				//calling the above functions
				var origAmount = formAmount();
				var fA = formAmount();
				var arrArea = ["African","Egyptian","SouthAfrican","Oceania","Oriental","MiddleEastern","Indian","Slavic","Nordic","Hispanic","Germanic","French","Italian","USUK","USUK","USUK","USUK","SouthAmerican"];
				for (var i=0;i<fA;i++){
					var x = ("person" + i);
					x = new objPerson();
					//full name, gender and place of birth
					var rndNum = Math.floor(Math.random()* arrArea.length);
					var birthLocation = arrArea[rndNum];
					switch (birthLocation){
						case ("African"):
							var rndNumLN = Math.floor(Math.random()* arrAfrLastName.length);
							x.lastName = arrAfrLastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrAfrican.length);
							x.placeOfBirth = arrAfrican[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrAfrFemaleFirst.length);
								x.firstName = arrAfrFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrAfrMaleFirst.length);
								x.firstName = arrAfrMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("Egyptian"):
							var rndNumLN = Math.floor(Math.random()* arrEGAfrLastName.length);
							x.lastName = arrEGAfrLastName[rndNumLN];
							x.placeOfBirth = "Egypt";
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrEGAfrFemaleFirst.length);
								x.firstName = arrEGAfrFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrEGAfrMaleFirst.length);
								x.firstName = arrEGAfrMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("SouthAfrican"):
							var rndNumLN = Math.floor(Math.random()* arrSAfrLastName.length);
							x.lastName = arrSAfrLastName[rndNumLN];
							x.placeOfBirth = "South Africa";
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrSAfrFemaleFirst.length);
								x.firstName = arrSAfrFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrSAfrMaleFirst.length);
								x.firstName = arrSAfrMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("Oceania"):
							var rndNumLN = Math.floor(Math.random()* arrOceLastName.length);
							x.lastName = arrOceLastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrOceania.length);
							x.placeOfBirth = arrOceania[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrOceFemaleFirst.length);
								x.firstName = arrOceFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrOceMaleFirst.length);
								x.firstName = arrOceMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("Oriental"):
							var rndNumLN = Math.floor(Math.random()* arrAsOrLastName.length);
							x.lastName = arrAsOrLastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrOriental.length);
							x.placeOfBirth = arrOriental[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrAsOrFemaleFirst.length);
								x.firstName = arrAsOrFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrAsOrMaleFirst.length);
								x.firstName = arrAsOrMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("MiddleEastern"):
							var rndNumLN = Math.floor(Math.random()* arrAsMELastName.length);
							x.lastName = arrAsMELastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrMiddleEastern.length);
							x.placeOfBirth = arrMiddleEastern[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrAsMEFemaleFirst.length);
								x.firstName = arrAsMEFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrAsMEMaleFirst.length);
								x.firstName = arrAsMEMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("Indian"):
							var rndNumLN = Math.floor(Math.random()* arrAsInLastName.length);
							x.lastName = arrAsInLastName[rndNumLN];
							x.placeOfBirth = "India";
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrAsInFemaleFirst.length);
								x.firstName = arrAsInFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrAsInMaleFirst.length);
								x.firstName = arrAsInMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("Slavic"):
							var rndNumLN = Math.floor(Math.random()* arrEUSlaLastName.length);
							x.lastName = arrEUSlaLastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrSlavic.length);
							x.placeOfBirth = arrSlavic[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrEUSlaFemaleFirst.length);
								x.firstName = arrEUSlaFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrEUSlaMaleFirst.length);
								x.firstName = arrEUSlaMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("Nordic"):
							var rndNumLN = Math.floor(Math.random()* arrEUNorLastName.length);
							x.lastName = arrEUNorLastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrNordic.length);
							x.placeOfBirth = arrNordic[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrEUNorFemaleFirst.length);
								x.firstName = arrEUNorFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrEUNorMaleFirst.length);
								x.firstName = arrEUNorMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("Hispanic"):
							var rndNumLN = Math.floor(Math.random()* arrHispLastName.length);
							x.lastName = arrHispLastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrHispanic.length);
							x.placeOfBirth = arrHispanic[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrHispFemaleFirst.length);
								x.firstName = arrHispFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrHispMaleFirst.length);
								x.firstName = arrHispMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("Germanic"):
							var rndNumLN = Math.floor(Math.random()* arrGerLastName.length);
							x.lastName = arrGerLastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrGermanic.length);
							x.placeOfBirth = arrGermanic[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrGerFemaleFirst.length);
								x.firstName = arrGerFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrGerMaleFirst.length);
								x.firstName = arrGerMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("French"):
							var rndNumLN = Math.floor(Math.random()* arrFreLastName.length);
							x.lastName = arrFreLastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrFrench.length);
							x.placeOfBirth = arrFrench[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrFreFemaleFirst.length);
								x.firstName = arrFreFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrFreMaleFirst.length);
								x.firstName = arrFreMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("Italian"):
							var rndNumLN = Math.floor(Math.random()* arrItaLastName.length);
							x.lastName = arrItaLastName[rndNumLN];
							x.placeOfBirth = "Italy";
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrItaFemaleFirst.length);
								x.firstName = arrItaFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrItaMaleFirst.length);
								x.firstName = arrItaMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("USUK"):
							var rndNumLN = Math.floor(Math.random()* arrUSUKLastName.length);
							x.lastName = arrUSUKLastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrUSUK.length);
							x.placeOfBirth = arrUSUK[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrUSUKFemaleFirst.length);
								x.firstName = arrUSUKFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrUSUKMaleFirst.length);
								x.firstName = arrUSUKMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
						case ("SouthAmerican"):
							var rndNumLN = Math.floor(Math.random()* arrSALastName.length);
							x.lastName = arrSALastName[rndNumLN];
							var rndCountry = Math.floor(Math.random()* arrSouthAmerican.length);
							x.placeOfBirth = arrSouthAmerican[rndCountry];
							var rndGender = Math.round(Math.random());
							if (rndGender==0){
								var rndNumFN = Math.floor(Math.random()* arrSAFemaleFirst.length);
								x.firstName = arrSAFemaleFirst[rndNumFN];
								x.gender = "Female";
							}
							else{
								var rndNumFN = Math.floor(Math.random()* arrSAMaleFirst.length);
								x.firstName = arrSAMaleFirst[rndNumFN];
								x.gender = "Male";
							}
							break;
					}
					//date of birth
					x.dateOfBirth = randomDate();
					//email address
					var email;
					//get random email constructor switch
					var emailBool = Math.floor(Math.random()*8);
					var currentDate = new Date();
					var currentYear = currentDate.getFullYear();
					if (rndYear>=(currentYear-17)){
						var functionRetVal = formUnprofEmail()
						var minorEmailBool = Math.floor(Math.random()*functionRetVal);
						switch(minorEmailBool){
							case 0:
								email = emailConstructor1(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 1:
								email = emailConstructor2(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 2:
								email = emailConstructor3(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 3:
								email = emailConstructor4(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 4:
								email = emailConstructorUnprof1(x.firstName,x.lastName,x.gender);
								break;
							case 5:
								email = emailConstructorUnprof2(x.firstName,x.lastName,x.gender );
								break;
							default:
								email = emailConstructorDef(x.firstName,x.lastName,x.dateOfBirth);
						}
					}
					else if (rndYear>=(currentYear-19)&&rndYear<(currentYear-17)){
						var studentEmailBool = Math.floor(Math.random()*8);
						switch(studentEmailBool){
							case 0:
								email = emailConstructor1(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 1:
								email = emailConstructor2(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 2:
								email = emailConstructor3(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 3:
								email = emailConstructor4(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 4:
								email = emailConstructorUnprof1(x.firstName,x.lastName,x.gender);
								break;
							case 5:
								email = emailConstructorUnprof2(x.firstName,x.lastName,x.gender );
								break;
							case 6:
								email = emailConstructorEdu1(x.firstName,x.lastName);
								break;
							case 7:
								email = emailConstructorEdu2(x.firstName,x.lastName);
								break;
							default:
								email = emailConstructorDef(x.firstName,x.lastName,x.dateOfBirth);
						}
					}
					else{
						switch(emailBool){
							case 0:
								email = emailConstructor1(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 1:
								email = emailConstructor2(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 2:
								email = emailConstructor3(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 3:
								email = emailConstructor4(x.firstName,x.lastName,x.dateOfBirth);
								break;
							case 4:
								email = emailConstructorBus1(x.firstName,x.lastName);
								break;
							case 5:
								email = emailConstructorBus2(x.firstName,x.lastName);
								break;
							case 6:
								email = emailConstructorEdu1(x.firstName,x.lastName);
								break;
							case 7:
								email = emailConstructorEdu2(x.firstName,x.lastName);
								break;
							default:
								email = emailConstructorDef(x.firstName,x.lastName,x.dateOfBirth);
						}
					}
					//duplicate checker
					//checks for duplicates of the 'email' variable
					for (var i2=0;i2<finalArray.length;i2++){
						if (finalArray[i2].emailAddress===email){
							searchDups = true;
							debugLog.push ("duplicate found");
						}
						else{
							searchDups = false;
							debugLog.push ("no duplicates");
						}
					}
					//removes duplicates and tries to get an alternative
					//this also prevents potential infinite loops caused by lack of combinations
					var loopCount = 0;
					if (searchDups==true&&loopCount<=10){
						debugLog.push (email+" is a duplicate");
						delete x;
						fA++;
						loopCount++;
						debugLog.push ("if");
					}
					else if (searchDups==true&&loopCount>10){
						debugLog.push (email+" is a duplicate");
						debugLog.push ("attempt limit reached");
						delete x;
						limitReachedQ = true;
						overLimitFails++;
						debugLog.push ("else if");
					}
					else{
						x.emailAddress = email;	
						finalArray.push (x);
						debugLog.push ("else");
					}
				}
				if (limitReachedQ==true){
					debugLog.push ("Due to limited combinations, duplicates are deleted and an attempt to replace them occurs. Too many attempts had occured which would have resulted in a crash. This means that there are "+overLimitFails+" results less than the amount you wished to generate.");
					alert ("Due to limited combinations, duplicates are deleted and an attempt to replace them occurs. Too many attempts had occured which would have resulted in a crash. This means that there are "+overLimitFails+" results less than the amount you wished to generate.");
				}
				else{
					debugLog.push ("No duplicates were found. All "+origAmount+" results were generated.");
					alert ("No duplicates were found. All "+origAmount+" results were generated.");
				}
			}
			//create a HTML table for the data
			function getResultAsTable(finalArray,debugLog){
				console.log (finalArray,debugLog);
				var tableHTML = ("<table id='tblData'>"+"<th>ID</th>"+"<th>First Name</th>"+"<th>Last name</th>"+"<th>Gender</th>"+"<th>Email Address</th>"+"<th>Place of Origin</th>"+"<th>Date of Birth</th>");
				for (var j=0;j<finalArray.length;j++){
					if (j===0){
						tableHTML+=("<tr>"+"<td>"+j+"</td>"+"<td>"+finalArray[j].firstName+"</td>"+"<td>"+finalArray[j].lastName+"</td>"+"<td>"+finalArray[j].gender+"</td>"+"<td>"+finalArray[j].emailAddress+"</td>"+"<td>"+finalArray[j].placeOfBirth+"</td>"+"<td>"+finalArray[j].dateOfBirth+"</td>"+"</tr>");
					}
					else{
						tableHTML+=("<tr>"+"<td>"+j+"</td>"+"<td>"+finalArray[j].firstName+"</td>"+"<td>"+finalArray[j].lastName+"</td>"+"<td>"+finalArray[j].gender+"</td>"+"<td>"+finalArray[j].emailAddress+"</td>"+"<td>"+finalArray[j].placeOfBirth+"</td>"+"<td>"+finalArray[j].dateOfBirth+"</td>"+"</tr>");
					}
				}
				tableHTML+=("</table>");
				document.getElementById("result").innerHTML=(tableHTML);
			}
		</script>
	</body>
</html>