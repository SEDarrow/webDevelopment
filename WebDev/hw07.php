<html lang = 'en'>
	<head>
		<link href="hw07.css" rel="stylesheet">
		<title>HW07</title>
	</head>
</html>

<?
	if($_POST["submit"] == "Sort!") {
		print "
			<table>
					<tr>
						<th>Item Number</th>
						<th>Item</th>
					</tr>";
		$input = $_POST["items"];
		
		if($_POST["how"] == "value") {
			$list = explode(PHP_EOL, $input);
		} else {
			$list = str_replace(PHP_EOL, " ", $input);
			$list = explode(" ", $list);
		}
		
		asort($list);
		$number = 1;
		
		foreach ($list as $word) {
			if($word != "" && $word != " ") {
				print" <tr>
							<td>$number</td>
							<td>$word</td>
						</tr>";
				$number++;
			}
		}
		print '</table>';

		
	} else {
		print '
		<header>
			<h1>hw07 - Sorter</h1>
		</header>
		
		<div id = "instructions">
			<p>Enter a list of values or text to sort in the textbox to the right</p>
			<ul>
				<li>Value sort will sort each individual line</li>
				<li>Text sort will sort each individual word</li>
			</ul>
		</div>
		
		<div id = "input">
			<form method="post" action="hw07.php">
				<textarea rows="20" cols="70" name="items"></textarea> <br/>
				<input type="radio" name="how" value="value"> Value Sort
				<input type="radio" name="how" value="text"> Text Sort
				</br>
				<input type="submit" name="submit" value="Sort!">
			</form>
		</div>';
	}
?>