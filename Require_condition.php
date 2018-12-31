<?php
extract($_REQUEST);
if(isset($save))
{
	if($n=="")
	{
		echo "<p style='color:red'>Fill the details</p>";
	}
	elseif(is_numeric($n))
	{
		echo "Error";
	}
	else
	{
		echo "Thanks";
	}
}


?>



<html>
	<head>
	</head>
	<body>
		<form method="POST">
			<table>
				<tr>
					<td>Enter your name:</td>
					<td><input type="text" name="n"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="save"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>