<html>
<form action="" method="get">
<label>Enter a Stirng:</label>
<input type="text" name="str" id="str"/><br>
<input type="submit" name="submit"/>
</form>
</html>
<?php
$str=$_REQUEST['str'];
echo "$str"."<br>";
$n=strlen($str);
$count=0;
for ($i=0;$i<$n;$i++)
{
	if($str[$i]=='A' || $str[$i]=='E' || $str[$i]=='I' || $str[$i]=='O' || $str[$i]=='U' || $str[$i]=='a' || $str[$i]=='e' || $str[$i]=='i' || $str[$i]=='o' || $str[$i]=='uz')
	{
		$count=$count+1;
	}
}
echo "<b>Number of Vowels:".$count."</b>";
?>