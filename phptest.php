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
$id = $_REQUEST['Id'];
$password =$_REQUEST['Passwd'];
$prevpage = $_SERVER['HTTP_REFERER'];
if(strlen($id)<=0){
echo "<script>alert(\"push your id or password\");</script>";
header('location:'.$prevpage);
}

$db_host = "localhost";
$db_user="root";
$db_passwd = "kjs751300aa";
$db_name = "user_account";
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
echo "id = ";
if (!$conn){
die('could not connect'.mysqli_connect_errno());
}
else{
$sql = "INSERT INTO topic(id, password) VALUES('$id', '$password');";
$result = mysqli_query($conn, $sql);
if ($result === false){
    echo mysqli_error($conn);
}
else {
$row = mysql_fetch_row('SELECT id FROM topic');
echo $row;
}
}

?>
