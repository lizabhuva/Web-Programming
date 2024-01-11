<?php
#String Functions:
#1.strlen()
echo strlen("Hello,World!");

#2.Strpos()
echo strpos("Hello, World!","World");

#3.str_replace()
echo str_replace("World","Universe","Hello,World!");

#4.substr()
echo substr("Hello, World!",0,5);

#5.strtolower();
echo strtolower("HELLO, WORLD!");

#6.strtoupper()
echo strtoupper("Hello, World!");

#7.ucfirst()
echo ucfirst("hello, world!");

#8.strrev()
echo strrev("Hello, World!");

#9.trim()
echo trim("**Hello, World!**", "*");

#Date & Time Functions:
#1.Time()
echo time();

#2.Date()
echo date("Y-m-d H:i:s");

#4.strtotime
echo strtotime("2023-08-01");

#5.mktime()
echo mktime(12,0,0,8,1,2023);

#6.date_default_timezone_set()
echo date_default_timezone_set("America/New_York");

#Mathematical Functions:
#1.abs()
echo abs(-45);

#2.sqrt()
echo sqrt(16);

#3.rand()
echo rand(1,100);

#4.round()
echo round(3.2);

#5.ceil()
echo ceil(3.8);

#6.floor()
echo floor(3.8);

#7.pow()
echo pow(2,3);

#8.max()
echo max(5,3,9);

#9.min()
echo min(35,98,67);
?>