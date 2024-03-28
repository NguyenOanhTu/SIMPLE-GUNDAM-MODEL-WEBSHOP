<?php session_start(); ?>
<?php 
       if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
           echo 'Click vào đây để <a href="logout.php">Logout</a>';
       }
       else{
           echo 'Bạn chưa đăng nhập';
       }
       ?>
<?php
    include_once('layouts/header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thanh Toán</title>
    <!-- <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <style>
        body{
            background: url("./images/hinh36.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            min-height: 100%;
        }
    </style>
    <script type="text/javascript">
        function validate() {
          var cbox = document.forms["myForm"]["accept"];
          if (cbox.checked == false) {
            alert("Bạn chưa chưa đồng ý!!!");
            return false;
          } else {
            let newWin = window.open("", "", "width=400,height=170");
                {
                    newWin.document.write("<h3>Bạn đã mua hàng thành công<\/h3>");
                }
            return true;
          }
        }
    </script>
</head>
<body>
    <br><br>
    <div align="center" >
        <table  frame="" bordercolor="#008000" bgcolor="#FFFFFF" cellspacing="0">
            <form  onload="return validate()" name="myForm">
                <tr>
                    <td colspan="2" align="center">
                        <font color="#FF9900" size=5>THÔNG TIN THANH TOÁN</font>
                    </td>
                </tr>
                <tr>
                    <td>Họ và tên:</td>
                    <td>
                        <input type="text" name="fullname" id="fullname" required placeholder="your name here">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" name="email" id="email" required placeholder="youremail@gmail.com">
                    </td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td>
                        <input type="tel" name="tel" id="tel" required>
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td>
                        <input type="text" name="diachi" id="diachi" required>
                    </td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td>
                        <input type="radio" name="gender" id="gender" value="Nam" required >Nam
                        <input type="radio" name="gender" id="gender" value="Nữ" required >Nữ
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Tôi đồng ý mua hàng</p>
                    </td>
                    <td>
                        <input type="checkbox" name="accept" id="accept" value="accept">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" id="submit" value="Xác nhận" onclick="validate()">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>    
    </div>
</body>
</html>
<?php
    include_once('layouts/footer.php');
?>