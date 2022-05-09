
<?php
$temp =array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);

echo "Average Temperature is : ".array_sum($temp)/count($temp)."<br>";

echo "List of five lowest temperatures : ";
sort($temp);
for($i=0; $i < 5; $i++)
   {
   echo $temp[$i].",";
   }
echo "<br>";

echo "List of five highest temperatures : ";
rsort($temp);
for($i=0; $i < 5; $i++)
   {
   echo $temp[$i].",";
   }

   echo "<br>"."<br>";
?>