<?php
$server="localhost";
$db_user="root";
$password="";
$db_name="school";

$conn=new mysqli($server , $db_user , $password , $db_name);

echo "<pre>";
print_r($_POST);
echo "<pre>";

$name=$_POST["username"];
$tele=$_POST["phone"];
$gender=$_POST["gender"];

$insert="INSERT INTO students3(name,phone,gender) VALUES ('$name',$tele,$gender)";


$conn->query($insert);
header("location:index.php");



?>