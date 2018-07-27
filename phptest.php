<!DOCTYPE html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form action=./1.html method=post>
<input type="submit" value="login">
</form>
</body>
</html>
<?php
$db_host = "localhost";
$db_user="root";
$db_passwd = "kjs751300aa";
$db_name = "user_account";
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
if (!$conn){
	die('could not connect'.mysqli_connect_errno());
}
else{
	$select_query = "SELECT id, password FROM newuser";
	$result = mysqli_query($conn, $select_query);

	$row = mysqli_fetch_array($result);
	for($count = 0;3<=$count; $count++){
		print_r($row[$count]);
	}
	

	}


?>
