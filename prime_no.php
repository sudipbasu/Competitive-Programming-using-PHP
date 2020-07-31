<!DOCTYPE html>
<html>
<head>
	<title>Prime Number Computation</title>
	<script>
		
		function validate()
		{
			if(document.f1.number.value==0){
				alert("Plz fill out the number");
				document.f1.number.focus();
				return false;

			}
			return true;
		}
	</script>
	<style type="text/css">
		input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
}
	</style>
</head>
<body>
	<center><h1 style="color: red;">Check wheather a Number is Prime or not</h1></center>
	<form name="f1" method="POST" action="prime_no_action.php" onsubmit="return(validate())"> 
		<table>
			<tr>
				<td><strong>Enter the Number</strong></td>
				<td>:</td>
				<td><input type="Number" name="number" placeholder="Number"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Submit"></td>
</tr>
		</table>
		
	</form>
</body>
</html>