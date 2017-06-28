<?php
  session_start();
    $conn = mysqli_connect("localhost", "root", "009953");
    mysqli_select_db($conn, "dbterm");

    $uid = $_POST['id'];
    $upw = $_POST['pw'];
    if($uid=="admin"){
      echo "<meta http-equiv='refresh' content = '0; url=http://localhost/dbterm/admin.php'>";
    }
    else{
    $sql = "select * from member where id = '$uid' and pw = '$upw'";
    $result = mysqli_query($conn,$sql)   ;
    $count=mysqli_num_rows($result);

    if ($count==1){
      $_SESSION['uid']=$uid;
      header("Location:search.php");
    } else {
         echo '<script type = "text/javascript">alert("아이디나 패스워드를 잘못입력하셨습니다.")</script> ';
         echo "<meta http-equiv='refresh' content='0; url=http://localhost/dbterm/main.php'>";
    }
  }
 ?>
