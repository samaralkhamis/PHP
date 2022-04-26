<?php 
################################### PHP Logical Statment And Operators ##########################################################


#1.	Write a PHP script to see if the specified year is a leap year or not.
##Check if the year is divisible by 400. If the year is evenly divisible by 4, then the year is a leap year. If the year is only evenly divisible by 100 and not evenly divisible by 400, then the year is not a leap year.##

echo "Q1 <br>";
function year_check($my_year){
    if ($my_year % 400 == 0)
       echo "It is a leap year";
    else if ($my_year % 100 == 0)
       echo "This year is not a leap year";
    else if ($my_year % 4 == 0)
       echo "It is a leap year";
    else
       echo "This year is not a leap year" ;
 }

 $my_year = 2013;
 echo $my_year ."<br>";
 year_check($my_year);

 echo "<br> <br>";

 ################################################################################

 #2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
 echo "Q2 <br>";

 function season_check($temp){
    if ($temp < 20)
       echo "It is a wintertime!";
    else {
        echo "It is a summertime!";
    }
 }
 $temp = 27;
 
 echo "the temperature is ". $temp . "thats mean : " ;
 season_check($temp);

 echo "<br> <br>";
################################################################################

#3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
echo "Q3 <br>";
$first_int =5;
$seco_int =5;
echo "first int = ". $first_int ."<br> second int = ". $seco_int ."<br>";
if ($first_int == $seco_int){
    $sum = ($first_int + $seco_int);
    echo "calculate the triple of thier sum = ";
    echo ($sum * 3);
}
else {
    echo " the two integer not the same !";
}

echo "<br> <br>";

#################################################################################

#4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
echo "Q4 <br>";
$first_integer =15;
$seco_integer =15;
echo "first int = ". $first_integer ."<br> second int = ". $seco_integer ."<br>";
$summ= $first_integer + $seco_integer ;
if ($summ= 30){
  echo "the 2 integer sum equal 30 ";
}
else {
    echo "False , the two integer not equal 30 !";
}
echo "<br> <br>";

##################################################################################

#5.	Write in PHP script to check if the given positive number is a multiple of 3.
## we will use modulo 
echo "Q5 <br>";
$num1 = 20; 
echo $num1. "<br>" ;
if($num1 % 3 == 0){
    echo "the number is multiple of 3";
  }
  else {
      echo "False ! the number is not multiple of 3 ";
  }


  echo "<br> <br>";

#################################################################################

#6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
echo "Q6 <br>";
$num2 = 49 ;
echo $num2 . "<br>";
if($num2 > 20 && $num2 <= 50){
    echo "True , its in the range [20-50]";
}
else {
    echo "False ! ita not in the range ";
}


echo "<br> <br>";

####################################################################################

#7.	Write PHP script to find the largest number between the three integers
echo "Q7 <br>";
$arr1 = array(1,5,9);
$largest = $arr1[0];
for ($i =0; $i < count($arr1); $i++){
    if($arr1[$i] > $largest){
        $largest =$arr1[$i];
    }
    else{
        $largest =$arr1[0];
    }
}
echo $largest;

echo "<br> <br>";

###################################################################################

#8.	Write PHP script to calculate the monthly electricity bill according to these rules
## a. For first 50 units - 2.50 JOD/Unit
## b. For next 100 units - 5.00 JOD/Unit
## c. For next 100 units - 6.20 JOD/Unit 
## d. For units above 250 - 7.50 JOD/Unit 
echo "Q8 <br>";

$bill = 250;
    if ($bill <= 50) {
        echo $bill * 2.5 . " JOD ";
    } elseif ($bill <= 150) {
        echo (50 * 2.5 + ($bill - 50) * 5) . " JOD ";
    } elseif ($bill <= 250) {
        echo (50 * 2.5 + 100 * 5 + ($bill - 150) * 6.2) . " JOD ";
    } else {
        echo (50 * 2.5 + 100 * 5 + 100 * 6.2 + ($bill - 250) * 7.5) . " JOD ";
    }
    echo "<br> <br>";

###################################################################################

#9.	 Write php script to make a calculator, the calculator should contain the four main operations 
echo "Q9 <br>";

$int1 = 5;
$int2=10;

echo $int1 . "<br>" . $int2 . "<br>" ;
$addition = $int1 + $int2 ;
echo "Addition : ".$int1  ." + " .$int2 . " = " .$addition. "<br>" ;  
$subtraction = $int2-$int1 ;
echo "subtraction : ".$int1  ." - " .$int2 . " = " .$subtraction. "<br>" ; 
$multiplication = $int1 * $int2 ;
echo "multiplication : ".$int1  ." * " .$int2 . " = " .$multiplication . "<br>" ; 
$Division = $int1 / $int2 ; 
echo "Division : ".$int1  ." / " .$int2 . " = " .$Division. "<br>" ; 
echo "<br> <br>";

#################################################################################

# 10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
echo "Q10 <br>";
$age = 15;
echo "person age is ". $age ."<br>" ;
if($age > 18){
echo "You are eligible to vote";
}
else{
    echo "is no eligible to vote";
}

echo "<br>"."<br>";

##################################################################################

# 11.	Write php script  to check whether a number is positive, negative or zero
echo "Q11 <br>";
$number =-5 ;
echo $number . "<br>";
if($number > 0){
    echo "Positive";
    }
    elseif ($number < 0 ){
        echo "Negative";
    }
    else {
        echo " the number is zero ";
    }
    
echo "<br> <br>";

#####################################################################################
#12.Write a PHP to find the grade for the student, after calculating the avg of his score in all the subject 
echo "Q12 <br>";
$marks = [60,86,95,63,55,74,79,62,50] ;
for($i=0 ; $i< count($marks); $i++){
    echo  $marks[$i] ." , " ;
}
echo "<br>";
$avg=array_sum($marks)/count($marks)  ;
echo "the avg for marks is ".$avg . "<br>" ;
if($avg <100 && $avg >90){
    echo "Your garde is A";
}
if($avg <90 && $avg >80 ){
    echo "Your garde is B";
}
if($avg <80 && $avg >70){
    echo "Your garde is C";
}
if($avg <70 && $avg >60){
    echo "Your garde is D";
}
if($avg <60){
    echo "Your garde is F";
}


?>