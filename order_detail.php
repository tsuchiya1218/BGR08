<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>注文履歴画面</title>
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
			<h2>注文履歴画面</h2>
            <table border="1">
                <tr><th>商品名</th><th>価格</th><th>商品詳細</th><th>商品画像</th><th>個数</th><th>小計</th></tr>
                <tr><td>商品サンプル01</td><td>24800円</td><td><a href="detail.php">詳細</a></td><td><img src="./img/Jtendosoftsample01.img" width="50px" height="75px"/></td><td>5</td><td>124000円</td></tr>
                <tr><td>商品サンプル02</td><td>2400円</td><td><a href="detail.php">詳細</a></td><td><img src="./img/Jtendosoftsample01.img" width="50px" height="75px"/></td><td>3</td><td>7200円</td></tr>
            </table>
			<p>合計金額:131200円</P>
		<footer>
				<p class="footerline"></p>
				<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
	</body>
</html>