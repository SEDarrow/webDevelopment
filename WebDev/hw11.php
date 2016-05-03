<html lang="en">
	<head>
		<title>HW 11</title>
		<link href="hw11.css" rel="stylesheet" >
	</head>
	
</html>

<?
	print' <div id="input">
				<form method="post" action="hw11.php">
					Name: <input type="text" name="name" size="25"> 
					<input type="submit" name="submit" value="Add to List"> </br>
					</br> Enter Comment: </br>
					<textarea cols="50" rows="15" name="comment"></textarea>
				</form>
			</div>';
	print' <div id="output">';
	if($_POST["submit"] == "Add to List") {
		print("<ol>");
		$i = 1;
		
		foreach(file("names.txt") as $name) {
			print" <li>$name </li>
						<p> " . file_get_contents("$i.txt") . "</p>
					";
			$i++;
		}
		
	    print" <li>". $_POST['name'] . "</li>
					<p> " . $_POST["comment"] . "</p>
				";
		

		file_put_contents("names.txt", $_POST["name"] . PHP_EOL, FILE_APPEND);
		file_put_contents("$i.txt", $_POST["comment"]);
	}
	else {
		file_put_contents("names.txt", "");
	}
	print' </div>';
				
				
	
	
?>