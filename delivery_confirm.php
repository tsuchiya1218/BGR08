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
			<h2>届け先確認画面</h2>
            <form method="POST" action="delivery_confirm.php">
                <p>名前:T部 R星</p>
                <p>住所:宮城県仙台市青葉区本町3丁目8番1号</p>
                <P>メールアドレス:2ojyo226@jec.ac.jp</p>
                <p>郵便番号:980-8570</p>
                <p>電話番号:022-211-2111</p>
                <p>届け先を変更する</p>
                <p>名前:<input type="text" name="customer_name"></p>
                <P>メールアドレス:<input type="text" name="mail"></p>
                <p>住所:<input type="text" name="address"></p>
                <p>郵便番号:<input type="text" name="post_code"></p>
                <p>電話番号:<input type="tel" name="tel"></p>
                <input type="submit" value="変更する">
            </form>
            <input type="button" value="確定する" class="itemButton" onclick="location.href='payment.php'">
		</main>
		<footer>
				<p class="footerline"></p>
				<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
	</body>
</html>