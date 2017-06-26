<?php
	if($_POST['user_id']=='admin'){
		session_start();
	$_SESSION['user_id'] = "admin";
		echo("<script>location.replace('admin.php');</script>"); 
	}
	if(!isset($_POST['user_id'])) exit;
	$conn = pg_connect("host=localhost dbname=postgres port=5432 user=postgres")
		or die("not connected");
		
	$res = "select member_id from member";
	$query = pg_exec($conn,$res);
	$id = pg_fetch_all_columns ($query);
	$user_id = $_POST['user_id'];
	$res2="select member_pw from member";
	$query2=pg_exec($conn,$res);
	$pw=pg_fetch_all_columns($query);
	$user_pw=$_POST['user_pw'];
	if(!in_array($user_id,$id)) {
        echo "<script>alert('아이디가 잘못되었습니다.');history.back();</script>";
        exit;
	}
	if(!in_array($user_pw,$pw)) {
	     echo "<script>alert('패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
	}
	session_start();
	$_SESSION['user_id'] = $user_id;
?>
	<meta http-equiv='refresh' content='0;url=main.php'>