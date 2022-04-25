<?php
echo "Q1 <br>";
#1.	Write a PHP script to check if the inserted number is a prime number 
function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 
$number = 10;
echo $number ."<br>" ;
$flag = primeCheck($number);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime";
echo "<br>";
$number1 = 3;
echo $number1 ."<br>" ;
$flag = primeCheck($number1);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime";
    echo "<br>";
    echo "<br>";
  
##########################################################################
#2.	Write a PHP script to reverse a string 
##Sample Input:  remove
###Expected Output: evomer
echo "Q2 <br>";
$str = "REMOVE";  
echo "Reverse string of $str is " .strrev ( $str);  
echo "<br>";
echo "<br>";

##########################################################################
#3.	 Write a PHP script to check if the all string characters are lower cases
##Sample Input:  remove
###Expected Output: Your String is Ok 
echo "Q3 <br>";
function is_str_lowercase($str1)
   {
    for ($i = 0; $i < strlen($str1); $i++) {
	      if (ord($str1[$i]) >= ord('A') &&
          ord($str1[$i]) <= ord('Z')) {
              
        return  "No\n There is an uppercase !!<br>";
         }
         }
        
      return "Yes\n all lettesr in lower case .. <br> " ;
       }
echo 'my name is samar <br>' ;
var_dump(is_str_lowercase('my name is samar'));
echo 'ORange <br>' ;
var_dump(is_str_lowercase('ORange'));
echo "<br>";
echo "<br>";


############################################################################

#4.	Write a PHP function to swap to variables?
echo "Q4 <br>";
function swap($a, $b) 
{
    echo "A: ". $a; 
    echo "<br> B: ". $b;
   $a = $a+$b;
   $b = $a - $b;
   $a = $a - $b;
   echo " <br>Variables after swaping : <br>";
   echo "A: ". $a;
   echo "<br> B: ". $b;
 }

 echo (swap(5,20));
 echo "<br>";
echo "<br>";

#############################################################################

#6.	Write a PHP function to check if a number is an Armstrong number or not ?
## **Armstrong number is a number that is equal to the sum of cubes of its digits.##
echo "Q6 <br>";

function armstrongnum($arm){
    $sum = 0; 
    $x = $arm; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem;
        $x = $x / 10; 
    } 

    if ($arm == $sum)
        return 1;
     
    // not an armstrong number   
    return 0;   
}
 
// Driver Code
$arm = 407;
echo $arm." is it an armstrong num ? <br> " ;
$flag1 = armstrongnum($arm);
if ($flag1 == 1)
    echo "Yes";
else
    echo "No";
    echo "<br>";
    echo "<br>";
####################################################################

#7.	Write a PHP function that checks whether a passed string is a palindrome or not?
echo "Q7 <br>";

function palindrome($string) 
{
  if ($string == strrev($string))
      return "true its an palindrome";
  else
	  return 0;
}
echo "MADAM <br>";
echo palindrome('madam')."\n";
echo "<br>";
echo "<br>";

#######################################################################

#8.	Write a PHP function to remove duplicates from an array ?
echo "Q7 <br>";
$array = array(2, 4, 7, 4, 8, 4);
$arr=(array_unique($array)); 
print_r($arr);

    ?>