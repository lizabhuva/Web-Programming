<html>
<form action="" method="get">
<label>Enter a Year:</label>
<input type="text" name="year" id="year"/><br>
<input type="submit" name="submit"/>
</form>
</html>

<?php
$y=$_REQUEST['year'];
//echo $y;

if($y%4==0)
{
	echo "$y is a Leap Year";
}
else
{
	echo "$y isn't a Leap Year";
}
?>