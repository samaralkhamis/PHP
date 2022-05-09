<?php
  $cities=array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
  );
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Large Cities Again</h2>
  <form method="post">
    <h3>Please choose a city:</h3>
<!-- select in foreach -->

    <select name="city">
      <?php
      foreach($cities as $value){
      echo '<option >'.$value.'</option>';
      }
      ?>
    </select>

    <input type="submit" name="submit" value="Go">
  </form>
<!-- output statment  -->
  <?php
    if(isset($_POST['submit'])){
    $city=$_POST['city'];

    $country=array_search($city, $cities);

    echo '<p>'.$city.' is in '.$country.'</p>' ;
    }
?>
</body>

</html>