<?php
	$g_id = $_POST['g_id'];
	$qty = $_POST['qty'];
	$c_code = 1;
	require_once("DB.php");
	require_once("addcart.php");
?>
<!DOCTYPE html>
	<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jtendoトップ画面</title>
		<link href="./css/top.css" rel="stylesheet" type="text/css">
		<link href="./css/common.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<header>
			<nav>
				<ul class="gnav-list-1">
					<li><a href="top.php">Top<br>トップ</a></li>
					<li><a href="software.php">Software<br>ソフト</a></li>
					<li><a href="support.php">Support<br>サポート</a></li>
					<li><a href="cart.php">Cart<br>カート</a></li>
                    <li><a href="order_history.php">OrderHistory<br>注文履歴</a></li>
				</ul>
			</nav>
		</header>
        <main>
    		<a herf="top.php"></a>
	    	<a herf="cart.php"></a>
		    <h2><p class="title">追加完了</p></h2>
		    <p>カート追加完了しました</p>
            <input type="button" onClick="location.href='cart.php'" value="カート">
            <input type="button" onClick="location.href='software.php'" value="商品検索画面">
        </main>
		<footer>
				<p class="footerline"></p>
				<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
	</body>
</html>