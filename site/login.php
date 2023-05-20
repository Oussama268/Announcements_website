<?php 
    session_start();
    include("elements/connect.php");
    $email = $_POST['EMAIL'];
    $password = $_POST['PASSWORD'];


    $query_login = "select * from users where email='".$email."'and password=md5('".$password."')";
    $result = mysqli_query($connection,$query_login);



    if($row = mysqli_fetch_assoc($result)){
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id_user'];
        header("location:Anounces_listHTML.php");
    }
    else{
        $_SESSION['error'] = "email or password is not correct";
        header("location:AccueilHTML.php");
    }
