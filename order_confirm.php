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
        <h2>注文確認画面</h2>
        <p>下記の注文内容でよろしい場合は注文を確定するボタンを押してください。</p>
        <h3>・注文商品</h3>
        <table border="1">
            <tr>
                <th>商品名</th>
                <th>価格</th>
                <th>個数</th>
                <th>小計</th>
            </tr>
            <tr>
                <td>商品名サンプル1</td>
                <td>1980円</td>
                <td>3</td>
                <td>5940円</td>
            </tr>
            <tr>
                <td>商品名サンプル2</td>
                <td>198円</td>
                <td>4</td>
                <td>792円</td>
            </tr>
            <tr>
                <td>商品名サンプル3</td>
                <td>9800円</td>
                <td>5</td>
                <td>49000円</td>
            </tr>
        </table>
        <p>合計金額:55732円</p>
        <h3>・支払方法</h3>
        <p>クレジットカード払い</p>
        <form method="POST" action="order_complete.php">
            <input type="submit"value="注文を確定する">
        </from>
        <footer>
				<p class="footerline"></p>
				<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
    </body>
</html>
