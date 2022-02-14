<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>商品詳細画面</title>
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
			<h2>ソフト詳細画面</h2>
			<p><img src="./img/Jtendosoftsample01.img" width="250px" height="300px"/></p>
			<p>値段:サンプル値段</p>
				<div class="yokonarabi">
				<p class="left">ソフト名:サンプル名<br>説明文:サンプル文</p>
				<form method="post" action="version_confirm.php">
					<p>購入方法</p>
					<p>パッケージ:<input type="radio" name="version" value="package" checked>
					ダウンロード:<input type="radio" name="version" value="download"></p>
					<input type="submit" value="購入へ進む">
				</form>
			</div>
		</main>
		<footer>
				<p class="footerline"></p>
				<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
	</body>
</html>