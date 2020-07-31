<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<style type="text/css">
		
		button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
	</style>
</head>
<body>
	<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

	$number=$_POST['number'];
	for($i=2;$i<$number;$i++)
	{
		if($number % $i ==0)
		{
			$flag = 1;
			break;
		}
	}
	if ($flag == 1)
	{
		?>
		<h1 style="color: blue;"><?php echo $number." is not a Prime Number";?></h1>
		<?php
	}else{
		?>
		<h1 style="color: blue;"><?php echo $number." is a Prime Number";?></h1>
		<?php
}
}
?>
<a href="prime_no.php"><button>Check Another</button></a>
</body>
</html>