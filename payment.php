<!DOCTYPE html>
<html>
    <head>
        <link href="./css/common.css" rel="stylesheet" type="text/css">
        <link href="./css/imgsize.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title>カート</title>
    </head>
    <body class="center">
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
            <h2>支払方法選択画面</h2>
                <form method="POST" action="order_confirm.php">
                    <p>クレジットカード払い<input type="radio" name="payment" value="credit">代金引換<input type="radio" name="payment" value="CoD"></p>
                    <input type="submit" value="購入方法を決定する">
                </form>
            <button type="button" onclick="history.back()">戻る</button>
        </main>
		<footer class="footerline">
			<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
    </body>
</html>