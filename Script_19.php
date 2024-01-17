<html>
<form action="" method="get">
<label>Enter number</label>
<input type="text" name="num" id="num"><br>
<input type="submit" name="submit">
</form>
</html>

<?php
$no=$_REQUEST['num'];
$flag=0;
for($i=2;$i<$no;$i++)
{
	if($no% $i== 0)
	{
		$flag=1;
	}
}
if($flag==1)
{
	echo "$no is not prime";
}
else
{
	echo "$no is prime";
}
?>