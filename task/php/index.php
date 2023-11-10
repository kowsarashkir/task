<?php 

include 'getCountryInfo.php';
include 'latitudelongitude.php';
include 'Timezones.php';
include 'weather.php';

?>
<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<title>AJAX/PHP/CURL/JSON example</title>
	<meta name="description" content="AJAX/PHP/CURL/JSON example">
	<meta name="author" content="Paddy Evans">

</head>

<body>

	<h1> Country</h1>
	</div>
	<div id="Option1">
		<form action="getCountryInfo.php" method="POST">
			<select id="country" name="country">
				<option value="GB">Great Britain</option>
				<option value="FR">France</option>
				<option value="DE">Germany</option>
				<option value="US">USA</option>
			</select>

			<select id="lang" name="lang">
				<option value="en">English</option>
				<option value="fr">Francais</option>
				<option value="de">Deutsche</option>
			</select>

			<button id="btnRun1" type="submit">Run</button>
		</form>
		<br><br>

		<div id="divResult1">

			<table>

				<tr>
					<td align="right">
						Longitude:
					</td>
					<td id="txtLong">

					</td>

				</tr>

				<tr>
					<td align="right">
						Latitude:
					</td>
					<td id="txtLat">

					</td>

				</tr>

			</table>

		</div>


	</div>


	<h2> Timezone</h2>

	</div>
	<div id="Option2">

		<input type="text" id="lati2" placeholder="Enter longitude">

		<input type="text" id="longi2" placeholder="Enter Latitude">

		<button id="btnRun2">Run</button>

		<br><br>

		<div id="divResult2">

		</div>
		
	<h3> weather</h3>

</div>
<div id="Option3">

	<input type="text" id="date" placeholder="Enter date">

	<input type="text" id="weather" placeholder="Enter weather">

	<button id="btnRun3">Run</button>

	<br><br>

	<div id="divResult3">

	</div>

	</div>
	<script type="application/javascript" src="libs/js/jquery-2.2.3.min.js"></script>
	<script type="application/javascript" src="libs/script.js"></script>
	<script type="application/javascript" src="libs/script1.js"></script>
	<script type="application/javascript" src="libs/script2.js"></script>
	<script type="application/javascript" src="libs/script3.js"></script>

</body>

</html>