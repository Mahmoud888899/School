<?php
$server="localhost";
$db_user="root";
$password="";
$db_name="school";

$conn=new mysqli($server , $db_user , $password , $db_name);

$id=$_GET["num"];

$name=$_POST["username"];
$tele=$_POST["phone"];
$gender=$_POST["gender"];


$update="UPDATE students1 SET name='$name',
         phone=$tele,gender=$gender WHERE id='$id'";

$conn->query($update);
header("location:index.php")
?>