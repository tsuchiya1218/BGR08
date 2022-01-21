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
                <tr><th>商品名</th><th>価格</th><th>購入方法</th><th>購入個数</th></tr>
                <tr><td>商品サンプル01</td><td>24800</td><td>3</td><td><a href="detail.php">詳細</a></td></tr>
                <tr><td>商品サンプル02</td><td>2400</td><td>1</td><td><a href="detail.php">詳細</a></td></tr>
            </table>
		<footer>
				<p class="footerline"></p>
				<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
	</body>
</html>