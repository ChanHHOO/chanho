<?php
$id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$message = "fail";
$id_swich = 0;
$password_swich = 0;
$conn = mysqli_connect('localhost', 'root', 'kjs751300aa', 'user_account');
if (!$conn){
	die ('could not connect'.mysqli_connect_errno());
	}
else{
	$result = mysqli_query($conn, 'select * from newuser');
	 while ($row = mysqli_fetch_array($result))
	 {
		if ($row['id'] === $id and $row['password']===$password) {
			$id_swich = 1;
			$password_swich = 1;
			break;
	    	}
		$id_swich = 0;
		$password_swich = 0;
		}
	 }
	 if($password_swich == 1 and $id_swich==1){
	 	Header('Location: ./main.php');
	 }
	echo $id_swich, $password_swich;

?>
