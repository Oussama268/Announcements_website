<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php
                    if(!isset($_SESSION['id'])){
                ?>

                <a href="AccueilHTML.php"><li>Account</li></a>

                <?php
                }else{
                ?>
                
                <a href="Anounces_listHTML.php"><li>Anounces List</li></a>
                <a href="create_anounceHTML.php"><li>Create Anounce</li></a>
                <a href="my_anouncesHTML.php"><li>My Anounces</li></a>
                <a href="logout.php?run=true"><li>Log Out</li></a>
                <li class="user_hello">
                    <?php
                        echo "Hello {$_SESSION['username']}";
                }
                    ?>
                </li>
            </ul>
        </nav>
    </header>
