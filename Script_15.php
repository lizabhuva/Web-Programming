<html>
<form action="" method="post">
<td><label>Enter 1st Number:</label></td>
<input type="text" name="num1" id="num1">
<td><label>Enter 2nd Number:</label></td>
<input type="text" name="num2" id="num2">
<td><label>Enter 3rd Number:</label></td>
<input type="text" name="num3" id="num3">
<input type="submit" name="submit">
</form>
</html>

<?php
$n1=$_REQUEST['num1'];
$n2=$_REQUEST['num2'];
$n3=$_REQUEST['num3'];

if ($n1>$n2)
	if($n1>$n3)
		echo "$n1 is Largest";
	else
		echo "$n3 is Largest";
else
	if($n2>$n3)
		echo "$n2 is Largest";
	else
		echo "$n3 is Largest";
?>