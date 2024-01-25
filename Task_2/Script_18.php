<html>
<form action="" method="get">
<label>Enter a Random No.Between 1 And 10:</label>
<input type="text" name="num" id="num"/><br>
<input type="submit" name="submit"/>
</form>
</html>
<?php
$num=$_REQUEST['num'];

$n=rand(1,10);
echo "Random Number is:".$n."<br>";
if($num==$n)
{
	echo "Both Number are Same";
}
else
{
	echo "Both Numbers are Different";
}
?>