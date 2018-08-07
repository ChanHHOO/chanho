<!DOCTYPE html>
	<head>
		<title>signup</title>
	    	<meta charset="utf8" lang="ko">
			<style>
		    	#signup{
				position:absolute;
				left:35%;
				top:40%;
				}
			</style>
	</head>
	<body>
		<form id = "signup" action = "./signup.php" method="post">
			<fieldset style="position:absolute; width:500px;">
				ID :&nbsp;&nbsp;&nbsp; <input name="signup_id" type="text"><br />
				PASSWORD : <input name="signup_password"type="password"><br> 
				이름 : <input name="signup_name" type = "text"><br />
				email : <input name="signup_email_1"type = "text">@<input name = "signup_email_2" type="text"><br />
				<input type="submit" value = "signup">
			</fieldset>
		</form>
	</body>
</html>
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
	/*	$error_val = mysqli_error($conn);
		if ($error_val == "Duplicate entry '$signup_id' for key 'PRIMARY'"){
			echo "<script>alert(\"중복이다\")</script>";}*/
		}
	
	else{
		Header("Location:./main.php");
	}
}

?>
