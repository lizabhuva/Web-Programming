<html>
<form action="" method="get">
<label>Enter Radius:</label>
<input type="text" name="rdius" id="rdius"/><br>
<input type="submit" name="submit"/>
</form>
</html>

<?php
$r=$_REQUEST['rdius'];
$area=3.14*$r*$r;
echo "Area of Circle wit n Radius $r is : ".$area;
?>