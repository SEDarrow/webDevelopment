<html lang="en">
	<head>
	    <title>hw08</title>
		<link href="hw08.css" rel="stylesheet">
	</head>
</html>

<?
	print' <table>
				<tr>
				    <th>Numbe</th>
					<th>Name</th>
					<th>Age<th>
				</tr>';
	$names = file("uspres.txt");
	$ages = file("agesatinaugural.txt");
	$num = 0;
	
	foreach(array_combine($names, $ages) as $name => $age) {
		print' <tr>
					<td>$num</td>
					<td>$name</td>
					<td>$age</td>
				</tr>'
	    $num++;
	}
	
	
			
?>