<?php
session_start();
if(!isset($_SESSION["username"]))
header("location:iogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <div class="container">
        <br><br>
    <div class="alert alert-primary h4" role="alert">
Welcome
</dvi>
<?php
if(isset($_SESSION["firstname"])){
    echo "<div class='text-success'> ";
    echo $_SESSION["firstname"] . " " . $_SESSION["lastname"]; 
    echo "</div>";
}

?>

<a href="logout.php"> Logot </a>
</div>
</body>
</html>
<div class="button-container">
						<a href="http://localhost/webdb1/show_member.php" class="link-button">แก้ไขคะแนน</a>
						
					</div>

                    