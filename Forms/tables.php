<!DOCTYPE html>
<body>
<form action="" method="post">
<label>Start Value:</label>
<input type="text" name="n1">
<label>End Value:</label>
<input type="text" name="n2">
<input type="submit" value="Calculate">
</form>
</body>
<?php
$a=$_REQUEST['n1'];
$b=$_REQUEST['n2'];
echo "<br><br>";
for($i=$a;$i<=$b;$i++)
{
	echo "<table border=2>";
	 for($j=1;$j<=10;$j++)
	 {
		$mul=$i*$j;
		echo "<tr>
		      <td>$i</td>
			  <td>*</td>
			  <td>$j</td>
			  <td>=</td>
			  <td>$mul</td></tr>";
	 }
	 echo "</table><style>table{float:left;}</style>";
}

?>