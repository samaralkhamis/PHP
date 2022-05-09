<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="day" placeholder="Please Enter Day">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
 echo '<br>';
    if($_POST['day']== 'Sunday'){
       echo' Laugh on Saturday, joy tomorrow. ';
    }elseif($_POST['day']== 'Monday'){
       echo ' Laugh on Monday, laugh for danger.';
    }elseif($_POST['day']== 'Tuesday'){
        echo' Laugh on Tuesday, kiss a stranger.';
    }elseif($_POST['day']== 'Wensday'){
        echo' Laugh on Wednesday, laugh for a letter.';
    }elseif($_POST['day']== 'Thursday'){
        echo' Laugh on Thursday, something better.';
    }elseif($_POST['day']== 'Friday')
        echo' Laugh on Friday, laugh for sorrow.';
    else echo ' incorrect ';
    
}
?>