<?php
include 'condb.php';
$id=$_GET['id'];
$sql="SELECT * FROM member1 WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Conpatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
 <!-- Bootstrap CSS -->
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
    <div class=" h4 text-center  alert alert-success  mb-4 mt-4" role="alert"> แก้ไขข้อมูลนักเรียน </div>
    <form method="POST" action="update_member1.php">
    <label>รหัสสมาชิก:</label>
    <input type="text" name="id_mem" class="form-control" readonly value=<?=$row['id']?> > <br>
    <label>ชื่อ:</label>
    <input type="text" name="fname" class="form-control"  value=<?=$row['name']?> > <br>
    <label>นามสกุล:</label>
    <input type="text" name="lname" class="form-control" value=<?=$row['surname']?> > <br>
    <label>คะแนน:</label>
    <input type="number" name="points" class="form-control" value=<?=$row['points']?> > <br>
    <input type="submit" value="Upadte" class="btn btn-success" >
    <a href="show_member.php"  class="btn btn-danger">Cancel</a>
</form>

</div>
</div>

</div>
</body> 
</html>