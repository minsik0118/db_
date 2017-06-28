<?php session_start();?>
<html>
  <body>
    <?php echo $_SESSION['uid'];?>님 환영합니다<br/>

    <form action="search.php" method="post">
      <p>
        곡명:<input type="text" name="songname">
      </p>
      <input type="submit" name="name" value="검색">
    </form>
  </body>
</html>
<?php
$db=mysqli_connect("localhost","root","009953");
mysqli_select_db($db,"dbterm");
?>

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
		<table>
			<caption class="readHide"></caption>
			<thead>
				<tr>
					<th scope="col" class="name">곡명</th>
					<th scope="col" class="artist">가수</th>
					<th scope="col" class="album">앨범</th>
					<th scope="col" class="genre">장르</th>
				</tr>
			</thead>
			<tbody>
					<?php
						$sql = 'select * from song';
						$result = $db->query($sql);
						while($row = $result->fetch_assoc())
						{

					?>
				<tr>
					<td class="song"><?php echo' <li><a href="http://localhost/dbterm/view.php?songname='.$row['songname'].'">'.$row['songname'].'</a></li>'."\n" ?></td>
					<td class="aritst"><?php echo $row['artistname']?></td>
					<td class="album"><?php echo $row['albumname']?></td>
					<td class="genre"><?php echo $row['genre']?></td>
				</tr>
					<?php
						}
					?>
			</tbody>
		</table>
    <div class="btnSet">
				<a href="write.php" class="btnWrite btn">글쓰기</a>
			</div>
      <div class="btnSet">
  				<a href="evaluationlist.php" class="btnWrite btn">Mylist</a>
  			</div>

	</article>
</body>
</html>
