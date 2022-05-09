<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <form method="post">
        <input type="text" name="City" placeholder="Please Enter your fav City">
        <input type="submit" name="submit" >
    </form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    echo "<br> Your Favorite City Is ". $_POST['City'];
    $info=array($_POST['City']);
}

?>