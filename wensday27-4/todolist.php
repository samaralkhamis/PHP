<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="todolist.php" method="post">
        <h1 style="text-align:center">TO DO LIST</h1>
        <div style="text-align:center">
        <input type="checkbox" name="choice[]" value='Do a php task '>
        <label>doing a php task</label>
        <br>
        <input type="checkbox" name="choice[]" value='Do a search for session ' >
        <label>Do a search for session</label>
       <br>
       <input type="checkbox" name="choice[]" value='Go shopping for eid '>
        <label>Go shopping for eid</label>
        <br>
        <br>
        <br>
        <button class="addBtn" name="submit">Add</button>
</div>
    </form>
</body>
</html>

<?php

if($_POST){
    echo "<h1><center> Done List  </center></h1>";
    foreach($_POST['choice'] as $val)
    {
    echo "<center> 	&#9745; <del>".$val . "<br>";
    }
}else {
    echo "please choose a task !! ";
}

    // $task=$_POST['task'];
    // $arr=array();
	// if (isset($_POST['submit'])) {
	// 	if (empty($_POST['task'])) {
	// 		$errors = "You must fill in the task";
	// 	}else{
    //         if (is_array($task) || is_object($task))
    //         foreach($task as $x){
    //             echo $x."<br/>";
    //         }
	// 	}
	// }	

    
## for ($i=0; $i <count($arr) ; $i++) { 
    #$task = $_POST['task'];
    #array_push($arr[i],$task);
     #print_r($arr[i]);
?>




