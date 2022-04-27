<?php

if(isset($_POST['keys_submit']) && !empty($_POST['keys_submit'])){
    $keywords=$_POST['keywords'];
    header("location: ".$keywords);
}
?>