<?php session_start();?>
<html>
  <body>
    <?php echo $_SESSION['uid'];?>님 환영합니다<br/>
  </body>
</html>

<?php
$db=mysqli_connect("localhost","root","009953");
mysqli_select_db($db,"dbterm");
?>

<html>
<head>
	<meta charset="utf-8" />
	<title>Mylist</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
</head>
<body>
	<article class="boardArticle">
		<h3>Mylist</h3>
		<table>
			<caption class="readHide"></caption>
			<thead>
				<tr>
					<th scope="col" class="name">곡명</th>
					<th scope="col" class="artist">id</th>
					<th scope="col" class="album">점수</th>
					<th scope="col" class="genre">코멘트</th>
				</tr>
			</thead>
			<tbody>
					<?php
          $sql2 = 'SELECT * FROM evaluation WHERE id='.'"'.$_SESSION['uid'].'"';
          $result2=mysqli_query($db,$sql2);

						while($row2= mysqli_fetch_assoc($result2))
						{

					?>
				<tr>
					<td class="song"><?php echo' <li><a href="http://localhost/dbterm/modify.php?songname='.$row2['songname'].'">'.$row2['songname'].'</a></li>'."\n" ?></td>
					<td class="aritst"><?php echo $row2['id']?></td>
					<td class="album"><?php echo $row2['score']?></td>
					<td class="genre"><?php echo $row2['comment']?></td>
				</tr>
					<?php
						}
					?>
			</tbody>
		</table>


	</article>
</body>
</html>
