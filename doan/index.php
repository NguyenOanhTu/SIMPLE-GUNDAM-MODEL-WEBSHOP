<?php
	session_start();
	require_once('db/dbhelper.php');
	require_once('utils/utility.php');
	include_once('layouts/header.php');

	$productList = executeResult("select * from products");
?>
<head>
	<title>Products Page</title>
</head>
<!-- body -->
<div class="container">
	<div class="row">
<?php
	foreach ($productList as $item) {
		echo '
			<div class="col-md-3 col-6" style="padding: 5px; border: solid 1px #e4e3e3; text-align: center;">
				<button class="btn btn-success">Tra Gop: '.$item['percent'].'%</button>
				<a href="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%"></a>
				<a href="detail.php?id='.$item['id'].'"><p>'.$item['title'].'</p></a>
				<p style="color: red">'.number_format($item['price'], 0, '', '.').' vnđ</p>
			</div>';
	}
?>
	</div>
</div>
<?php
	include_once('layouts/footer.php');
?>