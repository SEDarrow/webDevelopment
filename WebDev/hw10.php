<html lang="en">
	<head>
		<title>HW 10</title>
		<link href="hw10.css" rel="stylesheet" >
	</head>
	
</html>

<?
	print' <div id="selection">
				<h1>Site Selection</h1>
				<form method="post" action="hw10.php">
					<input type="radio" name="sites" value="Roatan"> Roatan</br>
					<input type="radio" name="sites" value="Bonaire"> Bonaire</br>
					<input type="radio" name="sites" value="Grand Canyon"> Grand Canyon</br>
					<input type="radio" name="sites" value="Key Largo"> Key Largo</br>
					<input type="radio" name="sites" value="Key West"> Key West</br>
					<input type="radio" name="sites" value="Aruba"> Aruba</br>
					<input type="radio" name="sites" value="Queensland"> Queensland</br>
					<input type="radio" name="sites" value="Kailua Kona"> Kailua Kona</br>
					<input type="radio" name="sites" value="Belize"> Belize</br>
					<input type="radio" name="sites" value="Bali"> Bali</br>
					<input type="radio" name="sites" value="Cozumel"> Cozumel</br>
					<input type="submit" name="Submit" value="Submit">
				</form>
			</div>';
	if($_POST["Submit"] == "Submit") {
		print' <div id="output">
					<h1>Summary for ' . $_POST["sites"] . '</h1>
					<table>
						<tr>
							<th>Dive Type</th>
							<th>Duration</th>
							<th>Depth</th>
						</tr>
			';
		$dives = file("dives.txt");
		$diveNum = 0;
		$time = 0;
		foreach($dives as $dive) {
			$diveArr = explode(",",$dive);
			if($diveArr[0] == $_POST["sites"]) {
				print'<tr>
						<td>' . $diveArr[1] . '</td>
						<td>' . $diveArr[2] . '</td>
						<td>' . $diveArr[3] . '</td>
					  </tr>
				';
				$diveNum++;
				$time += $diveArr[2];
			}
		}
		print'</table>
			<p>Total Dives: ' . $diveNum . '</br>
			   Total time underwater in ' . $_POST["sites"] . ': ' . $time . '</p>
		';
	}
				
				
	
	
?>