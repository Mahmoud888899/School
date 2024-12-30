<?php
$server="localhost";
$db_user="root";
$password="";
$db_name="school";

$conn=new mysqli($server , $db_user , $password , $db_name);
$id=$_GET["num"];
$select="SELECT * FROM `students3` WHERE id='$id'";
$result=$conn->query($select);
$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <div style="background-color: rgb(233, 97, 97); margin-top: 100px;width: 300px;height: 230px;padding: 10px;">
            <h1 style="color: red;">هل انت متاكد  انك تريد ازاله الطالب ؟؟</h1><br><br>
             <a href="index.php"><button>الرجوع الى الصفحه الرءسيه</button></a><br><br>
             
             <a href="deletess.php?num=<?php echo $id ?>"><button>نعم</button></a>
        

        </div>
    </center>
</body>
</html>