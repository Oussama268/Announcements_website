<?php 
session_start();
include("elements/connect.php");

$username = $_POST['USERNAME'];
$email = $_POST['EMAIL'];
$password = $_POST['PASSWORD'];

$query_check_email = "select * from users where email ='".$email."'";
$result=mysqli_query($connection,$query_check_email);
if($row=mysqli_fetch_assoc($result)){
    $_SESSION['error'] = "This email already have an account";
    header("location:AccueilHTML.php");
}


$query_create_account = "insert into USERS(username,email,password) values('".$username."','".$email."','".md5($password)."')";
$result = mysqli_query($connection,$query_create_account);

$id = mysqli_insert_id($connection);


if($result){
    header("location:AccueilHTML.php");
}
