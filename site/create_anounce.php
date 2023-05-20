<?php 
session_start();
$server = "localhost";
$user = "root";
$pw = "";
$db = "gestion_anounce";

$conection = mysqli_connect($server,$user,$pw,$db);


$anounce_context=$_POST['ANOUNCE_CONTEXT'];
$anounce_text=$_POST['ANOUNCE_TEXT'];


$query_create_anounce = "insert into ANOUNCES(context,text,id_user) values('".$anounce_context."','".$anounce_text."','".$_SESSION['id']."')";

$result = mysqli_query($conection,$query_create_anounce);

if($result){
    header("location:Anounces_listHTML.php");
}
else{
    echo  "<h4>Error</h4>";
}
