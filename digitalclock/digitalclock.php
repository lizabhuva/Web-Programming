<html>
<body>
<style>
.main
{
	background-color:black;
	color:red;
}
.c
{
	background-color:black;
	color:red;
	border:solid;
	border-color:white;
	border-radius:5px;
}
.cl
{
	background-color:black;
	color:red;
	border:dashed;
	border-color:red;
	font-family:digital-7-mono;
	border-radius:5px;
}	
@font-face
{
	font-family:digital-7-mono;
	src:url(digital-7-mono.ttf);
}
pre
{
	font-size:10px;
	color:white;
	border:solid;
	border-color:white;
}

</style>
</body>
</html>
<?php
echo "<table border=4 class=main align=center>";
echo "<tr>";
echo "<td>";
echo "<table class=c align=center>";
echo "<td align=center class=pr1>";
echo "<pre>DT     MON    YER</pre>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "<table  border=2 class=cl align=center>";
echo "<tr>";
echo "<td align=center>";
$b=date("d  |  m  |  Y");
echo $b;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td align=center>";
date_default_timezone_set("Asia/Kolkata");
header('Refresh:1');
$a=date("H : i : s");
echo $a;
echo "<tr>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "<table class=c align=center>";
echo "<td align=center>";
echo "<pre>HR     MIN     SEC</pre>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</td>";
echo "</tr>";
echo "</table>";
	
?>
