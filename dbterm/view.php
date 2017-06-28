<?php
$db=mysqli_connect("localhost","root","009953");
mysqli_select_db($db,"dbterm");
?>
<?php
$song=$_GET['songname'];
echo $_GET['songname'];
echo $song;
$sql = 'SELECT * FROM song WHERE songname='.'"'.$_GET['songname'].'"';
$result=mysqli_query($db,$sql);
$row= mysqli_fetch_assoc($result);
$sql2 = 'SELECT * FROM evaluation WHERE songname='.'"'.$_GET['songname'].'"';
$result2=mysqli_query($db,$sql2);
$row2= mysqli_fetch_assoc($result2);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>띵곡</title>
<link rel="stylesheet" href="./css/normalize.css" />
<link rel="stylesheet" href="./css/board.css" />
</head>
<body>
<article class="boardArticle">
<h3>띵곡</h3>
<div id="boardView">
<h3 id="boardTitle">곡명: <?php echo $row['songname']?></h3>
<div id="boardInfo">
<p><span id="artist">아티스트: <?php echo $row['artistname']?></span></p>
<p><span id="album">앨범: <?php echo $row['albumname']?></span></p>
<p><span id="genre">장르: <?php echo $row['genre']?></span></p>

<p><span id="id">작성자: <?php echo $row2['id']?></span></p>
<p><span id="score">점수: <?php echo $row2['score']?></span></p>
<p><span id="text">한줄평: <?php echo $row2['comment']?></span></p>
</div>
</div>
</article>
</body>
</html>
