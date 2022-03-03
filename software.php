<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="center.css" type="text/css">
        <link href="./css/common.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title>Jtendoソフト</title>
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
            <h2>発売中のソフト</h2>
            <form method="POST" action="soft.php">
                <font color="#3f5170">ゲームソフト名</font><input type="text" name="softname"><br>
                <font color="#3f5170">絞り込み</font>
                全年齢対象<input type="checkbox" name="searchrate" value="A">
                Jtendoソフト<input type="checkbox" name="searchsoft" value="Jsoft">
                オンライン対応<input type="checkbox" name="searchonline" value="online"><br>
                <font color="#3f5170">ソート</font>
                <select name="sort">
                <option value="ranking">ランキング</option>
                <option value="hprice">高価格順</option>
                <option value="rprice">低価格順</option>
                <option value="newsoft">新しいソフト</option>
                <option value="oldsoft">古いソフト</option>
                </select><br>
                <input type="submit" value="この条件で検索">
            </form>
            <table class="center">
                <tr>
                    <th>商品画像</th>
                    <th>タイトル</th>
                    <th>価格</th>
                    <th>商品詳細</th>
                </tr>
                <tr>
                    <td><img src="./img/Jtendosoftsample01.img" width="100px" height="150px"/></td>
                    <td>ダクソ</td>
                    <td>12800円</td>
                    <td><a href="detail.php">詳細</a></td>
                </tr>
                <tr>
                    <td><img src="./img/Jtendosoftsample02.img" width="100px" height="150px"/></td>
                    <td>アーマードコア</td>
                    <td>12800円</td>
                    <td><a href="detail.php">詳細</a></td>
                </tr>
            </table>
            <button type="button" onclick="history.back()">戻る</button>
        </main>
        <footer>
			<p class="footerline"></p>
			<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
    </body>
</html>