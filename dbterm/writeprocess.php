<?php
$conn = mysqli_connect("localhost", "root", "009953");
mysqli_select_db($conn, "dbterm");
$sql = "INSERT INTO evaluation (songname,id,comment,score) VALUES('".$_POST['song']."', '".$_POST['id']."', '".$_POST['comment']."','".$_POST['score']."')";
$result = mysqli_query($conn, $sql);
$sql2 = "INSERT INTO song(songname) VALUES('".$_POST['song']."')";
$result2 = mysqli_query($conn, $sql2);
header('Location:http://localhost/dbterm/search.php');
 ?>
