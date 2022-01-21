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
            <h2>カート</h2>
            <table>
                <tr>
                    <th>商品画像</th>
                    <th>タイトル</th>
                    <th>価格</th>
                    <th>商品詳細</th>
                    <th>個数</th>
                    <th>削除する</th>
                </tr>
                <tr>
                    <td>
                        <div>
                            <img src="./img/Jtendosoftsample01.img">
    </div>
                    </td>
                    <td>ダクソ</td>
                    <td>12800</td>
                    <td><a href="detail.php">詳細</a></td>
                    <td>
                        <form method="POST" action="cartgoods_edit.php">
                            個数:<input type="text" name="qty" value="1">
                            <input type="submit" value="変更する">
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="cartgoods_delete.php">
                            <input type="hidden" name="商品" value="商品">
                            <input type="submit" value="カートから削除する">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><img src="./img/Jtendosoftsample02.img"/></td>
                    <td>アーマードコア</td>
                    <td>12800</td>
                    <td><a href="detail.php">詳細</a></td>
                    <td>
                        <form method="POST" action="cartgoods_edit.php">
                            個数:<input type="text" name="qty" value="2">
                            <input type="submit" value="変更する">
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="cartgoods_delete.php">
                            <input type="hidden" name="商品" value="商品">
                            <input type="submit" value="カートから削除する">
                        </form>
                    </td>
                </tr>
            </table>
            <p>小計:38400</p>
            <p>送料:200</p>
            <p>購入金額:38600</p>
            <form method="POST" action="payment.php">
                <input type="submit" value="購入する">
            </form>
            <button type="button" onclick="history.back()">戻る</button>
        </main>
		<footer class="footerline">
			<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
    </body>
</html>