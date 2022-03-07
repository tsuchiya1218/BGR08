<?php
	require_once("DB.php");
	$g_id = $_GET['g_id'];
	require_once("goods_detail.php");
?>
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
			<?php
				foreach($array as $value){
					echo"<p><img src=\"./img/{$value["g_image"]}\" width=\"250px\" height=\"300px\"/></p>";
					echo"<p>値段:{$value["g_price"]}円</p>";
					echo"<div class=\"yokonarabi\">";
					echo"<p class=\"left\">ソフト名:{$value["g_name"]}<br>説明文:{$value["g_detail"]}</p>";
				}
				$g_id = substr($g_id,-3);
			?>
						<form method="post" action="version_confirm.php">
							<p>購入方法</p>
							<p>パッケージ:<input type="radio" name="version" value="package" checked>
							ダウンロード:<input type="radio" name="version" value="download"></p>
							<input type="hidden" name="g_id" value="<?=$g_id?>">
							<input type="submit" value="購入に進む">
						</form>
					</div>
		</main>
		<footer>
				<p class="footerline"></p>
				<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
	</body>
</html>