<!DOCTYPE html>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="common.css">

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="common.css">
	</head>
	<body>
		<form method='post' action='login_ok.php'>
			<table>
				<tr>
					<td>아이디</td>
					<td><input type='text' name='user_id' tabindex='1'/></td> 
					<td>패스워드</td>
				    <td><input type='text' name='user_pw' tabindex='2'/></td>
				    
					<td rowspan='2'><input type='submit' tabindex='3' value='로그인' style='height:25px'/></td>
				</tr>
				
			</table>
		</form>
	</body>
</html>