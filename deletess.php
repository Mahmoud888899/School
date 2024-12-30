<?php
$server="localhost";
$db_user="root";
$password="";
$db_name="school";

$conn=new mysqli($server , $db_user , $password , $db_name);
$id=$_GET["num"];
$delete1="DELETE FROM students1 WHERE id='$id'";
$delete2="DELETE FROM students2 WHERE id='$id'";
$delete3="DELETE FROM students3 WHERE id='$id'";

$conn->query($delete1);
$conn->query($delete2);
$conn->query($delete3);
header("location:index.php")




?>