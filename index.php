<?php
$server="localhost";
$db_user="root";
$password="";
$db_name="school";

$conn=new mysqli($server , $db_user , $password , $db_name);

$select1="SELECT * FROM `students1`";
$result1=$conn->query($select1);

$select2="SELECT * FROM `students2`";
$result2=$conn->query($select2);

$select3="SELECT * FROM `students3`";
$result3=$conn->query($select3);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mahmoud Hussien">
    <meta name="description" content="School administration">
    <title>School administration</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <style>
      .l1{background-color: black;color: white;}
      .l2{background-color: black;color: white;}
      .l3{background-color: black;color: white;}
    </style> 

  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <h1 class="navbar-brand" style="font-size: 50px;padding-right: 300px;">Suez School</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a @click="isL1Active=true;isL2Active=false;isL3Active=false;" :class="{'l1':isL1Active}"  class="nav-link " style="font-size: 30px;margin-left: 20px;cursor: pointer;">Level 1</a>
              </li>
              <li class="nav-item">
                <a @click="isL2Active=true;isL1Active=false;isL3Active=false;" :class="{'l2':isL2Active}" class="nav-link " style="font-size: 30px;margin-left: 60px;cursor: pointer;">Level 2</a>
              </li>
              <li class="nav-item">
                <a @click="isL3Active=true;isL1Active=false;isL2Active=false;" :class="{'l3':isL3Active}" class="nav-link " style="font-size: 30px;margin-left: 60px;cursor: pointer;">Level 3</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <div v-show="isL1Active" class="row" >
          <div class="col-12">
            <p>l1</p>
            <a href="ADD.php"><button class="btn btn-success">ADD student</button></a><br><br>
            <table class="table table-hover table-bordered table-striped">
              <tr>
                <th><center>id</center></th>
                <th>name</th>
                <th>telephone</th>
                <th>gender</th>
                <th>controls</th>
              </tr>

              <?php while($row=$result1->fetch_assoc()){  ?>
              <tr>
                <td><center><?php echo $row["id"]; ?></center></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php $id_gen = $row["gender"];
                       $select_gen="SELECT * FROM gender WHERE id='$id_gen'";
                       $result_gen =$conn->query($select_gen); 
                       $row_gen=$result_gen->fetch_assoc();
                       echo $row_gen["name"];
                       ?></td>
                <td><a href="do_delete.php?num=<?php echo $row['id'] ?>"><button style="margin-right: 10px;" class="btn btn-danger">Delete</button></a>
                <a href="update1.php?num=<?php echo $row['id'] ?>"><button class="btn btn-primary">Update</button></a></td>

              </tr><?php } ?>
            </table> 
          </div>
        </div>

        <div v-show="isL2Active" class="row">
          <div class="col-12">
            <p>l2</p>
            <a href="ADD2.php"><button class="btn btn-success">ADD student</button></a><br><br>
            <table class="table table-hover table-bordered table-striped">
              <tr>
                <th><center>id</center></th>
                <th>name</th>
                <th>telephone</th>
                <th>gender</th>
                <th>controls</th>
              </tr>

              <?php while($row=$result2->fetch_assoc()){  ?>
              <tr>
                <td><center><?php echo $row["id"]; ?></center></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php $id_gen = $row["gender"];
                       $select_gen="SELECT * FROM gender WHERE id='$id_gen'";
                       $result_gen =$conn->query($select_gen); 
                       $row_gen=$result_gen->fetch_assoc();
                       echo $row_gen["name"];
                       ?></td>
                <td><a href="do_delete2.php?num=<?php echo $row['id'] ?>"><button style="margin-right: 10px;" class="btn btn-danger">Delete</button></a>
                <a href="update2.php?num=<?php echo $row['id'] ?>"><button class="btn btn-primary">Update</button></a></td>

              </tr><?php } ?>
            </table> 
          </div>
        </div>

        <div v-show="isL3Active" class="row">
          <div class="col-12">
            <p>l3</p>
            <a href="ADD3.php"><button class="btn btn-success">ADD student</button></a><br><br>
            <table class="table table-hover table-bordered table-striped">
              <tr>
                <th><center>id</center></th>
                <th>name</th>
                <th>telephone</th>
                <th>gender</th>
                <th>controls</th>
              </tr>

              <?php while($row=$result3->fetch_assoc()){  ?>
              <tr>
                <td><center><?php echo $row["id"]; ?></center></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php $id_gen = $row["gender"];
                       $select_gen="SELECT * FROM gender WHERE id='$id_gen'";
                       $result_gen =$conn->query($select_gen); 
                       $row_gen=$result_gen->fetch_assoc();
                       echo $row_gen["name"];
                       ?></td>
                <td><a href="do_delete2.php?num=<?php echo $row['id'] ?>"><button style="margin-right: 10px;" class="btn btn-danger">Delete</button></a>
                <a href="update3.php?num=<?php echo $row['id'] ?>"><button class="btn btn-primary">Update</button></a></td>

              </tr><?php } ?>
            </table> 
          </div>
        </div>









      </div>
    











    </div>
    <script src="vue1.js"></script> 
     <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>  -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <!-- <script src="bootstrap.bundle.min.js"></script> -->
    <script src="Man.js"></script>
  </body>
</html>


<!-- $server="sql209.infinityfree.com";
$db_user="	if0_37981012";
$password="1111Mmhs";
$db_name="if0_37981012_school";

$conn=new mysqli($server , $db_user , $password , $db_name);
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET CHARACTER SET utf8'); -->