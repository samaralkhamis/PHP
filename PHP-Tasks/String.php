<?php
################## PHP Basic Tasks ########################                                                
############# PHP String and String Functions ##############

#(1) Write a PHP script to :
##a.Convert the entered string to uppercase.
##b.Convert the entered string to lowercase.
##c.Make the first letter of the string uppercase.
##d.Make the first letter of each word capitalized.

echo "Q1 <br>";
   $name = 'my name is samar';
   echo (strtoupper($name)."<br>");
   echo (strtolower($name)."<br>");
   echo (ucfirst($name)."<br>");
   echo (ucwords($name)."<br>");
   echo "<br>";


#########################################################

#(2) Write a PHP script splitting the following numeric string to be a date format. 
##Sample Output: '085119'
###Expected Output: 08:51:19
echo "Q2 <br>";
$date = "085119";
echo (substr(chunk_split($date,2,":"),0,-1)."<br>");
echo"<br>";


###########################################################

#(3) Write a PHP script to check whether the sentence contains a specific word .
##Sample Output: ‘I am a full stack developer at orange coding academy’
##Sample Word: ‘Orange’
###Expected Output: ‘Word Found!’
echo "Q3 <br>";
$str ="I am a full Stack developer at orange coding academy";
echo $str."<br>";
$word = strpos($str, "orange");
if($word){
    echo "Word Found";
}
echo"<br>";
echo"<br>";

###########################################################

#(4) Write a PHP script to extract the file name from the URL. 
##Sample Output: 'www.orange.com/index.php'
###Expected Output: 'index.php'

echo "Q4 <br>";
$current_file_name = basename($_SERVER['PHP_SELF']);
echo "File name is :".$current_file_name."\n";
echo"<br>";
echo"<br>";

###########################################################
#(5) Write a PHP script to extract the username from the following email address. 
##Sample Output: 'info@orange.com'
###Expected Output: 'info'

echo "Q5 <br>";
$email="samaralkhamis@gmail.com " ;
echo $email."<br>";
$pos = strpos($email, "@");
echo substr(($email), 0,$pos);
echo"<br>";
echo"<br>";


###########################################################
#(6) Write a PHP script to get the last three characters from the string. 
##Sample Output: 'info@orange.com'
###Expected Output: 'com'
 
echo "Q6 <br>";
$emaill="samaralkhamis@gmail.com" ;
echo $emaill."<br>";
echo substr(($emaill),-3);
echo"<br>";
echo"<br>";


###########################################################

#(7) Write a PHP script to generate simple random passwords from a given string.
##Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
###Expected Output: 254ABCc or h242sfeDAFEe32  -> random number 

echo "Q7 <br>";
$n=10;
function getpass($n) {
   $pass = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvxyz";
   $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($pass) - 1);
        $randomString .= $pass[$index];
    }
  
    return $randomString;
}
  echo getpass($n);
echo"<br>";
echo"<br>";

###########################################################
#(8) Write a PHP script to replace the first word of the sentence with another word

echo "Q8 <br>";
$str2 = "That new trainee is so genius"; 
echo $str2."<br>" ;
echo str_replace("That","Our",$str2);
echo"<br>";
echo"<br>";

###########################################################
#(9) Write a PHP script to find the first character that is different between two strings. 
##String1 : 'dragonball'
##String2 : 'dragonboll'
###Expected Result : First difference between two strings at position 7: "a" vs "o"
echo "Q9 <br>";
$fword = "dragonball";
$sword = "dragonboll";
for ($i=0; $i<strlen($fword) ; $i++){
    if(substr($fword,1,$i) == substr($sword,1,$i)){
       ##echo "No Diffecence";
    }
    else{
        $index = $i;
        $char1 = substr(($fword),$i,1);
        $char2 = substr(($sword),$i,1);
        break;
    };
}
echo "First difference between two strings at position ".$index.":"." $char1"." vs "."$char2";
echo"<br>";
echo"<br>";

###########################################################
#(10)Write a PHP script to put a string in an array, use the (var_dump) to view the array. 
##Sample Output: "Twinkle, twinkle, little star."
###Expected Result: array (4) {[0] => string (30) "Twinkle, " [1] => string (26) " twinkle," [2] => string (27) twinkle" [3] => string (26) " little star.”}
echo "Q10 <br>";
$twinkle = "Twinkle, twinkle, little star. how i wonder what you are !! ";
echo var_dump(explode(" ",$twinkle));
echo"<br>";
echo"<br>";

###########################################################
#(11) Write a PHP script to print the next letter of the inputted letter. 
##Sample Character: 'a'
###Expected Output: 'b'
echo "Q11 <br>";
$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo "the next char is " .$next_cha."\n";
echo"<br>";
echo"<br>";

###########################################################
#(12) Write a PHP Script to insert a string at the specified position in a given string.
##Original String: 'The brown fox'
##Insert 'quick' between 'The' and 'brown'.
###Expected Output: 'The quick brown fox'


echo "Q12 <br>";

$text = "The brown fox";
echo $text."<br>" ;
echo substr_replace($text," quick ",3,0);
echo"<br>";
echo"<br>";

###########################################################

#(13) Write a PHP Script to remove the zeroes from the given number.
echo "Q13 <br>";
$num = "000065702224";
echo $num ."<br>";
echo str_replace("0","",$num);
echo"<br>";
echo"<br>";
###########################################################

#(14) Write a PHP Script to remove part of a string.
echo "Q14 <br>";
$text1 = "The quick brown fox jumps over the lazy dog";
echo $text1."<br>";
echo str_replace("fox"," ",$text1);
echo"<br>";
echo"<br>";


###########################################################


#(15) Write a PHP Script to remove trailing dashes from a string.
echo "Q15 <br>";
$textt = "The quick brown fox jumps over the lazy dog---";
echo $textt."<br>" ;
echo str_replace("---","",$textt);
echo"<br>";
echo"<br>";

###########################################################
#(16) Write a PHP script to remove Special characters from the following string. 
##Sample Output: '\"\1+2/3*2:2-3/4*3'
###Expected Output: '1 2 3 2 2 3 4 3'

echo "Q16 <br>";
$strnum ="'\"\1+2/3*2:2-3/4*3'";
echo $strnum."<br>";
echo str_replace(array( '\'', '"','+' , ':', '*', '/','-' ),' ',$strnum);

echo"<br>";
echo"<br>";
###########################################################
#(17) Write a PHP Script to select first 5 words from the following string.
echo "Q17 <br>";
$str2 ="The quick brown fox jumps over the lazy dog";
echo $str2."<br>";
echo implode(" ", array_slice(explode(" ", $str2), 0, 5));

echo"<br>";
echo"<br>";
###########################################################
#(18) Write a PHP Script to remove comma(s) from the following numeric string.
echo "Q18 <br>";
$str1 = "2,543.12";
echo $str1."<br>";
echo str_replace(",","",$str1);
echo"<br>";
echo"<br>";
###########################################################
#(19) Write a PHP Script to print letters from 'a' to 'z'.
echo "Q19 <br>";
$str3 = "abcdefghijklmnopqrstuvwxyz";
for($i=0; $i<strlen($str3) ; $i++){
    echo substr(($str3),$i,1)." ";
}



?>