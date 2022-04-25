<?php
################### PHP Basic Tasks ################                                                     
######################## Array #####################

#(1)Write a script to generate the following paragraph , The words 'red', 'green' and 'white' should come from $colors array. 

echo "Q1 <br>";
$colors = array('red','green','white');
$arr = array('The','memory','of','that','scene','for','me','is','like','a','frame','of','film','forever','frozen','at','that','moment:','the',$colors[0],'carpet,','the',$colors[1],'lawn,','the',$colors[2],'house','the','leaden','sky.','The','new','president','and','his','first','lady.','-','Richard','M.','Nixon','"');
echo join(" ",$arr);
echo "<br>";
echo "<br>";

######################################################
#(2) Write a PHP script that will display the colors as unordered list : $colors = array("Green", "Red", "White"); 
echo "Q2 <br>";
$arr1 = array("Green", "Red", "White"); 
echo "  unordered list of colors : <ul>
<li>$arr1[0]</li>
<li>$arr1[1]</li>
<li>$arr1[2]</li>
</ul>";
echo "<br>";
echo "<br>";

########################################################
#(3) Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
echo "Q3 <br>";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}
echo "<br>";
echo "<br>";
###########################################################
#(4) Write a PHP script to display the first element of the above array. 
##$color = array (4 => 'white', 6 => 'green', 11=> 'red');
##Expected Output:  white

echo "Q4 <br>";
$colorr = array (4 => 'white', 6 => 'green', 11=> 'red');
echo "The first element of array is $colorr[4]"."<br>" ;
echo "<br>";
echo "<br>";

##########################################################
#(5) Write a PHP script that inserts a specific new item in an array in any position. 
echo "Q5 <br>";
$num= array(1,2,3,4,5);
array_splice($num,3,0,'$');
echo join(" ",$num);
echo "<br>"."<br>";

##############################################################
#(6) Write a PHP script to sort the following associative array depending on the key value [asc] : Sample Input:
echo "Q6 <br>";
$fruits = array("d" => "lemon", "a" => "orange","b" => "banana", "c" => "apple"); 
arsort($fruits);

foreach($fruits as $x => $fruits)
   {
   echo $x . " = " . $fruits;
   echo "<br>";
   }

echo "<br>"."<br>";

#########################################################

#(7) Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the seven lowest and the seven highest temperatures.

echo "Q7 <br>";
$temp =array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,73,75,79,73);

echo "Average Temperature is : ".array_sum($temp)/count($temp)."<br>";

echo "List of seven lowest temperatures : ";
sort($temp);
for($i=0; $i < 7; $i++)
   {
   echo $temp[$i].",";
   }
echo "<br>";

echo "List of seven highest temperatures : ";
rsort($temp);
for($i=0; $i < 7; $i++)
   {
   echo $temp[$i].",";
   }

   echo "<br>"."<br>";



##########################################################

#(8) Write a PHP program to merge the following two arrays. 
echo "Q8 <br>";
$array1 = array("color" => "red",2,4);
$array2 = array("a","b","color" => "green", "shape" => "trapezoid",4);
print_r(array_merge($array1,$array2,));
echo "<br>"."<br>";

##############################################################

#(9)Write a PHP function to change the following array's and convert all the strings to upper case. 
echo "Q9 <br>";
$colors1 = array("red","blue","white","yellow");  
$j = 0;
foreach( $colors1 as $element ) {
    $colors1[$j] = strtoupper($element);     
    $j++;
}
foreach( $colors1 as $element )
    echo $element . "<br>";
echo "<br>"."<br>";

###############################################################

#(10) Write a PHP function to change the following array's and convert all the strings to lower case. 
echo "Q10 <br>";
$colors2 = array("RED","BLUE","WHITE","YELLOW");  
$j = 0;
foreach( $colors2 as $element ) {
    $colors2[$j] = strtolower($element);     
    $j++;
} 
foreach( $colors2 as $element )
    echo $element . "<br>";

echo "<br>"."<br>";

################################################################

#(11) Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 
echo "Q11 <br>";
echo implode(",",range(200,250,4))."\n";
echo "<br>"."<br>";

#################################################################

#(12) Write a PHP script to get the shortest/longest string length from an array. 
echo "Q12 <br>";
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';

echo "<br>"."<br>";

###############################################################

#(13)Write a PHP script to generate unique random 10 numbers within a specific range. 
echo "Q13 <br>";
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}

echo "<br>"."<br>";

################################################################

#(14) Write a PHP script that returns the lowest integer in the array  that is not 0. 
echo "Q14 <br>";
$array3 = array( 2, 0, 10, 12, 6);
$lowest = $array3[0];
for($i=0; $i<count($array3); $i++){
if($array3[$i] < $lowest && $array3[$i]!= 0){
    $lowest = $array3[$i];
    echo $lowest;
}
}
?>