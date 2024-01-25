<html>
<form action="" method="get">
<label>Enter a Number:</label>
<input type="text" name="num" id="num"/><br>
<input type="submit" name="submit"/>
</form>
</html>

<?php
$num=$_REQUEST['num'];

$n=sqrt($num);
echo "Square Root of $num is : ".$n;
?>