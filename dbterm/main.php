<?php
$conn=mysqli_connect("localhost","root","009953");
mysqli_select_db($conn,"dbterm");
$result=mysqli_query($conn,"SELECT * FROM topic");


?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/dbterm/style.css">
  <h2>띵곡</h2>
</head>
<body>

  <article>
    <form action="logincheck.php" method="post">
      <p>
        ID   :  <input type="text" name="id">
      </p>
      <p>
        PW :  <input type="text" name="pw">
      </p>
      <input type="submit" name="name">
    </form>

  </article>


  <div id="control">
      <a href="http://localhost/dbterm/join.php">회원가입</a>
  </div>
</body>
</html>
