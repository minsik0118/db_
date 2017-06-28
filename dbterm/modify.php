<?php session_start();?>
<html>
  <body>
    <?php echo $_SESSION['uid'];?>님 환영합니다<br/>
  </body>
</html>


<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
  수정
</head>
<body>

  <article>
    <form action="modifyprocess.php" method="post">
      <p>
        id:<input type="text"  name="id">
      </p>
      <p>
        곡명:<input type="text" name="song">
      </p>
      <p>
        점수:<input type="text" name="score">
      </p>
      <p>
        평가:<textarea name="comment" ></textarea>
      </p>
      <input type="submit" name="name">
    </form>

  </article>
</body>
</html>
