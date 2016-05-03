<!doctype html>
<html lang="en">
	<head>
		<title>Pizza Order</title>
		<link href="hw05.css" rel="stylesheet">
	</head>
</html>

<?

if($_POST["submit"] == "Order") {
	$name = $_POST["name"];
	$topping_num = 0;
	$cost = $_POST["size"];
	
	if(isset($_POST["pepperoni"])) {
		$topping_num+=1;
		$cost+=$_POST["pepperoni"];
	}
	if(isset($_POST["sausage"])) {
		$topping_num+=1;
		$cost+=$_POST["sausage"];
	}
	if(isset($_POST["mushrooms"])) {
		$topping_num+=1;
		$cost+=$_POST["mushrooms"];
	}
	if(isset($_POST["ham"])) {
		$topping_num+=1;
		$cost+=$_POST["ham"];
	}
	if(isset($_POST["olives"])) {
		$topping_num+=1;
		$cost+=$_POST["olives"];
	}
	
	if(isset($_POST["onions"])) {
		$topping_num+=1;
		$cost+=$_POST["onions"];
	}
	
	
	print "
	<h2>Thank you for your order $name.</h2>
	<p>The cost for your $topping_num topping pizza is: $" . number_format($cost,2) . "</p>
	<p><a href='hw05.php'>Back To Order Form</a></p>
	";
} else {
	print ' 	
	<body>
		<header>
			<h1>Homework - Pizza Order</h1>
		</header>
		
		<form method="post" action="hw05.php">
			<div id="first">
				<h3>Customer Information</h3>
				<p>Name: <input type="text" name="name" size="20"></p>
				<p>Phone: <input type="text" name="mod" size="10"></p>
				<p><input type="submit" name="submit" value="Order"></p>
			</div>
			
			<div id="second">
				<h3>Pizza Size</h3>
				<p>
					<input type="radio" name="size" value=5> Small 
					<input type="radio" name="size" value=8> Medium
					<input type="radio" name="size" value=10> Large 
				</p>
			</div>
			
			<div id="third">
				<div id="topping">
				<h3>Toppings</h3>
				<p><input type="checkbox" name="pepperoni" value=1> Pepperoni</br>
				<input type="checkbox" name="sausage" value=1.5> Sausage</br>
				<input type="checkbox" name="mushrooms" value=.8> Mushrooms</br>
				<input type="checkbox" name="ham" value=1.25> Ham</br>
				<input type="checkbox" name="olives" value=.75> Olives</br>
				<input type="checkbox" name="onions" value=.5> Onions</p>
				</div>
			
				<div id="cost">
				<h3>...</h3>
				<p>$1.00</br>
				$1.50</br>
				$0.80</br>
				$1.25</br>
				$0.75</br>
				$0.50</p>
				</div>
			</div>
		</form>
	</body> ';
}
?>