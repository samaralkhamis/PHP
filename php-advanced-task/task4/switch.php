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
{   echo '<br>';
    switch ($_POST['day']) {
        case 'Satrday':
            echo 'Laugh on Saturday, joy tomorrow.';
            break;
        case 'Monday':
            echo 'Laugh on Monday, laugh for danger.';
            break;
        case 'Tuesday':
            echo 'Laugh on Tuesday, kiss a stranger.';
            break;
        case 'Wensday':
            echo 'Laugh on Wednesday, laugh for a letter.';
            break;
        case 'Thursday':
            echo 'Laugh on Thursday, something better.';
            break;
        case 'Friday':
            echo 'Laugh on Friday, laugh for sorrow.';
            break; 
        default:
            echo 'Incorrect';
            break;
    }
}
?>