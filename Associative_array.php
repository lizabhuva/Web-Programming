<?php
$student_detail=array("Rollno"=>10,"Name"=>"Leeza","Sem"=>4,"Dept."=>"CS&IT","Program"=>"BCA","Div."=>"B1","Enrollment"=>"2208010XX","College"=>"Atmiya Uni","City"=>"Rajkot","State"=>"Gujarat");

foreach($student_detail as $key=>$value)
{
	echo "$key : $value";
	echo "<br>";
}
?>