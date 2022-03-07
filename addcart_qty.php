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
			<h2>購入個数選択画面</h2>
			<?php
				foreach($array as $value){
                    echo "<tr>\n";
                    echo " <td><img src=\"./img/{$value["g_image"]}\" width=\"100px\" height=\"150px\"/></td>\n";
                    echo " <td>{$value["g_name"]}</td>\n";
                    echo " <td>{$value["g_price"]}円</td>\n";
                    echo " <td><a href=\"detail.php?g_id={$value["g_id"]}\">詳細</a></td>\n";
                    echo "</tr>\n";
            }
			?>
						<form method="post" action="addcart_complete.php">
							<p>購入個数を選択してください</p>
                            <p>
                                <select name="qty">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            個<br></P>                
							<input type="hidden" name="g_id" value="<?=$g_id?>">
							<input type="submit" value="カートに追加する">
						</form>
					</div>
		</main>
		<footer>
				<p class="footerline"></p>
				<p><small>&copy;Copyright Jtendo. All rights reserved.</small><p>
		</footer>
	</body>
</html>