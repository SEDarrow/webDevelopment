<!doctype html>   
<meta http-equiv="cache-control" content="no-cache">   
<meta http-equiv="expires" content="0">   
<html lang="en">   
    <head>  
        <title></title>  
        <link rel="stylesheet" href="hw03.css">  
    </head>  
      
    <body>  
        <h1>Homework 3 - Product Feedback</h1>  
    </body>  
</html>  

<?  
    $item = $_POST['item'];      
    $location = $_POST['location'];  
    $satisfaction = $_POST['satisfaction'];  
    $comment = $_POST['comment']; 
	
	$visit = strtolower($location);
	
	if($satisfaction==="Happy") {
		$statement="We're glad you enjoyed the $item!";
	}
	else {
		$statement="We're sorry the $item wasn't exactly what you were expecting.";
	}
      
    if($comment === "") {  
        $comment = "No comments";  
    } 

	if($visit==="online") {
		$visit="website";
		$others= "catalog or find a store near you";
	}
	else if($visit=="store") {
		$others="catalog or website";
	}
	else {
		$others="website or find a store near you";
	}
      
    print "<div class='thanks'>
				<div class='item' id='words'>
					<p>Thanks for your feedback!  $statement  We hope you visit our $visit again, and feel free to check out our $others.</p>
				</div>
				<img src='pic.jpg' height='121' width='150' alt='picture'>
		   </div>
		<div class='item' id='info'>
		<h2>Product Information:</h2>
		<p><strong>Product:</strong> $item </p> 
		<p><strong>Purchased At:</strong> $location</p> 
		<p><strong>Satisfaction:</strong> $satisfaction</p>  
		<p><strong>Your comments</strong></p>
		<div class='comments'> <p>$comment</p></div>
		</div>";
?>  