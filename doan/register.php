<?php
    include_once('layouts/header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Đăng ký</title>
  <style type="text/css">
    body{
        min-height: 100%;
      }
  </style>
</head>
<body>
    <br>
    <div align="center">
        <h2>Đăng ký thành viên</h2>
        <form method="POST" action="<?php ($_SERVER['PHP_SELF'])?>">
          <table>
            <tr>
              <td>
                <label>Tên đăng ký</label><Br>
                <input type="text" name="username" placeholder="Tên đăng ký">
              </td>
            </tr>
            <tr>
              <td>
                <label>Mật khẩu</label><Br>
                <input type="password" name="password" placeholder="Mật khẩu">
              </td>
            </tr>
            <tr>
              <td>
                <label>Email</label><Br>
                <input type="email" name="email" placeholder="Địa chỉ Email">
              </td>
            </tr>
          <tr>
            <td>
              <button type="submit" class="btn" name="registerBtn">Đăng ký</button>
              <a href="login.php">Đăng nhập</a>
            </td>
          </tr>
          </table>
        </form>
    </div>
    <?php
    include("connect.php");
    if (isset($_POST['registerBtn'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $password =md5($password);
      $email = $_POST['email'];
      $query = mysqli_query($connect, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
      echo 'Đăng ký thành công!';
    }
    ?>
</body>
</html>
<?php
    include_once('layouts/footer.php');
?>