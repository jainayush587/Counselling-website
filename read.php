 <?php
$myfile = fopen("01.jpg", "r") or die("Unable to open file!");
echo fread($myfile,filesize("01.jpg"));
fclose($myfile);
?> 