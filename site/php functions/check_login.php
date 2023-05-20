<?php

include("connect.php");
$email = $_POST['EMAIL'];
$password = $_POST['PASSWORD'];

$query = "select * from users where email ={$email} and password = md5({$password})";

$result = mysqli_query($connection,$query);
