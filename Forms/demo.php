<?php
$a=65; 
echo "<table cellspacing=10 cellpadding=5 border=2 align=center >";
for($i=1;$i<8;$i++)
{
    echo "<tr>";
  for($j=1;$j<5;$j++)
  {
	  
	  echo "<td>";
    echo chr($a)." ";
	$a=$a+1; 
	  
	  echo "</td>";
	  
  }
  echo "<br>";
  echo "</tr>";
}
echo "</table>";
?>