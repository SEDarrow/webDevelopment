<!doctype html>
<html lang="en">
	<head>
		<title>Population Growth</title>
		<link href="hw06.css" rel="stylesheet">
	</head>
	
	<body>
		<header>
			<h1>hw06 - Population Growth</h1>
		</header>
	</body>
</html>

<?

if($_POST["submit"] == "Calculate!") {
	$years = $_POST["years"];
	$population = $_POST["population"];
	$rate = $_POST["rate"];
	
	print "
		<div id='input'>
			<p>Starting population : $population</p>
			<p>Growth rate : " . number_format($rate,1) . "%</p>
			<p>To perform another calculation <a href='hw06.php'>click here.</a></p>
		</div>
		
		<table> 
			<tr>
				<th>Year</th>
				<th>Population</th>
				<th>Change</th>
			<tr>
	";
	
	$rate /= 100;
	
	for($year = 2017; $year < 2017+$years; $year++) {
		$change = $population*$rate;
		$population += $change;
		print "
		<tr>
			<td>$year</td>
			<td>" . number_format($population, 0) . "</td>
			<td>" . number_format($change, 0) . "</td>
		</tr>
		";
	}
	print "</table>";
	
	
	
} else {
	print ' 	
		<form method="post" action="hw06.php">
			<p>Years to forcast: <input type="text" name="years" size="20"></p>
			<p>Current Population: <input type="text" name="population" size="20"></p>
			<p>Growth Rate: <input type="text" name="rate" size="20"></p>
			<p><input type="submit" name="submit" value="Calculate!"></p>
			</div>
		</form>';
}
?>