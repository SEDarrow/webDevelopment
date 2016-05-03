











<!doctype html>
<html lang="en">
	<head>
		<title>Weighted Avg- Grade Report</title>
		<link href="hw04.css" rel="stylesheet">
	</head>
</html>

<?
	$name = $_POST["name"];
	$participation = $_POST["mod"];
	
	if($participation > 5) $participation=5;
	
	$exam = ($_POST["E1"]+$_POST["E2"]+$_POST["E3"])/3;
	$hw = ($_POST["HW1"]+$_POST["HW2"]+$_POST["HW3"]+$_POST["HW4"]+$_POST["HW5"])/5;
	
	$final = $exam*.8+$hw*.15+$participation;
	
	print "
	<header>
		<h1>Grade Report for $name </h1>
	</header>
	<h3>Your final average is: " . number_format($final,2) . "</h3>
	<p>Exam Average: " . number_format($exam, 2) . "</p>
	<p>Homework Average: " . number_format($hw, 2) . "</p>
	";

?>