<?php
$server="localhost";
$db_user="root";
$password="";
$db_name="school";

$conn=new mysqli($server , $db_user , $password , $db_name);

$select1="SELECT * FROM `students1`";
$result1=$conn->query($select1);
?>
<center>
<div style="background-color:beige;width: 400px;height: 300px;">
<form action="do_ADD.php" method="post" style="margin-top:200px;padding-top:20px;">
    <input type="text" name="username" style="height: 40px;margin-right:67px;" size="40" placeholder="Enter name"><br><br>
    <input type="number" name="phone" maxlength="11" style="height: 40px;margin-right:200px;" placeholder="Enter the phone number"><br><br>
    <select name="gender" style="width: 100px;height: 30px;margin-right:270px;">
    <?php
        $select_gen = "SELECT * FROM gender";
        $result_gen =$conn->query($select_gen); 
        while($row_gen=$result_gen->fetch_assoc())
        {?>
            <option value="<?php echo $row_gen['id']; ?>" style="width: 100px;height: 30px;"><?php echo $row_gen["name"];?></option>
        <?php 
        }
        ?>
    </select><br><br>

    <input type="submit" style="width: 100px;height: 30px;margin-top:15px;cursor: pointer;margin-right:270px;">

</form></div>
</center>