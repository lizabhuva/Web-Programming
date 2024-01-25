<html>
<form action="" method="get">
<label>Enter a Number:</label>
<input type="text" name="num" id="num"><br>
<input type="submit" name="submit">
</form>
</html>

<?php
$no=$_REQUEST['num'];
echo "Original no. : ",$no;
echo "<br>";
$no2=strrev($no);
echo "Reversed no.: ",$no2."<br>";
if($no2==$no)
{
	echo "Given no is palindrome.";
}
else
{
	echo "Given no. is not palindrome.";
}
?>