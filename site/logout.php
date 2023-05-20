<?php
session_start();
function logout(){
    $_SESSION['id'] = null;
    header("location:AccueilHTML.php");
    
}
if(isset($_GET['run'])){
    logout();
    
}