<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>chanho</title>
    <style>
        #login{
            position: absolute;
            left: 40%;
            top: 40%;
            }
        #title{
            position:absolute;
            left: 40%;
            top: 30%;
            }
	#signup{
	    position:absolute;
	    left:45%;
	    top: 51.1%;
	}
		#signup_button{
			position: absolute;
			left : 47%;
			top: 51.1%;
		}
    </style>
</head>
    <body>
        <h1 id = "title">LOGIN</h1>
        <form id ="login"  action="/login_success.php" method="post">
            <fieldset style = "width:150px height = 150px;">
                Id: <br>
                <input type="text" name="id"><br>
                Password: <br />
                <input type="password" name="password"><br>
				<input type = "submit" id = "login_button" value = "login"></input>
            </fieldset>
        </form>
		<form action = "signup.php" method = "post">
   		<input type = "submit" id = "signup_button" value = "signup">
		</form>
	</body>
</html>
<?php
$recieve_id = $_REQUEST['id'];
$recieve_password = $_REQUEST['Passwd'];
$swich = 1;

// 창 새로고침 하면 변수값 초기화 시켜주기
$conn = mysqli_connect('localhost', 'root', 'kjs751300aa', 'user_account');
	if (!$conn){
		die ('could not connect'.mysqli_connect_errno());
		}
?>
