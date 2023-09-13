<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member1</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <div class="container">
    <div class=" h4 text-center alert alert-success mb-4 mt-4 " role="alert"> แสดงข้อมูลนักเรียน ม.6/1  </div>

<table class="table table-striped">
    <tr>
        <th>รหัส</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>คะแนน</th>
        
    </tr>
  <?php
$sql = "SELECT * FROM member1"; 
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>
    <tr>
    <td><?=$row["id"]?></td>
    <td><?=$row["name"]?></td>
    <td><?=$row["surname"]?></td>
    <td><?=$row["points"]?></td>
   


</tr>
<?php
}
mysqli_close($conn);  //ปิดการเชื่อมต่อฐานข้อมูล
?>
</table>

</div>
</body>
</html>

<script language="JavaScript">
function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
        window.location=mypage;
    }
}
</script>