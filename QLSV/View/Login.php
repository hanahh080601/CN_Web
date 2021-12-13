<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
		body {
  			padding: 0;
  			margin: 0;
  			justify-content: center;
  			align-items: center;
  			display: flex;
		}

		.login-form {
			color: #301218;
  			margin-top: 25vh;
  			background: #d993a1;
  			padding: 30px;
  			display: flex;
  			flex-direction: column;
  			border-radius: 15px;
		}

		.login-form > input[type="text"], input[type="password"] {
  			margin-top: 2px;
  			margin-bottom: 15px;
  			outline: none;
  			border: none;
  			border-radius: 5px;
  			font-size: 1rem;
  			padding-left: 5px;
		}

		.btns {
  			display: flex;
  			justify-content: center;
  			align-items: center;
		}

		.btns > input[type="submit"] {
  			width: fit-content;
  			margin: 5px;
  			background: #a83850;
  			color: #ffffff;
  			outline: none;
  			border: none;
  			border-radius: 10px;
  			padding: 5px 10px;
		}
		
		.btns > input[type="submit"]:hover {
			cursor: pointer;
		}

	</style>
	
	<form class="login-form" action="../Controller/Controller_Login.php" method="post">
	<h1>Ðang nhập hệ thống</h1>
		Username: <input type="text" name="username" />
		Password: <input type="password" name="password" />

		<div class="btns"> 		
			<input type="submit" value="Login" />
  		</div>
	</form>
</body>
</html>