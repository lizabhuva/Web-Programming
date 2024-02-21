<?php

/*$my_file=fopen("b1_220801046.txt","r");
$file_read=fgets($my_file);
echo $file_read;

$my_file=fopen("b1_220801046.txt","w");
$txt="This File is being Written.";
fwrite($my_file,$txt);
echo file_get_contents("b1_220801046.txt");*/

if(file_exists("b1_220801046.txt"))
{
	$my_file=fopen("b1_220801046.txt","a");
	$txt=" Hello...Good Morning...";
    file_put_contents("b1_220801046.txt",$txt,FILE_APPEND);
}
else
{
	echo "File not found";
}
unlink("b1_220801046.txt");
?>