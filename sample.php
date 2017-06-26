<?php
echo "Hello!";

$servername = getenv('IP');
$username=getenv('C9_USER');
$password="";
$databse="c9";
$dbport=3306;

$db=new mysqli($servername,$username,$password.$database,$dbport);

if($db->connect_error){
    die("connection failed: ".$db->connect_error);
}
echo "connected successfully(".$db->host_info.")";

$sql= "INSERT INTO dept_no, dept_name)
VALUES(1,'datase1')";

if($db->quere($sql)===TRUE){
    echo "New record created successfully";
}else{
    echo "Error: ".$sql."<br>".$db->error;
}
$db->close();


?>
