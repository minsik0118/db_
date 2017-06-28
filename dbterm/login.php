<?php session_start();?>
<html>
  <body>
    <?php echo $_SESSION['uid'];?>님 환영합니다<br/>

    <form action="search.php" method="post">

      <input type="submit" name="name">
    </form>
  </body>
</html>
