<?php
    session_start();
    $c_code = 1;
	$_SESSION["c_code"] = $c_code;
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
			<h1 class="logo"><img src="img/header.jpg"></h1>
				<h2>案内</h2>
					<p class="p-mb">
						Jtendoソフトのパッケージ販売,ダウンロード販売サイトです。
					</p>
					<p class="p-mb">
						ソフトでは全年齢対象のソフトで絞り込むことができる為、お子様にも安心できるゲームを購入できます。
					</p>
					<p class="p-mb">
						カートではお求めするゲームソフトの購入ができます。
					</P>
					<p class="p-mb">
						サポートでは何かお困りごとが生じた場合の解決策が記載されております。
					</p>
			</main>
			<footer>
				<p class="footerline"></p>
				<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
			</footer>
	</body>
</html>