<html>
<form action="" method="get">
<label>Enter a Number:</label>
<input type="text" name="num" id="num"/><br>
<input type="submit" name="submit"/>
</form>
</html>

<?php
$num=$_REQUEST['num'];
$fact=1;
for($i=$num;$i>0;$i--)
{
	$fact=$fact*$i;
}
echo "Factorial of $num is:".$fact;
?>