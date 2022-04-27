<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" style="text-align:center">
        First Number : <input type="text" name="numb1"><br><br>
        Second Number : <input type="text" name="numb2"><br><br>
        <select name="operator" id=""><br><br>
           <option>choose</option>
           <option>Add</option>
           <option>Subtract</option>
           <option>Multiply</option>
           <option>Divide</option>
           <option>Square</option>
        </select> 
        <br><br>
        <button type="submit" name="submit" value="submit">Calculate</button>

     </form>
<?php 

            if (isset($_POST['submit'])&& !empty($_POST['submit'])) {
                $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case 'choose':
                        echo "You need to select any operator";
                        break;
                    case 'Add':
                        echo $result1 + $result2;
                        break;
                    case 'Subtract':
                        echo $result1 - $result2;
                        break;
                    case 'Multiply':
                        echo $result1 * $result2;
                        break;
                    case 'Divide':
                        echo $result1 / $result2;
                        break;
                    case 'Square':
                        echo $result1 ** $result2;
                        break;
                }
            }


         ?>
</body>
</html>