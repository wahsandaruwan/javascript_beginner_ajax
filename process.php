<?php

    echo 'Processing.....';

    // Check for Get variable
    if(isset($_GET["name"])){
        echo "I got it. And your name is ".$_GET["name"];
    }

    // Check for POST variable
    if(isset($_POST["name"])){
        echo "I got it. And your name is ".$_POST["name"];
    }

?>