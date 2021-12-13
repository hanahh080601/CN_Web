<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Đăng kí</title>
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
		
		#select {
			margin-top: 2px;
  			margin-bottom: 15px;
  			outline: none;
  			border: none;
  			border-radius: 5px;
  			font-size: 1rem;
  			padding-left: 8px;
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
	
	<form class="login-form" action="../Controller/Controller_Student.php?mod=Add" method="post">
		MSSV: <input type="text" name="mssv" value=""/>
		Họ và tên: <input type="text" name="hoten" />
        Giới tính: <span><input type="radio" name="gioitinh" value="Nữ"/> Nữ </span>
        		   <span><input type="radio" name="gioitinh" value="Nam"/> Nam </span>
		Khoa: 
		<select id="select" name="khoa">
		<?php
        for($i = 0; $i < sizeof($khoas); $i++) {
        ?>
        <option value="<?php echo $khoas[$i]->tenkhoa ?>"><?php echo $khoas[$i]->tenkhoa ?></option>
        <?php
        } 
        ?>
		</select>
		<div class="btns"> 		
			<input type="submit" value="Thêm" />
  		</div>
	</form>
</body>
</html>