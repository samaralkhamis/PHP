<?php
########################################## PHP Basic Tasks #####################################################
############################################## Loops ########################################################### 

#1.	Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. 
echo "Q1 <br>";

    for($i=1; $i<=10; $i++)
    {
        if($i!=10)
        {
            echo "$i-";
        }
        else
        {
            echo "$i";
        }
    }
    echo "<br> <br>";

##############################################################################################

#2.	Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
echo "Q2 <br>";
$sum = 0 ;
for($i=1; $i<=30; $i++){
    $sum= $sum+$i ;
}
echo "the total for numbers between 0 - 30 is : ". $sum; 
echo "<br> <br>";

################################################################################################

#3.	Create a script to generate the following pattern, using the nested for loop. 
echo "Q3 <br>";
$str = 'A';
for($i=1;$i<=5;$i++){
    for($j=5-$i;$j>0;$j--)
        echo "A ";
        for($k=1;$k<=$i;$k++)
            echo "$str ";
    echo "<br>";
    $str++;
}
echo "<br> <br>";

###################################################################################################
#4.	Create a script to generate the following pattern, using the nested for loop. 
echo "Q4 <br>";
$str2 = 1;
for($i=1;$i<=5;$i++){
    for($j=5-$i;$j>0;$j--)
        echo "1 ";
        for($k=1;$k<=$i;$k++)
            echo "$str2 ";
    echo "<br>";
    $str2++;
}
echo "<br> <br>";

######################################################################################################

#5.	Create a script to generate the following pattern, using the nested for loop. 
echo "Q5 <br>";
$num = 1;
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++)
    if($i == $j){
        echo "$num ";
    }
    else{echo "0 ";}
    echo "<br>";
    $num++;
}
echo "<br> <br>";
#########################################################################################################

#6.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.
echo "Q6 <br>";

$num2 =5;
$factorial =1;
for ($i=$num2;$i>=1;$i--){
    $factorial =$factorial*$i;
}
echo $factorial;

echo "<br> <br>";

##########################################################################################################

#7.	Write a program to calculate and print the Fibonacci sequence using a for loop.
### Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.
echo "Q7 <br>";

echo "0".",";
echo "1".",";
$x=0;
$y=1;
for($i=0; $i<7; $i++){
    $z=$x+$y;
    echo $z.",";
    $x=$y;
    $y=$z;
}
echo "<br> <br>";

##########################################################################################################
#8.	Write a program which will count the "c" characters in the text "Orange Coding Academy". 
echo "Q8 <br>";
$text = "Orange Coding Academy";
$count=0;
     for($i=0;$i<strlen($text);$i++){
       if(strtolower($text[$i]) ==="c"){
           $count++;
       }
     }
     echo $count;

     echo "<br> <br>";
###########################################################################################################

#9.	Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag. 
echo "Q9 <br>";

echo "<table style='border :1px;cellpadding:3px; cellspacing:0px'><br/>";
for($col=1;$col<7;$col++){
    echo "<tr>";
     for($num=1;$num<6;$num++){
         $result=$col*$num;
         echo "<td style='padding: 3px;  border: 1px solid black;'>$col * $num = $result </td>";
 }  
 echo "</tr>";

}
echo "</table>";
echo "<br> <br>";

#############################################################################################################
#10.	Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".
// echo "Q10 <br>";
// for($i=1;$i<=50;$i++){
//     if($i % 5 ==0 && $i % 3 == 0 ){
//         echo "FizzBuzz <br>";
//     }
//     elseif($i % 3 == 0){
//         echo "Fizz <br> ";
//     }
//     elseif($i % 5 == 0){
//         echo "Buzz <br>";
//     }
//     else{
//     echo $i." ";}
// }
// echo "<br> <br>";

#################################################################################################################

#11.	Write a PHP program to generate and display the first n lines of a Floyd triangle

##According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive numbers, starting with a 1 in the top left corner:

echo "Q11 <br>";

for($i=1;$i<=5;$i++){
    if($i==1){echo "1"."<br>";}
    if($i==2){echo "2 3"."<br>";}
    if($i==3){echo "4 5 6"."<br>";}
    if($i==4){echo "7 8 9 10"."<br>";}
    if($i==5){echo "11 12 13 14 15"."<br>";}
}

echo "<br> <br>";


#################################################################################################################

#12.	Write a PHP program to print the following pattern. 
echo "Q11 <br>";
echo "<pre>";
for ($i = 1; $i < 5; $i++) {
    for ($j = $i; $j < 8; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;A");
    echo "<br>";
}
$n = 8;
for ($i = 5; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;A");
    echo "<br>";
}
echo "</pre>";
echo "<br> <br>";



?>