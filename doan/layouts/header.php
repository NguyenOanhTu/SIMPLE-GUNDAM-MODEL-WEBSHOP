<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all,follow">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<style type="text/css">
		.container .row {
			min-height: 1000px;
		}
	</style>
</head>
<body>
	<div class="header">
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<FONT SIZE=20 FACE="Courier" COLOR="#99CC00"><b>GUNDAM SHOP</b></FONT>
		<a href="TrangChu.php"><img src="./images/hinh2.png" width="150px" height="150px" align="center" hspace="30"/></a>
		<FONT SIZE=20  FACE="Courier" COLOR="#99CC00"><b>SẢN PHẨM TỐT, GIÁ RẺ</b></FONT>
	</div>
	<!-- header -->
	<!-- Grey with black text -->
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	  <div class="container">
	  	<ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="TrangChu.php">Home</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="index.php">Products</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="TrangLienHe.php">About</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="VisitorEnquiryForm.php">Visitor Enquiry Form</a>
		    </li>
		  </ul>

<?php
$cart = [];
if(isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
}
$count = 0;
foreach ($cart as $item) {
	$count += $item['num'];
}
?>

			<a href="cart.php">
				<button type="button" class="btn btn-primary">
					Cart <span class="badge badge-light"><?=$count?></span>
				</button>
			</a>
	  </div>
	</nav>
</body>
</html>