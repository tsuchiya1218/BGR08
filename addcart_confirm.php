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
			<h2>カート追加確認画面</h2>
            <P>カートに追加する商品は以下のもので大丈夫か確認してください。</p>
                <table>
                    <tr>
                        <th>商品画像</th>
                        <th>タイトル</th>
                        <th>価格</th>
                        <th>商品詳細</th>
                        <th>個数</th>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <img src="./img/Jtendosoftsample01.img">
                            </div>
                        </td>
                        <td>ダクソ</td>
                        <td>12800円</td>
                        <td><a href="detail.php">詳細</a></td>
                        <td>
                            <form method="POST" action="addcart_complete.php">
                                <input type="number" name="qty" value="1">
                                <input type="submit" value="個数を決定しカートに追加する">
                            </form>
                        </td>
                    </tr>
                </table>
		</main>
		<footer class="footerline">
			<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
    </body>
</html>