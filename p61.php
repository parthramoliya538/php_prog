<?php 

if(isset($_GET['val1']))
{
	$v1=$_GET['val1'];
	$v2=$_GET['val2'];
	echo $sum=$v1+$v2;;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORM</title>
</head>
<body>
	<form>
		<table border="2">
			<tr>
				<td>
					<input type="Number" name="val1" placeholder=" Enter value 1">
				</td>
			</tr>

			<tr>
				<td>
					<input type="number" name="val2" placeholder="Enter value 2">
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="" value="+">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>

