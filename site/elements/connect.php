<?php
    $server = "localhost";
    $user = "root";
    $pw = "";
    $db = "gestion_anounce";
    $connection = mysqli_connect($server,$user,$pw,$db);
    
    if(!$connection){
        echo "<h1>error connecting to database</h1>";
    }
