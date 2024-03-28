<?php
    include_once('layouts/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<style type="text/css">
		body{
	      min-height: 100%;
	    }
	</style>
</head>
<body>
	<br>
	<div align="center">
		<table>
			<h2>Đăng nhập thành viên</h2>
			<form action='<?php ($_SERVER['PHP_SELF'])?>' class="dangnhap" method='POST'>
				<table>
					<tr>
			          <td>
			            <label>Tên đăng ký</label><Br>
			            <input type="text" name="username" placeholder="Tên đăng nhập">
			          </td>
		        	</tr>
			        <tr>
			          <td>
			            <label>Mật khẩu</label><Br>
			            <input type="password" name="password" placeholder="Mật khẩu">
			          </td>
			        </tr>
				</table>
				<input type='submit' class="button" name="login" value='Đăng nhập'>
				<a href="register.php">Đăng ký</a><br>
			<form>
		</table>
	</div>
	<div class="footer">
		<h5>Copyright © 2022 All rights reserved nguyenoanhtu02@gmail.com</h5>
	</div>	
	<?php
	    include("connect.php");
		session_start();
		if (isset($_SESSION['username'])){
			unset($_SESSION['username']);
		}
		if (isset($_POST['login'])) {
				$username = addslashes($_POST['username']);
				$password = addslashes($_POST['password']);
			if (!$username || !$password) {
				echo "Nhập đầy đủ thông tin <a href='javascript: history.go(-1)'>Trở lại</a>";
				exit;
			}
			$password = md5($password);
			$query = "SELECT username, password FROM users WHERE username='$username'";
			$result = mysqli_query($connect, $query) or die( mysqli_error($conn));
			$row = mysqli_fetch_array($result);
			if ($password != $row['password']) {
				echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
				exit;
			}
			$_SESSION['username'] = $username;
			echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href='TrangThanhToan.php'>Vào trang</a>";
			die();
			$connect->close();
		}
    ?>
</body>
</html>
<?php
    include_once('layouts/footer.php');
?>