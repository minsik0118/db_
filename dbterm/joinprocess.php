<?php
$conn = mysqli_connect("localhost", "root", "009953");
mysqli_select_db($conn, "dbterm");
$sql = "INSERT INTO member (id,pw,name,age) VALUES('".$_POST['id']."', '".$_POST['pw']."', '".$_POST['name']."','".$_POST['age']."')";
$result = mysqli_query($conn, $sql);
echo '<script type = "text/javascript">alert("가입완료.")</script> ';

header('Location:http://localhost/dbterm/main.php');
 ?>
