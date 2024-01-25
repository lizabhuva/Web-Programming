<html>
<form action="" method="get">
<label>Enter 1st Number:</label>
<input type="text" name="num1" id="num1"/><br>
<label>Enter 2nd Number:</label>
<input type="text" name="num2" id="num2"/><br>
<input type="submit" name="submit"/>
</form>
</html>

<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];

echo "1st No : ".$num1."<br>";
echo "2nd No. : ".$num2."<br>";
$num1=$num1+$num2;
$num2=$num1-$num2;
$num1=$num1-$num2;
echo "After Swapping:"."<br>";
echo "1st No : ".$num1."<br>";
echo "2nd No. : ".$num2;
?>