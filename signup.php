<?php
$signup_id = $_REQUEST['signup_id'];
$signup_pass = $_REQUEST['signup_password'];
$signup_email = $_REQUEST['signup_email_1'].'@'.$_REQUEST['signup_email_2'];
$signup_name = $_REQUEST['signup_name'];
$signup_val = array($signup_id, $signup_pass, $signup_email, $signup_name);
$conn = mysqli_connect('localhost', 'root', 'kjs751300aa', 'user_account');
if (!$conn){
	die ('could not connect'.mysqli_connect_errno());
}
else{
	$sql = "INSERT INTO newuser(id, password, email, name) VALUES('$signup_id','$signup_pass','$signup_email','$signup_name')";	
	$result = mysqli_query($conn, $sql);
	if ($result === false){
		$error_val = mysqli_error($conn);
		if ($error_val == "Duplicate entry '' for key 'PRIMARY'"){
			echo "이미 있는 아이디임 딴거 쓰셈ㅋㅋ";
		}
	}

}
?>
