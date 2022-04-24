<?php  
echo 'User IP Address '.$_SERVER['REMOTE_ADDR'];  
echo "<br>"; 
echo "<br>"; 

$current_file_name = basename($_SERVER['PHP_SELF']);
echo "File name is :".$current_file_name."\n";

echo "<br>"; 
echo "<br>"; 
$url = 'https://www.w3schools.com/php/default.asp.';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."<br>";
echo 'Host : '.$url['host']."<br>";
echo 'Path : '.$url['path']."<br>";

echo "<br>"; 
echo "<br>"; 

$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;

echo "<br>"; 
echo "<br>"; 


?>  

