<?php

$file = fopen("file.txt","w")or die("File cound not be found");//Mode in fopen() function is very important because we can if we want override specific text just by choosing w or a.
//$$hello = "What's up my friend"; I can skip if I want a whole String Variable just by using the dollar $ twice. In PHP we can use the dollar sign as many times as we want which means that we can modify a specific file as we wish. Basically we have the freedom to skip or avoid specific declared and initialized strings or any type of variable...stings is in this specific case because I am using a string stream in order to write something to the txt file. We can even manipulate specific char variables just by typecasting them to PHP into a txt file which is awesome :)
$$hello = fwrite($file,"Hello There \n");
$hello = "How you doing";
fwrite($file,$hello);
fclose($file);
?>