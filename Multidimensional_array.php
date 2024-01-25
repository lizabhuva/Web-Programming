<?php
$student_master=array(array("Rollno"=>10,"Name"=>"Leeza"),array("Rollno"=>17,"Name"=>"Purvisha"),array("Rollno"=>27,"Name"=>"Krupa"),array("Rollno"=>28,"Name"=>"Hetvi"),array("Rollno"=>41,"Name"=>"Vishwa"),array("Rollno"=>59,"Name"=>"Priya"),array("Rollno"=>16,"Name"=>"Mansi"),array("Rollno"=>30,"Name"=>"Princi"));

foreach($student_master as $stud)
{
	foreach($stud as $stud_mstr)
	{
		echo $stud_mstr." , ";
	}
	echo "<br>";
}
?>