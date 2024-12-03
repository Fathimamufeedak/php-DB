<html>
<head>
<title>number checker</title>
<body>
<form method="get"action="">
<label for="number">enter a number:</label>
<input type="text" name="number" required>
<input type="submit" value="ckeck">
</form>
<?php
if(isset($_GET["number"])){
	$number=intval($_GET["number"]);
	if($number==0){
		echo"<p>$number is zero</p>";
	}elseif($number%2==0){
		echo"<p>$number is an even number.</p>";
	}else{
		echo"<p>$number is an odd number.</P>";
	}
}?>
</body>
</html>
