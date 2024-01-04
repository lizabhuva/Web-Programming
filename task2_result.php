<?php
$unm=$_REQUEST['unm'];
$pwd=$_REQUEST['pwd'];
$nm=$_REQUEST['nm'];
$add=$_REQUEST['add'];
$country=$_REQUEST['country'];
$code=$_REQUEST['code'];
$email=$_REQUEST['email'];
$sex=$_REQUEST['sex'];
$eng=$_REQUEST['eng'];
$noneng=$_REQUEST['noneng'];
$about=$_REQUEST['about'];

echo "<table cellspacing=5 cellpadding=5 border=2>";
echo "<tr>";
echo "<td><label>Username:</label></td>";
echo "<td>$unm</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Password:</label></td>";
echo "<td>$pwd</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Name:</label></td>";
echo "<td>$nm</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Address:</label></td>";
echo "<td>$add</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Country:</label></td>";
echo "<td>$country</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>ZIP Code:</label></td>";
echo "<td>$code</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Email:</label></td>";
echo "<td>$email</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Sex:</label></td>";
echo "<td>$sex</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Language:</label></td>";
echo "<td>$eng"." "."$noneng</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>About:</label></td>";
echo "<td>$about</td>";
echo "</tr>";
echo "</table>";
?>